<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Product;
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

        $categories=ProductCategory::all();


        return view('homepage', compact('products','blogs' , 'categories'));
    }

    public function product($id)
    {
        $categories=product::where('category_id','=',$id)->get();
        $product=Product::where('category_id','=',$id)->get();
        return view('categories.productcategories', compact('categories','product'));
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
