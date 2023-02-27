<?php 
namespace App\Services;
use App\Post;
use App\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostService 
{
	public function create($request)
	{
		$post = Post::create([
			'title'=>$request->input('title'),
			'content'=>$request->input('content'),
            'slug'=>Str::slug($request->input('title')),
            'user_id'=>Auth::user()->id,
		]);
		if($file=$request->file('image')){
                $extension = $file->extension();
                $name = Str::slug($request->input('title')).".".$extension;
                $file->move(public_path('img/'),$name);
                $image_name = $name;
        }else{
                $image_name = 'post.jpg';
        }
		$image = Image::create([
            'url'               =>$image_name,
            'imageable_id'      =>$post->id,
            'imageable_type'    =>'App\Post',
        ]);
		if ($post) {
			return redirect('/'.Auth::user()->slug)->with('success','Post Created');
		}else{
			return back()->withInput()->with('danger','Something went wrong creating in post');
		}
	}
	public function find($slug)
	{
		$post = Post::where('slug', $slug)->first();
		if ($post) {
			return $post;
		}else{
			return abort(404);
		}
	}
	public function update($request,$post)
	{
		$post = Post::find($post->id);
		$post->title 	=	$request->input('title');
		$post->content 	=  	$request->input('e_content');

		if($file=$request->file('image')){
                $extension = $file->extension();
                $name = Str::slug($request->input('title')).".".$extension;
                $file->move(public_path('img/'),$name);
                $image_name = $name;
                $image = Image::where('id','=',$post->image->id)->update(['url'=>$image_name]);
        }
        $post->save();
		if ($post) {
			return redirect()->back()->with('success','Post Updated');
		}else{
			return back()->with('danger','something went wrong updating post');
		}
	}
	public function delete($post)
	{
		$post->delete();
        return  redirect()->back()->with('success', 'Post Deleted');
	}
}