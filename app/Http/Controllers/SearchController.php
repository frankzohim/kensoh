<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function find(Request $request){

        if (isset($request->query)) {

            $query=$request->query;
            $products=Product::where('meta_keywords','LIKE','%'.$query.'%')->paginate(2);

            return view('Search.results',compact('products'));
        }
        else{
            return view('homepage');
        }
        
    }
}
