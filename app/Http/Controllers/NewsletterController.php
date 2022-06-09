<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request){

        Newsletter::subscribeOrUpdate($request->email,['firstName'=>'toto'],'Kensoh');

        return redirect('/');
}
}
