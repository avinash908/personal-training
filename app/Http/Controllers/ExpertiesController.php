<?php

namespace App\Http\Controllers;

use App\Image;
use App\Experties;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ExpertiesRequest;

class ExpertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experties = Experties::all();
        return view('experties.index',compact('experties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpertiesRequest $request)
    {
        $title = Str::lower($request->input('title'));
        $slug  = Str::slug($title);
        $experties = Experties::create(['title'=>$title,'slug'=>$slug]);

        if($file=$request->file('image')){
                $extension = $file->extension();
                $name = $slug.uniqid().".".$extension;
                $file->move(public_path('img/icon'),$name);
                $image_name = $name;
        }else{
                $image_name = 'no-icon.png';
        }
        $image = Image::create([
            'url'               =>$image_name,
            'imageable_id'      =>$experties->id,
            'imageable_type'    =>'App\Experties',
        ]);

        return redirect()->route('experties.index')->with('success','Experties Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Experties  $experties
     * @return \Illuminate\Http\Response
     */
    public function show(Experties $experties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experties  $experties
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $experties = Experties::find($id);
        $view = view("experties.edit",compact('experties'))->render();
        return response()->json(['html'=>$view]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experties  $experties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $experties)
    {
        $experties = Experties::find($experties);
        $title = Str::lower($request->input('title'));
        $slug  = Str::slug($title);
        $experties->title = $title;
        $experties->slug  = $slug;
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $extension = $file->extension();
            $name = $slug.uniqid().".".$extension;
            $file->move(public_path('img/icon'),$name);
            $image_name = $name;
            Image::where('imageable_id','=',$experties->id)->update(['url'=>$image_name]);
        }
        $experties->save();
        return redirect('experties')->with('success','updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experties  $experties
     * @return \Illuminate\Http\Response
     */
    public function destroy($experties)
    {
        $experties = Experties::find($experties);
        $experties->delete();
        return redirect('experties')->with('success','Deleted');
    }
}
