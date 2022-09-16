<?php

namespace App\Http\Controllers\backend\vendor;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(StoreRequest $request)
    {
        $store_count=Store::where('user_id',auth()->user()->id)->count();

        if($store_count ==1){
            return redirect()->route('dashboard')->with('update_failure',"Vous n'etes pas autorisé a creer plus de boutique,vous pouvez en creer juste une seule boutique");
        }

        if($store_count ==0){

            $valitatedData = $request->validated();
        $store = new Store;
        $store->name=$request->name;
        $store->email=$request->email;
        $store->description=$request->description;
        $store->country_id=$request->country_id;
        $store->town=$request->town;
        $store->phone=$request->phone;
        $store->state=0;
        $store->street=$request->street;
        $store->user_id=auth()->user()->id;
         //file management

        //giving new name to the uploaded file
        $fileName = $request->name.'_'.time().'_'.$request->logo->getClientOriginalName().'.'.$request->logo->extension();

        //Storing file in disk
        $request->logo->storeAs('logo', $fileName);

        //preparing to save
        $store->logo = $fileName;

        if($store->save() && $store_count !=0 && $store_count<1)
            return redirect()->route('dashboard')->with('update_success','Boutique ajoutée avec succès');


        else
            return redirect()->back()>with('update_failure','Une erreur est survenue, merci de réessayer');

        }

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




         $store = Store::FindOrFail($id);
         $logo=$store->logo;

         if ($request->hasFile('logo')) {

            Storage::delete($store->logo);

            $fileName = $request->name.'_'.time().'_'.$request->logo->getClientOriginalName().'.'.$request->logo->extension();
            $logo=$request->file('logo')->storeAs('logo', $fileName);
        }

        $store->name=$request->name;
        $store->email=$request->email;
        $store->description=$request->description;
        $store->country_id=$request->country_id;
        $store->town=$request->town;
        $store->phone=$request->phone;
        $store->state=0;
        $store->logo=$logo;
        $store->street=$request->street;
        $store->user_id=auth()->user()->id;


        $store->save();

        return redirect()->route('dashboard')->with('update_success', "Boutique mise à jour avec succès.");
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
