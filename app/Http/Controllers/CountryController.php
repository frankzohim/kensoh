<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Http\Requests\CountryRequest;;


class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::all();
        return view('countries.index', compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::all();
        return view('countries.create', compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        $valitatedData = $request->validated();
        $country = new Country;
        $country->name_fr = $request->name_fr;
        $country->name_en = $request->name_en;
        $country->code = $request->code;
        $country->postal_code = $request->postal_code;
         
        
       if($country->save())
       return redirect()->route('countries.index')->with('update_success','le pays a été bien enregistré');
       else
       return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');
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
        $country = Country::findOrFail($id);
        return view('countries.edit', compact('country'));
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
        
        $validatedData = $request->validate([
            'name_fr' => 'required',
            'name_en' => 'required',
            'code' => ' ',
            'postal_code' => 'required',


        ]);


        if(Country::whereId($id)->update($validatedData))
            return redirect()->route('countries.index')->with('update_success','le pays a été bien enregistré');
        else
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        
        $country->delete();

        return back()->with('delete','votre pays à bien été bien supprimé');
    }
}
