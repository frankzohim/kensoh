<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;

class ShopController extends Controller
{
    public function index(){

        $categories=ProductCategory::all();
        $products=Product::select('id','name','meta_description','state')
        ->where('state','=',1)
        ->paginate(24);

        //dd($products);
        return view('shop/shop',compact('categories','products'));
    }
}
