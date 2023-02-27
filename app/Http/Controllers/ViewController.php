<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use App\Post;
use App\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\EditProfileRequest;

class ViewController extends Controller
{
	function __construct()
	{
		$this->middleware('verified',['only'=>['profile_edit','update_profile']]);
		$this->middleware('auth',['only'=>['profile_edit','update_profile']]);
	}
    public function index()
    {
    	return view('pages.index');
    }
    public function blog()
    {   $posts = Post::latest()->paginate(3);
        return view('pages.blog',compact('posts'));
    }
    public function become_pro_coach()
    {
        return view('pages.become_wow_coach');
    }
    public function article($slug)
    {
        $post = Post::where('slug','=',$slug)->firstOrFail();
            $viewsCount = $post->viewsCount;
            $post->viewsCount = $viewsCount+1;
            $post->save();
        return view('pages.article',compact('post'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function get_trainers(Request $request)
    {
        $trainers = User::where('email_verified_at','!=',NULL);
        if ($request->filled('type')) {
                $type = [$request->get('type')];
                $trainers->whereHas('experties', function($query) use ($type) {
                $query->whereIn('slug', $type);
            });
        }
        if ($request->filled('location')) {
                $location = [$request->get('location')];
                $trainers->whereHas('training_locations', function($query) use ($location) {
                $query->whereIn('slug', $location);
            });
        }
        $trainers = $trainers->paginate(12);
        return view('pages.trainers',compact('trainers'));
    }
     public function guidance()
    {
        return view('pages.guidance');
    }
    public function profile($slug)
    {
    	$user = User::where('slug','=',$slug)->firstOrFail();
        if (Auth::check() && $this->isProfileUpdated($user) != TRUE && Auth::user()->id == $user->id) {
            return redirect('edit_profile/'.$user->slug);
        }
    	return view('pages.profile',compact('user'));
    }
    public function profile_edit($slug)
    {
    	$user = User::where('slug','=',$slug)->firstOrFail();
    	if (Auth()->user()->id == $user->id) {
    		return view('pages.edit_profile',compact('user'));
    	}
    	return abort(404);
    }

    public function update_profile(EditProfileRequest $request)
    {
        $user = Auth::user();
        $user->update([
            'name'              =>$request->input('name'),
            'gender'            =>$request->input('gender'),
        ]);
        $user->info()->update([
            'location'          =>$request->input('user_location'),
            'price_for_one'     =>$request->input('price_for_one'),
            'price_for_group'   =>$request->input('price_for_group'),
            'reps_number'       =>$request->input('res_number'),
            'free_trial'        =>$request->input('free_trial'),
            'phone'             =>$request->input('phone'),
            'about'             =>$request->input('about'),
            'facebook'          =>$request->input('facebook'),
            'twitter'           =>$request->input('twitter'),
            'instagram'         =>$request->input('instagram'),
        ]);

        $user->experties()->sync($request->input('experties'));
        $user->languages()->sync($request->input('language'));
        $user->training_locations()->sync($request->input('location'));
        $user->like_to_work_with()->sync($request->input('work_with'));

        if ($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $extension = $file->extension();
            $name = microtime().rand().uniqid().".".$extension;
            $file->move(public_path('img/'),$name);
            Image::where('id','=',$user->image->id)->update(['imageable_id'=>$user->id,'imageable_type'=>'App\User','url'=>$name]);
        }

        return redirect('/'.Auth::user()->slug)->with('success','Profile Updated');
    }
    public function change_password()
    {
       return view('pages.change_password');
    }
    protected function isProfileUpdated($user)
    {
        if (!$user->info->location) {
            // session()->put('danger', 'You have not mentioned your Price!');
            return false;
        }
        elseif (!$user->info->price_for_one) {
            // session()->put('danger', 'You have not mentioned your Price!');
            return false;
        }
        elseif($user->experties->count() < 1){
            // session()->put('danger', 'You have not mentioned your Experties!');
            return false;
        }
        elseif ($user->languages->count() < 1) {
            // session()->put('danger', 'You have not mentioned your Language!');
            return false;
        }elseif ($user->training_locations->count() < 1) {
            // session()->put('danger', 'You have not mentioned your Training Location!');
            return false;
        }else{
            // session()->forget('danger');
            return true;
        }
    }

}
