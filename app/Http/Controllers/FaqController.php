<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Store;
use App\Http\requests\FaqRequest;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::all();

        return view('faq.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Store::all();
        return view('faq.create', compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validated();

        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->state = $request->state;
        $faq->store_id = $request->store;
        $faq->user_id = auth()->user()->id;

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
    }
}
