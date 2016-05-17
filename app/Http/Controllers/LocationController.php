<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Location;

use Gate;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('manage_locations')) {
            return view('errors.permissions');
        }
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('manage_locations')) {
            return view('errors.permissions');
        }
       return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::denies('manage_locations')) {
            return view('errors.permissions');
        }
        $this->validate($request, [
            'location' => 'required|max:255',
            'allowed_units' => 'required|numeric',
            ]);
        $location = new Location($request->all());
        $location->save();
        return redirect('/locations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        if (Gate::denies('manage_locations')) {
            return view('errors.permissions');
        }
        return view('locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        if (Gate::denies('manage_locations')) {
            return view('errors.permissions');
        }
        return view('locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $location)
    {
        if (Gate::denies('manage_locations')) {
            return view('errors.permissions');
        }
        $location = Location::where('id', $location)->first();
        $location->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($location)
    {
        if (Gate::denies('manage_locations')) {
            return view('errors.permissions');
        }
        Location::findOrFail($location)->delete();
        return redirect('/locations');
    }
}
