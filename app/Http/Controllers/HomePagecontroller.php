<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class HomePagecontroller extends Controller
{
    public function index(){
        //select all product from databases
        $products = Product::with('product_images')->get();
        //$products = Product::all();
        //dd($products);
        /*foreach($products as $product){
            $reviews = $product->reviews();
            foreach($reviews as $review){
                dd($review->id);
            }
                
        }*/
        return view('homepage', compact('products'));
    }
}
