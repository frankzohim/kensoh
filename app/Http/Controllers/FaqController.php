<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\Store;
use App\Http\requests\FaqRequest;
use Illuminate\Http\Request;
use Illuminate\Http\requests\FaqRequests;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $faqs = Faq::all();

        return view('faq.index', compact('faqs'));
        return view('faq.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->state = $request->state;
        $faq->user_id = auth()->user()->id;


        if ($faq->save())
            return redirect()->route('faq.index')->with('update_success', 'faq ajouté avec succès');
        else
            return redirect()->back()->with('update_failure', 'Une erreur est survenue, merci de réessayer');


        if ($faq->save())
            return redirect()->route('faq.index')->with('update_success', 'faq ajouté avec succès');
        else
            return redirect() - back()->with('update_failure', 'Une erreur est survenue, merci de réessayer');

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

        $faqs = faq::findOrFail($id);

        return view('faq.edit', compact('faqs'));

        $faq = faq::findOrFail($id);
        return view('faq.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqRequest $request, Faq $faq)
    {
        //$validatedData = $request->validated();
        $faq->update($request->all());

        return redirect()->route('faq.index')->with('update_success', 'Categorie à bien été modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Faq::destroy($id);
        return back()->with('update_success', 'Le faq a bien été suprimé');

        faq::destroy($id);
        return back()->with('update_success', 'La faq a bien été suprimé');
    }
}
