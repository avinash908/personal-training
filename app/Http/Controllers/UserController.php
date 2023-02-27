<?php

namespace App\Http\Controllers;

use App\User;
use App\UserInfo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserCreateRequest;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('admin_access',['except'=>['index','change_pswd']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id','!=',1)->latest()->get();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $user = User::create([
            'name' => Str::lower($request->input('name')),
            'slug' => Str::slug(Str::lower($request->input('name'))),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'role_id' => $request->input('role_id'),
            'password' => Hash::make($request->input('password')),
        ]);
        $user->image()->create(['url'=>'user-default.png']);
        $info = new UserInfo();
        $user->info()->save($info);
        return redirect()->route('users.index')->with('success','User has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $user = User::find($user);
        $view = view("users.edit",compact('user'))->render();
        return response()->json(['html'=>$view]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $user = User::find($user);
        $name = Str::lower($request->input('name'));
        $slug  = Str::slug($name);

        $user->name = $name;
        $user->slug  = $slug;
        $user->email  = $request->input('email');
        $user->gender  = $request->input('gender');
        $user->role_id  = $request->input('role_id');
        $user->save();
        return  redirect()->route('users.index')->with('success','User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return  redirect()->route('users.index')->with('success','User has been deleted');
    }

    public function change_pswd(Request $request)
    {
        $user = Auth::user();
        if (!(Hash::check($request->input('current_password'), Auth::user()->password))) {
             return back()->withInput()->with('danger', 'Current password is wrong');
        }
        $validated = $request->validate([
            'current_password'      => 'required',
            'password'              => 'required|confirmed|max:8',
            'password_confirmation' => 'required',
        ]);
       $user->fill(['password' => Hash::make($request->input('password'))])->save();
        return redirect()->back()->with('success', 'Password has been changed');
    }
    public function change_email(Request $request)
    {
        $user = Auth::user();
        $validated = $request->validate(['email'=>'required|email']);
        if(!$validated){
            return back()->withInput();
        }
        $user->fill(['email' => $request->input('email')])->save();
        return redirect('settings')->with('success', 'Email has been changed');
    }
}
