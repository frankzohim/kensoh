<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function create()
    {
        return view('coupon.create');
    }
}
