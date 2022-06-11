<?php

namespace App\Http\Controllers;

use App\Mail\SendPackageMail;
use App\Models\town;
use App\Models\Order;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gestion des commandes cote clients

        $orders = order::all();
        $categories = ProductCategory::all();


        return view('orders.index',compact('orders','categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
     {
         //Loading towns
         $categories = ProductCategory::all();

        //  $destinations = Town::where('type',0)
        //                  ->orderBy('name')
        //                  ->get();
         //dd($user_id);
         return view('orders.create', compact('categories'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
         $order=new order;
         $order->categories_id=$request->categories_id;
         $order->state=$request->state;
         $order->Product_name=$request->name;
         $order->description=$request->description;
         $order->phone_number=$request->number;
         $order->budget=$request->budget;
         $order->user_id=auth()->user()->id;



         if($order->save()){
             return redirect()->route('orders.index')->with('update_success','Commande bien enregidtré');

         }
         else{
             return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');
         }

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
        //
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
         $commande = order::FindOrFail($id);
         $commande->categories_id=$request->categories_id;
         $commande->state=$request->state;
         $commande->budget=$request->budget;
         $commande->user_id=auth()->user()->id;

         if($commande->save())
             return redirect()->route('orders.index')->with('update_success','Commandes mises à jour avec succès');
         else
             return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');

     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $commande)
     {
         $commande->delete();

         return back()->with('delete','votre commande à bien été bien supprimée');
     }
}
