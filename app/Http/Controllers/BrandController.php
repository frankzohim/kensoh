<?php

namespace App\Http\Controllers;

use App\Mail\BrandMail;
use App\Mail\BrandDeleteMail;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.create');
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
            'name' => ['required','unique:App\Models\Brand,name','string'],
            'state' => ['required'],
         ]);

		 //Registring new brand in database

         $brand = new \App\Models\Brand;
         $brand->name = $request->name;
         $brand->state = $request->state;
		 $brand->user_id = auth()->user()->id;

         if($brand->save()){

            //Sendig mail to admin
            Mail::to('aleximagic2020@gmail.com')
                ->send(new BrandMail($brand));

             Mail::to('Kensoh.logistics@gmail.com')
                ->send(new BrandMail($brand));
        return redirect()->route('brand.index')->with('update_success','Marque bien enregistrée');
    }

    else
        return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');


        /** if($brand->save())
		*	return redirect()->route('brand.edit', ['brand' => $brand->id])->with('update_success', "Marque ajoutée avec succès.");
		 * else
			* return redirect()->route('brand.create')->with('update_failure', "Une erreur s'est produite, veuillez réessayez plutard.");
            */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('hi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Loading brand to edit
        $brand = Brand::findOrFail($id);

		//Loading edition form
        return view('brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $validatedData = $request->validate([
            'name' => ['required','unique:App\Models\Brand,name','string'],
            'state' => ['required'],
         ]);

         $brand->update($request->all());
         return redirect()->route('brand.edit', ['brand' => $brand->id])->with('update_success', "Marque mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(brand $brand)
    {
        
        if($brand->delete()){

            //Sendig mail to admin
            Mail::to('aleximagic2020@gmail.com')
                ->send(new BrandDeleteMail($brand));

             Mail::to('Kensoh.logistics@gmail.com')
                ->send(new BrandDeleteMail($brand));
        return redirect()->route('brand.index');
    }

    else
        return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');
    }

}
