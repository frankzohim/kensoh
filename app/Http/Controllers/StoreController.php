<?php

namespace App\Http\Controllers;
use App\Models\Store;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Mail\StoreEmail;
use Illuminate\Support\Facades\Mail;
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
        //Loading all store from database and list them
        $stores = Store::all();
        return view('store.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Loading all countries from database
        $countries = Country::all();
        return view('store.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $valitatedData = $request->validated();
        $store = new Store;
        $store->name=$request->name;
        $store->email=$request->email;
        $store->description=$request->description;
        $store->country_id=$request->country_id;
        $store->town=$request->town;
        $store->phone=$request->phone;
        $store->state=$request->state;
        $store->street=$request->street;
        $store->user_id=auth()->user()->id;

        //file management

        //giving new name to the uploaded file
        $fileName = $request->name.'_'.time().'_'.$request->logo->getClientOriginalName().'.'.$request->logo->extension();

        //Storing file in disk
        $request->logo->storeAs('logo', $fileName);

        //preparing to save
        $store->logo = $fileName;

        //Sendig mail to admin
        Mail::to('Bramslevel129@gmail.com')
        ->send(new StoreEmail($store));

        if($store->save())
            return redirect()->route('store.index')->with('update_success','Boutique ajoutée avec succès');
        else
            return redirect()->back()>with('update_failure','Une erreur est survenue, merci de réessayer');
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
        //Loading store to edit
        $store = Store::FindOrFail($id);
        //Loading all countries from database
        $countries = Country::all();
        return view('store.edit',compact('store','countries'));
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
            'name'=>['required','string'],
            'email'=>['required','email'],
            'phone'=>['required','string'],
            'description'=>['required','string','min:1','max:2000'],
            'country_id'=>['required','exists:countries,id'],
            'town'=>['required','string'],
            'street'=>['required','string'],
         ]);

         $store = Store::FindOrFail($id);
         if ($request->hasFile('logo')) {
            $validatedData = $request->validate([
                'logo'=>['required','file','mimes:jpg,png,jpeg'],
             ]);

             $fileName = $store->id.'_'.time().'_'.$request->logo->getClientOriginalName().'.'.$request->logo->extension();

             //Storing file in disk
             $request->logo->storeAs('logo', $fileName);

             //Updating file in store table

             $oldfile = $store->logo; // Retrieving the old file name
             $store->logo = $fileName;

             //Deleting the old file from the disk
             Storage::delete('logo/' . $oldfile);
        }

        $store->name=$request->name;
        $store->email=$request->email;
        $store->description=$request->description;
        $store->country_id=$request->country_id;
        $store->town=$request->town;
        $store->phone=$request->phone;
        $store->state=$request->state;
        $store->street=$request->street;

        $store->save();
        return redirect()->route('store.index')->with('update_success', "Boutique mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //check if store contains products
        if(Product::where('store_id','=',$id)->count())
        return redirect()->route('store.index')->with('update_failure', "Impossible de supprimer cette boutique car elle contient des produits.");
        else {
         $store = Store::destroy($id);

         Mail::to('Bramslevel129@gmail.com')
            ->send(new StoreEmail($store));
         return redirect()->route('store.index')->with('update_success', "Boutique supprimée avec succès.");

        }
    }

    public function displayImage($id)
    {
       $store = Store::FindOrFail($id);
       return response()->download(storage_path('app\logo\\' . $store->logo));

    }
}
