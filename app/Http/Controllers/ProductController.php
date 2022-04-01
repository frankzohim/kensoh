<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
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
        $products=Product::all();
        $categories=ProductCategory::all();
        $brands = Brand::all();
        $stores = Store::all();
        return view('products.index',compact('products','categories','brands','stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();
        $brands = Brand::all();
        $stores = Store::all();
        return view('products.create',compact('categories','brands','stores','categories'));
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

        $product=new \App\Models\Product;
        $product->name=$request->name;
        $product->slug=$this->create_slug($request->name);
        $product->meta_description=$request->description;
        $product->meta_keywords=$request->keyword;
        $product->category_id =$request->category;
        $product->new=$request->new;
        $product->position=$request->position;
        $product->user_id=auth()->user()->id;
        $product->featured=$request->vedette;
        $product->stock_quantity=$request->stock_quantity;
        $product->unit_price=$request->price;
        $product->nature=$request->nature;
        $product->brand_id=$request->brand;
        $product->store_id=$request->store_id;
        $product->state=$request->state;
        
        if($product->save())
            return redirect()->route('product.index')->with('update_success','Votre Produit à bien été enregistré');
        else
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayer plustard');
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
        $product = Product::findOrFail($id);
        $brands =  Brand::all();
        $stores =  Store::all();
        $categories = ProductCategory::all();

        return view('Products.edit',compact('product','brands','categories','stores'));
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
        return back()->with('update_success','Produit supprimé avec succès');
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