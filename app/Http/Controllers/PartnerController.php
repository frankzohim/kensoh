<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Requests\PartnerRequest;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
        $validatedData = $request->validated();

       //file management

        //giving new name to the uploaded file
        $fileName = $request->name.'_'.time().'_'.$request->logo->getClientOriginalName().'.'.$request->logo->extension(); 

        //Storing file in disk
        $request->logo->storeAs('logo/partners', $fileName);

        $request->logo = $fileName;
        
        //preparing to save

        $partner = new Partner;
        $partner->name = $request->name;
        $partner->state = $request->state;
        $partner->logo = $fileName;

        if($partner->save())
         return redirect()->route('partner.index')->with('update_success','Partenaire ajouté avec succès');
        else
            return redirect()->back()->with('update_failure','Une erreur est survenue, merci de réessayer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $validatedData = $request->validate([
            'name'=>['required','string','max:60'],
            'state'=>['required','boolean'],
         ]);

         if ($request->hasFile('logo')) {
            $validatedData = $request->validate([
                'logo'=>['required', 'image','mimes:jpg,png,jpeg,gif,svg','max:2048'],
             ]);

             $fileName = $partner->id.'_'.time().'_'.$request->logo->getClientOriginalName().'.'.$request->logo->extension(); 
             
             //Storing file in disk
             $request->logo->storeAs('logo', $fileName);

             //Updating file in store table
             
             $oldfile = $partner->logo; // Retrieving the old file name
             $partner->logo = $fileName;
             
             //Deleting the old file from the disk
             Storage::delete('logo/partners/' . $oldfile);
        }

       //preparing to save

        $partner->name = $request->name;
        $partner->state = $request->state;

        if($partner->save())
         return redirect()->route('partner.index')->with('update_success','Partenaire ajouté avec succès');
        else
            return redirect()->back()->with('update_failure','Une erreur est survenue, merci de réessayer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('partner.index')->with('update_success','Partenaire ajouté avec succès');
    }

    
    public function displayImage($id)
    {
       $partner = Partner::FindOrFail($id);
       return response()->download(storage_path('app/logo/partners/' . $partner->logo));
        
    }
}
