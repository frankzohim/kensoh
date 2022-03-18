<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categories.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category=new \App\Models\product_category;
        $category->name=$request->name;

        $category->slug=$this->create_slug($request->name);
        $text=strtolower($category->slug);
        $category->slug=$text;
        $category->meta_description=$request->description;
        $category->meta_keywords=$request->keyword;
        $category->parent=$request->parent;
        $category->state=$request->state;
        $category->user_id=auth()->user()->id;
        $category->save();
        dd('categorie ajouté avec succes');
        // return back()->with('info','La Categorie à bien été ajouté dans la base de donnée');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function create_slug($text){
        $var_slug= preg_replace('~^[A-Z0-9]{8}$~','-',$text);
        $text=iconv('utf-8','us-ascii//TRANSLIT',$var_slug);
        $text=preg_replace('~[^-\w]+~','',$text);
        $text=trim($text,'-');
        $text=preg_replace('~-+~','-',$text);
        return $text;
    }
}