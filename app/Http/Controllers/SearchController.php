<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function find(Request $request){

        return view('Search.results');
    }
}
