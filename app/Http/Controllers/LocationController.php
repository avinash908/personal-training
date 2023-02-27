<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('locations.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Location::create([
            'location' => $request->input('location'),
            'slug' => Str::lower(Str::slug($request->input('location'))),
        ]);
        return redirect()->route('locations.index')->with('success', 'A new Location Added..');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $Location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $Location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $Location
     * @return \Illuminate\Http\Response
     */
    public function edit($Location)
    {
        $location = Location::find($Location);
        $view = view("locations.edit",compact('location'))->render();
        return response()->json(['html'=>$view]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $Location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $location = Location::where('id','=',$id)->update(['location'=>$request->input('location')]);
        return redirect()->route('locations.index')->with('success','Location updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $Location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location = Location::find($location->id);
        $location->delete();
        return redirect('locations')->with('success','Location Deleted...');
    }
}
