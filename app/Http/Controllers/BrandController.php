<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create (){
		return view('brand.create');
	}
	
	public function save (Request $request){

		$validatedData = $request->validate([
            'name' => ['required','unique:App\Models\Brand,name','string'], 
            'state' => ['required'],
         ]);
		 
		 //Registring new brand in database
         
         $brand = new \App\Models\Brand;
         $brand->name = $request->name;
         $brand->state = $request->state;
		 $brand->user_id = auth()->user()->id;

         if($brand->save())
			return redirect()->route('brand.edit', ['brandId' => $brand->id])->with('update_success', "Marque ajoutée avec succès.");
		 else
			 return redirect()->route('brand.create')->with('update_failure', "Une erreur s'est produite, veuillez réessayez plutard.");
	}
	
	public function edit($brandId)
    {        
        //Loading brand to edit
        $brand = Brand::findOrFail($brandId);
		
		//Loading edition form
        return view('brand.edit', compact('brand'));
    }
	
	public function update (Request $request){

		$validatedData = $request->validate([
			'brandId' => ['required','exists:App\Models\Brand,id'],
            'name' => ['required','unique:App\Models\Brand,name','string'], 
            'state' => ['required'],
         ]);
		 
		 //Load the brand to update by ID
         $brand = Brand::findorfail($request->brandId);
         $brand->name = $request->name;
         $brand->state = $request->state;
		 $brand->user_id = auth()->user()->id;

         if($brand->save())
			return redirect()->route('brand.edit', ['brandId' => $brand->id])->with('update_success', "Marque ajoutée avec succès.");
		 else
			 return redirect()->route('brand.edit')->with('update_failure', "Une erreur s'est produite, veuillez réessayez plutard.");
	}
	
	 public function list()
    {
		return view('brand.list');
	}
}
