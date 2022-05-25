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

                    $towns=DB::table('towns')
                    ->join('countries','countries.id','=','towns.country_id')
                    ->select('towns.id as id','towns.name as name','countries.name_fr as country')
                    ->get();

                    $countries=Country::all();

					$PackageDepartureStats=$this->PackageDepartureStats();
                    $final=0;

                    foreach($PackageDepartureStats as $stat){
                        $final=$final+$stat->total1;
                    }
                    foreach($PackageDepartureStats as $stat){
                        $percent=$stat->total1*100/$final;

                    }








					$stat1=package::distinct('destination')->get();



				return view('dashboard', compact('products','packagesNumbers','sellersNumbers','customersNumbers','productsNumbers','packages','towns','countries','PackageDepartureStats','final'));
			case 3 :
				return view('vendor_dashboard');
			case 2 :
				return view('customer_dashboard');
			default :
				dd("incorrect route");
		}
	}
    public function PackageDepartureStats(){
        $PackageDepartureStats= DB::table('packages')
					->select('departure', DB::raw('count(*) as total1'))
					->groupBy('departure')
					->get();
					return $PackageDepartureStats;
    }
    public function PackageDestinationStats(){
        $PackageDestinationStats= DB::table('packages')
					->select('destination', DB::raw('count(*) as total2'))
					->groupBy('destination')
					->get();
    }
    public function totalOfpackage($packages){

    }
}
