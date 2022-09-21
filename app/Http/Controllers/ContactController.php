<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CategoryRequest;

class ContactController extends Controller
{
    public function create(){
        $categories=Category::all();
        return view('contact.create',compact('categories'));
    }

    public function store(Request $request){

        $contact=new contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->localization=$request->localization;

        $ContactUser=[
            'name'=>$contact->name,
            'email'=>$contact->email,
            'phone'=>$contact->phone,
            'subject'=>$contact->subject,
            'message'=>$contact->message,
            'localization'=>$contact->localization
        ];

        Mail::to('bramslevel129@gmail.com')->send(new ContactMail($ContactUser));

        if($contact->save())
        return redirect()->back()->with('success','votre reponse a bien été envoyé');
    else
        return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');


    }
}
