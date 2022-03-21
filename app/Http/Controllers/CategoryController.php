<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product_category;
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
        $categories=product_category::all();
        $categoryId=product_category::select('parent')->get();

        return view('Categories.index',compact('categories','categoryId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= product_category::all();
        return view('Categories.add',compact('categories'));
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
        $category->meta_description=$request->description;
        $category->meta_keywords=$request->keyword;
        $category->parent=$request->parent;
        $category->state=$request->state;
        $category->user_id=auth()->user()->id;
        $id=$category->id;
        $category->save();
         dd('categorie ajouté avec succes');
        //  return redirect()->route('category.edit',['categoryId'=>$id])->with('info','La Categorie à bien été ajouté dans la base de donnée');
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
    public function edit($categoryId)
    {
        $product_category= product_category::findOrFail($categoryId);
        $categories=product_category::all();

        return view('Categories.edit',compact('product_category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product_category $category)
    {
        $category->update($request->all());

        return redirect()->route('category.index')->with('info','Categorie à bien été modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_category $category)
    {
        $category->delete();

        return back()->with('delete','La catégorie à bien été suprimé');
    }

    function create_slug($text){
        $var_slug= preg_replace('~^[A-Z0-9]{8}$~','-',$text);
        $text=iconv('utf-8','us-ascii//TRANSLIT',$var_slug);
        $text=preg_replace('~[^-\w]+~','',$text);
        $text=trim($text,'-');
        $text=preg_replace('~-+~','-',$text);
        $text=strtolower($text);
        return $text;
    }
}
