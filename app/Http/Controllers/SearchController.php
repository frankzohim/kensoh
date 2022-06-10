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

            $products=Product::where('name','like',"%$str%")
            ->orWhere('meta_description','like',"%$str%")
            ->orWhere('id','like',"%$str%")
            ->orWhere('meta_keywords','like',"%.$str.%")
            ->orWhere('unit_price','like',"%$str%")
            ->orWhere('stock_quantity','like',"%$str%")
            ->paginate(8);


            // dd($products);

            return view('Search.results',compact('products'));
        }
        else{
            return view('homepage');
        }

    }
}
