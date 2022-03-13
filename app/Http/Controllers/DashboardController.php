<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
	
		//Checking user's role to redirect him to right dashboard
		
		switch(auth()->user()->role_id){
			case 1 : 
				return view('dashboard');
			case 3 : 
				return view('vendor_dashboard');
			case 2 :
				return view('customer_dashboard');
			default : 
				dd("incorrect route");
		}
	}
}
