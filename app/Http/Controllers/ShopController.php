<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;

class ShopController extends Controller
{
    public function index(){

        $categories=ProductCategory::all();
        $products=Product::select('name','meta_description')->paginate(24);

        return view('shop/shop',compact('categories','products'));
    }
}
