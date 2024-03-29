<?php

namespace App\Http\Controllers\backend\vendor;

use App\Models\Product;
use App\Mail\ProductMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
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
    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();
        $product = new Product;
        $product->name = $request->name;
        $product->slug = $this->create_slug($request->name);
        $product->meta_description = $request->description;
        $product->meta_keywords = $request->keyword;
        $product->category_id = $request->category_id;
        $product->new = $request->new;
        $product->position = $request->position;

        $product->user_id = auth()->user()->id;
        $product->featured = 0;
        $product->stock_quantity = $request->stock_quantity;
        $product->unit_price = $request->price;
        $product->nature = $request->nature;
        $product->brand_id = $request->brand_id;
        $product->store_id = $request->store_id;
        $product->state = 0;


        if($product->save()){

                //Sendig mail to admin
                Mail::to('Bramslevel129@gmail.com')
                    ->send(new ProductMail($product));
            return redirect()->route('dashboard')->with('update_success','Produit bien enregistré');
        }

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        //Validating user's inputs
        $validatedData = $request->validated();
        $product = Product::FindOrFail($id);
        $product->name = $request->name;
        $product->slug = $this->create_slug($request->name);
        $product->meta_description = $request->description;
        $product->meta_keywords = $request->keyword;
        $product->category_id = $request->category_id;
        $product->new = $request->new;
        $product->position = $request->position;

        $product->user_id = auth()->user()->id;
        $product->featured = $request->vedette;
        $product->stock_quantity = $request->stock_quantity;
        $product->unit_price = $request->price;
        $product->nature = $request->nature;
        $product->brand_id = $request->brand_id;
        $product->store_id = $request->store_id;
        $product->state = $request->state;
        //$product->video_url = $request->video_url;

        if($product->save())
            return redirect()->route('dashboard')->with('update_success','Produit mise à joue avec succès');
        else
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('delete','votre Produit à bien été bien supprimé');
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
}
