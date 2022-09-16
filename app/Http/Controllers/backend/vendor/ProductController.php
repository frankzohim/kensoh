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
        $product->video_url = $request->video_url;

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
