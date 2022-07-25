<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Http\Requests\TrackingRequest;
use App\Models\ProductCategory;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackings = Tracking::all();

        return view('tracking.index', compact('trackings'));
    }

    /**
     * Display a listing of the resource in frontend.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //dd("tracking");
        $trackings = Tracking::all();
        $categories=ProductCategory::all();

        return view('tracking.list', compact('trackings','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tracking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrackingRequest $request)
    {
        $validatedData = $request->validated();
        $tracking = new Tracking;
        $tracking->date = $request->date;
        $tracking->link = $request->link;
        $tracking->description = $request->description;
        $tracking->state = $request->state;

        if($tracking->save()){
            return redirect()->route('tracking.index')->with('update_success','Tracking bien enregistré');
        }

        else
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function show(Tracking $tracking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracking $tracking)
    {
        return view('tracking.edit', compact('tracking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(TrackingRequest $request, Tracking $tracking)
    {
        $validatedData = $request->validated();
        $tracking->update($request->all());

        if($tracking->update()){
            return redirect()->route('tracking.index')->with('update_success','Tracking bien enregistré');
        }

        else
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracking $tracking)
    {
        $tracking->delete();
         return redirect()->route('tracking.index')->with('update_success','Tracking bien supprimé');

    }
}
