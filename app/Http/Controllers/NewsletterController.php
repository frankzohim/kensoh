<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request){

        if(! Newsletter::isSubscribed($request->email)){
            Newsletter::subscribePending($request->email);

            return redirect('homepage')->with('success', 'Thanks For Subscribe');
        }
        return redirect('homepage')->with('failure', 'Sorry! You have already subscribed ');
    }
}
