<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ShopController extends Controller
{
    public function index(){

        $categories=ProductCategory::all();

        return view('shop/shop',compact('categories'));
    }
}
