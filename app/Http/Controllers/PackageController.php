<?php

namespace App\Http\Controllers;

use App\Models\package;
use App\Models\town;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $towns=town::all();
        $packages=package::all();
        return view('packages.index',compact('towns','packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('packages.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package=new package;
        $package->description=$request->description;
        $package->length=$request->length;
        $package->width=$request->width;
        $package->weight=$request->weight;
        $package->departure=$request->departure;
        $package->destination=$request->destination;
        $package->user_id=auth()->user()->id;
        if($package->save()){
            return redirect()->route('packages.index')->with('update_success','Colis bien enregidtré');

        }
        else{
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(package $package)
    {
        $package->delete();

        return back()->with('delete','votre Produit à bien été bien supprimé');
    }
}
