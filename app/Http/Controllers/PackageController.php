<?php

namespace App\Http\Controllers;

use App\Mail\SendPackageMail;
use App\Models\package;
use App\Models\town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ProductCategory;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $towns = town::all();
        $categories=ProductCategory::all();
        $packages = package::all()->where('user_id','=',auth()->user()->id);

        if (auth()->user()->role_id == 2 || auth()->user()->role_id == 3)

            return view('packages.index', compact('towns', 'packages','categories'));

        if (auth()->user()->role_id == 1)
        $packages = package::all();
            return view('packages.view-admin', compact('towns', 'packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Loading towns
        $departures = Town::where('type', 1)
            ->orderBy('name')
            ->get();
            $categories=ProductCategory::all();

        $destinations = Town::where('type', 0)
            ->orderBy('name')
            ->get();
        //dd($departures);
        return view('packages.create', compact('departures', 'destinations','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package = new package;
        $package->description = $request->description;
        $package->length = $request->length;
        $package->width = $request->width;
        $package->weight = $request->weight;
        $package->departure = $request->departure;
        $package->destination = $request->destination;
        $package->user_id = auth()->user()->id;

        $packagedata = [
            'description' => $package->description,
            'lenght' => $package->length,
            'width' => $package->width,
            'weight' => $package->weight,
            'departure' => $package->departure,
            'destination' => $package->destination,
            'name' => auth()->user()->name
        ];
        //Mail::to('delanofofe@gmail.com')->send(new SendPackageMail($packagedata));
        if ($package->save()) {
            return redirect()->route('packages.index')->with('update_success', 'Colis bien enregidtr??');
        } else {
            return redirect()->back()->with('update_failure', 'Une erreur est survenue, veuillez r??essayez plutard');
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
    public function edit($id)
    {
        $package=package::findOrFail($id);
        $departures = Town::where('type', 1)
            ->orderBy('name')
            ->get();
            $categories=ProductCategory::all();

        $destinations = Town::where('type', 0)
            ->orderBy('name')
            ->get();

        return view('packages.edit',compact('package','departures','destinations','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $package = package::FindOrFail($id);
        $package->description = $request->description;
        $package->length = $request->length;
        $package->width = $request->width;
        $package->weight = $request->weight;
        $package->departure = $request->departure;
        $package->destination = $request->destination;
        $package->user_id = auth()->user()->id;

        if ($package->save())
            return redirect()->route('packages.index')->with('update_success', 'Colis mise ?? jour avec succ??s');
        else
            return redirect()->back()->with('update_failure', 'Une erreur est survenue, veuillez r??essayez plutard');
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

        return back()->with('delete', 'votre Colis ?? bien ??t?? bien supprim??');
    }
}
