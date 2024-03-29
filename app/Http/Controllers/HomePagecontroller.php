<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Tracking;
use App\Models\Partner;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class HomePagecontroller extends Controller
{
    public function index(){

        //select all product from databases
        $products = Product::where('state',1)->with('product_images')->get();

        //Selct all news from blog tables
        $blogs = Blog::where('state',1)->get();

        //Select all tracking from tracking tables
        $trackings = Tracking::where('state',1)->get();

        $categories=ProductCategory::all();
        
        //Select all partners
        $partners = Partner::where('state',1)->get();

        //dd($partners);

        return view('homepage', compact('products','blogs' , 'categories','trackings','partners'));
        
    }

    public function product($id)
    {
        $categories=product::where('category_id','=',$id)->get();
        $products=Product::where('category_id','=',$id)->get();
        //dd($categories);
        return view('shop/shop',compact('categories','products'));
    }

    public function vendor(){

        $categories=ProductCategory::all();

        return view('become_vendor',compact('categories'));
    }

    public function about(){

        $categories=ProductCategory::all();

        return view('about_us',compact('categories'));
    }

    public function emailTemplate(){
        return view('mail.template.product');
    }
}
