<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Partners;
use App\Models\PartnerImage;
use App\Http\Requests\PartnerRequest;
use Illuminate\Http\Request;



class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partners::all();
        $partnerimage = PartnerImage::all();
        return view('partners.index', compact('partners', 'partnerimage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partners = Partners::all();
        return view('partners.create', compact('partners'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
        //Registring new partners in database
		 $valitatedData = $request->validated();
         $partners = new Partners;
         $partners->social_reason = $request->social_reason;
         $partners->contact = $request->contact;
         $partners->website = $request->website;
         $partners->email = $request->email;
          
         
        if($partners->save())
        return redirect()->route('partners.index')->with('update_success','Partenaire bien enregistré');
        else
        return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');


        //$name = Storage::disk('local')->put('logos', $request->logo);
       /* $filename = time() . "." . $request->logo->extension();

        $path = $request->file('logos')->storeAs(
            'logos',
            $filename,
            'public'

        );

        $image = new PartnerImage();
        $image->path = $path;

        $partners->image()->save($image);*/


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
        $partners = Partners::findOrFail($id);
        return view('partners.edit', compact('partners'));
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
                'social_reason' => 'required',
                'contact' => 'required',
                'logo' => ' ',
                'website' => 'required',
                'email' => 'required'
    
    
            ]);


            if(Partners::whereId($id)->update($validatedData))
                return redirect()->route('partners.index')->with('update_success','Partenaire mise à jour avec succès');
            else
                return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partners $partner)
    {
        $partner->delete();

        return back()->with('delete','votre Produit à bien été bien supprimé');
    }

    public function destroyImage($id)
    {
        //Retrieving partners image from database
        $partnerImage = PartnerImage::findOrFail($id);
        $oldfile = $partnerImage->path; // Retrieving the old file name

        //deleting partners's image from disk
        Storage::delete('partner-images/'.$oldfile);
        
        //delete file in database
        $partnerImage->delete();

        return back()->with('update_success','Image bien supprimé');
    }

    /**
     * Save partnerss images to storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function images(Request $request)
    {
        //Loafing partners for which we want to add images
        $partners = Partners::FindOrFail($request->partnerId);

        //Count images already added to that partners
        $partnerImage = PartnerImage::where('partner_id','=',$request->partnerId)->count();

        //Check if images quota of 5 is still maintain, before adding image
        if($partnerImage < 3){
            $image = $request->file('file'); 
            $name = "toto";
            $extension = $image->getClientOriginalExtension();

            $allowedfileExtension=['jpg','png','jpeg'];

            $check = in_array($extension,$allowedfileExtension);
                
            if(!$check){
                
                return response('invalid extension', 400);
            }
            else{
                
                //Storing file in disk
                $fileName = $partners->id.'_'.time().'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
                $image->storeAs('partner-images', $fileName);

                //Add image to database (partners_images table)
                $partnerImage = new \App\Models\PartnerImage;
                $partnerImage->path = $fileName;
                $partnerImage->partner_id = $partner->id;
                $partnerImage->save();
                return response('Image ajoutée avec succès', 200);
            }
        }
        else{
            return response('Quota d\'images atteint', 400);
        }
        
        
    }

    public function displayImage($id)
    {
       $partnerImage = PartnerImage::FindOrFail($id);
       return response()->download(storage_path('app/partner-images/' . $partnersImage->path));
        
    }

    public function deleteImage($id)
    {
       $partnerImage = PartnerImage::FindOrFail($id);
       return response()->download(storage_path('app/partner-images/' . $partnersImage->path));
        
    }


    function create_slug($text){
        $var_slug= preg_replace('~^[A-Z0-9]{8}$~','-',$text);
        $text=iconv('utf-8','us-ascii//TRANSLIT',$var_slug);
        $text=preg_replace('~[^-\w]+~','',$text);
        $text=trim($text,'-');
        $text=preg_replace('~-+~','-',$text);
        $text=strtolower($text);
        return $text;
    }

    function saveimage(Request $request){
        $image = new PartnerImage;
        $image->path = $request->path; 

        dd($image->path);
    }
    
}
