<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomePagecontroller extends Controller
{
    public function index(){

        //select all product from databases
        $products = Product::where('state',1)->with('product_images')->get();
        
        //Selct all news from blog tables
        $blogs = Blog::where('state',1)->get();

        return view('homepage', compact('products','blogs'));
    }

    public function vendor(){
        return view('become_vendor');
    }

    public function about(){
        return view('about_us');
    }

    public function emailTemplate(){
        return view('mail.template.product');
    }
}
