<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){

        return view('contact.create');
    }

    public function store(Request $request){

        $contact=new contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->localization=$request->localization;

        return redirect()->back()->with('success','votre repose a bien été envoyé');

    }
}
