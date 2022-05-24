<?php

namespace App\Http\Controllers;

use App\Models\package;
use App\Models\Product;
use App\Models\town;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index(){

		//Checking user's role to redirect him to right dashboard

		switch(auth()->user()->role_id){
			case 1 :
					//Admin dashboad
					//Retrieving dashboard information like package, products, users and so on
					$packagesNumbers = 0;
					$sellersNumbers = User::where('role_id','=',3)->count();
					$customersNumbers = User::where('role_id','=',2)->count();
					$productsNumbers = Product::count();
					$products = Product::all();
                    $packages=package::all();
                    $towns=town::all();
                    $country=Country::all();

                    $stats= DB::table('packages')
					->select('departure', DB::raw('count(*) as total'))
					->groupBy('departure')
					->get();
                    $final=0;
                    foreach($stats as $stat){
                        $final=$final+$stat->total;
                    }






					$stat1=package::distinct('destination')->count();

                    //return $stat;
				return view('dashboard', compact('products','packagesNumbers','sellersNumbers','customersNumbers','productsNumbers','packages','towns','country','stats','final'));
			case 3 :
				return view('vendor_dashboard');
			case 2 :
				return view('customer_dashboard');
			default :
				dd("incorrect route");
		}
	}
}
