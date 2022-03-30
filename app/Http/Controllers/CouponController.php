<?php

namespace App\Http\Controllers;
use App\Models\Coupon;
use App\Models\Store;
use App\Http\requests\CouponRequest;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('coupons.index',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Loading all stores
        $stores = Store::all();
        return view('coupons.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponRequest $request)
    {
        $validatedData=$request->validated();
        
        $coupon = new Coupon;
        $coupon->name = $request->name;
        $coupon->code = $request->code;
        $coupon->start_date=$request->startDate;
        $coupon->end_date=$request->endDate;
        $coupon->discount=$request->discount;
        $coupon->state=$request->state;
        $coupon->store_id=$request->store;
        $coupon->user_id=auth()->user()->id;
        
        if($coupon->save())
         return redirect()->route('coupon.index')->with('update_success','Coupon ajouté avec succès');
        else
            return redirect()-back()->with('update_failure','Une erreur est survenue, merci de réessayer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon= Productcoupon::findOrFail($couponId);
        $coupons=Productcoupon::all();
        return view('coupons.edit',compact('coupon','coupons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coupon->update($request->all());

        return redirect()->route('coupon.index')->with('update_success','Categorie à bien été modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon->delete();

        return back()->with('update_success','La catégorie à bien été suprimé');
    }
}
