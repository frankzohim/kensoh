<?php

namespace App\Http\Controllers;

use App\Models\package;
use App\Models\Order;
use App\Models\ProductCategory;
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
					$packagesNumbers = package::count();
					$sellersNumbers = User::where('role_id','=',3)->count();
					$customersNumbers = User::where('role_id','=',2)->count();
					$productsNumbers = Product::count();
					$products = Product::all();
                    $packages=package::all();

                    $lastPackages=$this->lastPackage();

                    $towns=DB::table('towns')
                    ->join('countries','countries.id','=','towns.country_id')
                    ->select('towns.id as id','towns.name as name','countries.name_fr as country')
                    ->get();



					$PackageDepartureStats=$this->PackageDepartureStats();
                    $PackageDestinationStats=$this->PackageDestinationStats();
                    $stat1=package::distinct('destination')->count();

                    //return $PackageDestinationStats;
                    //return $lastPackages;
			return view('dashboard', compact('products','packagesNumbers','sellersNumbers','customersNumbers','productsNumbers','packages','towns','PackageDepartureStats','PackageDestinationStats','lastPackages'));
			case 3 :
                $categories=ProductCategory::all();
				return view('vendor_dashboard',compact('categories'));
			case 2 :
                $categories=ProductCategory::all();
                $orders = Order::all()->where('user_id','=',auth()->user()->id)->count();
				return view('customer_dashboard',compact('categories','orders'));
			default :
				dd("incorrect route");
		}
	}
    public function PackageDepartureStats(){
        $total=$this->totalOfpackageDeparture();
        $PackageDepartureStats= DB::table('packages')
					->select('departure', DB::raw("count(*)*100/'$total' as total1"))
					->groupBy('departure')
					->get();
					return $PackageDepartureStats;
    }
    public function PackageDepartureStats1(){

        $p= DB::table('packages')
					->select('departure', DB::raw('count(*) as total1'))
					->groupBy('departure')
					->get();
					return $p;
    }
    public function PackageDestinationStats(){
        $total=$this->totalOfpackageDestination();
        $PackageDestinationStats= DB::table('packages')
					->select('destination', DB::raw("count(*)*100/'$total'  as total2"))
					->groupBy('destination')
					->get();
                    return $PackageDestinationStats;
    }
    public function PackageDestinationStats1(){
        $p= DB::table('packages')
					->select('destination', DB::raw('count(*) as total2'))
					->groupBy('destination')
					->get();
        return $p;
    }
    public function totalOfpackageDeparture(){
        $final=0;
        $PackageDepartureStats =$this->PackageDepartureStats1();
        foreach($PackageDepartureStats as $stat){
            $final=$final+$stat->total1;
        }

        return $final;

    }
    public function totalOfpackageDestination(){
        $final=0;
        $PackageDestinationStats=$this->PackageDestinationStats1();
        foreach($PackageDestinationStats as $stat){
            $final=$final+$stat->total2;
        }

        return $final;

    }

    public function lastPackage(){
        $lastPackages=package::orderBy('id','DESC')->take(3)->get();
        return $lastPackages;
    }
}
