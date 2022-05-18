<?php

namespace App\Http\Controllers;
use App\Models\town;
use App\Models\Country;
use Illuminate\Http\Request;

class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $towns = Town::all();
        return view('towns.index')->with('towns',$towns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('towns.create', ['countries'=>$countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>['required','unique:App\Models\town,name','string'],
            'country_id'=>['required','exists:App\Models\Country,id'],
            //'type'=>['required','boolean'],
        ]);

        //dd("hi");
        $town = new Town;
        $town->name = $request->name;
        $town->country_id = $request->country_id;
       // $town->type = $request->type;

        if($town->save())
            return redirect()->route('town.index')->with('update_success','Ville ajouté avec succès');
        else
            return redirect()->back()->with('update_failure','Une erreur est survenue, merci de réessayer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
