<?php

namespace App\Http\Controllers;

use App\Models\Town;
use App\Models\User;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Store;
use App\Models\Country;
use App\Models\package;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Tracking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

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
                //Vendor Dashboard
                $categories=ProductCategory::all();
                $brands=Brand::all();
                $product_vendor=Product::where('user_id',auth()->user()->id)
                ->orderBy('id','DESC')
                ->take('3')
                ->get();
                $orderVendor=Order::orderBy('id','DESC')
                ->take('3')
                ->get();
                $products_count=Product::where('user_id',auth()->user()->id)->count();
                $productsVendor=Product::where('user_id',auth()->user()->id)->get();
                $productsNoPublisher=Product::where([['user_id',auth()->user()->id],['state',1]])->count();
                $store_count=Store::where('user_id',auth()->user()->id)->count();
                $countries=Country::all();
                $stores=Store::where('user_id',auth()->user()->id)->get();

            //$password=decrypt(auth()->user()->password);
                //dd($products_count);
                //dd($productsNoPublisher);
				return view('vendor_dashboard',compact('categories','products_count','store_count','productsNoPublisher','product_vendor','orderVendor','brands','productsVendor','stores','countries'));
			case 2 :
                //Customer Dashboard
                $categories=ProductCategory::all();
                $orders = Order::all()->where('user_id','=',auth()->user()->id)->count();
                $packages=package::where('user_id','=',auth()->user()->id)->get();
                $colis=package::where('user_id',auth()->user()->id)->get();
                $package_count=package::where('user_id',auth()->user()->id)->count();
                $countries=Country::all();
                $towns=Town::all();
                $tracking_count=Tracking::all()->count();


				return view('customer_dashboard',compact('categories','orders','packages','countries','colis','towns','package_count','tracking_count'));
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
