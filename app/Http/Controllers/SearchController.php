<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function find(Request $request){

        $str="";
        if (isset($request->str)) {

            $str=$request->str;
            $products=Product::where('name','like','%'.$str.'%')->paginate(2);
            
            
            // dd($products);

            return view('Search.results',compact('products'));
        }
        else{
            return view('homepage');
        }
        
    }
}
