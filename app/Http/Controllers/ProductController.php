<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\product_category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        $categories=product_category::all();

        return view('Products.view',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=product_category::all();


        return view('Products.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products=new \App\Models\Product;
        $products->name=$request->name;
        $products->slug=$this->create_slug($request->name);
        $products->meta_description=$request->description;
        $products->meta_keywords=$request->keyword;
        $products->category_id =$request->category;
        $products->new=$request->new;
        $products->position=$request->position;
        // $products->brand_id =$request->brand;
        // $products->store_id=$request->store;
        $products->user_id=auth()->user()->id;
        $products->featured=$request->vedette;
        $products->stock_quantity=$request->stock_quantity;
        $products->unit_price=$request->price;
        $products->nature=$request->nature;
        $products->state=$request->state;
        $products->save();

        return redirect()->route('products.index')->with('save','votre Produit à bien été enregistrer');
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
        $productId=Product::findOrFail($id);
        $products=Product::all();
        $categories=product_category::all();

        return view('Products.edit',compact('productId','products','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.index')->with('update','Votre produit à bien été mis à jour ');
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
