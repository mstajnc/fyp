<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Asset;
use App\Location;
use App\Contact;

use Gate;
use Validator;

class AssetController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('manage_assets')) {
            return view('errors.permissions');
        }
        $assets = Asset::all();
        return view('assets.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        if (Gate::denies('manage_assets')) {
            return view('errors.permissions');
        }
        $locations = Location::all();
        $contacts = Contact::all();
        return view('assets.create', compact('locations'), compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if (Gate::denies('manage_assets')) {
            return view('errors.permissions');
        }
        $this->validate($request, [
            'asset' => 'required|max:255',
            'quantity' => 'required|numeric|max:80',
            ]);
        $asset = new Asset($request->all());
        $asset->save();
        return redirect('/assets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {   
        if (Gate::denies('manage_assets')) {
            return view('errors.permissions');
        }
        $asset->load('location', 'contact')->get(); //to load details of given location and contact
        return view('assets.show', compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {   
        if (Gate::denies('manage_assets')) {
            return view('errors.permissions');
        }
        return view('assets.edit', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $asset)
    {   
        if (Gate::denies('manage_assets')) {
            return view('errors.permissions');
        }
        $this->validate($request, [
            'asset' => 'required|max:255',
            'quantity' => 'required|numeric|max:80',
            ]);
        $asset = Asset::where('_id', $asset)->first();
        $asset->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($asset)
    {   
        if (Gate::denies('manage_assets')) {
            return view('errors.permissions');
        }
        Asset::findOrFail($asset)->delete();
        return redirect('/assets');
    }

    public function location(Asset $asset)
    {   
        if (Gate::denies('manage_assets')) {
            return view('errors.permissions');
        }
        $asset->load('location')->get();
        $locations = Location::all();
        return view('assets.location', compact('asset', 'locations'));
    }

    public function location_update(Request $request, $asset)
    {   
        if (Gate::denies('manage_assets')) {
            return view('errors.permissions');
        }
        $asset = Asset::where('_id', $asset)->first();
        $asset->update($request->all());
        return back();
    }

    public function contact(Asset $asset)
    {   
        if (Gate::denies('manage_assets')) {
            return view('errors.permissions');
        }
        $asset->load('contact')->get();
        $contacts = Contact::all();
        return view('assets.contact', compact('asset', 'contacts'));
    }

    public function contact_update(Request $request, $asset)
    {   
        if (Gate::denies('manage_assets')) {
            return view('errors.permissions');
        }
        $asset = Asset::where('_id', $asset)->first();
        $asset->update($request->all());
        return back();
    }
}
