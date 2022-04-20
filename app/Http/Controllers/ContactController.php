<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to('bramslevel129@gmail.com')->send(new ContactMail());

        if($contact->save())
        return redirect()->back()->with('success','votre reponse a bien été envoyé');
    else
        return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');


    }
}
