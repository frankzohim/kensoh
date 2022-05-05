<?php

namespace App\Http\Controllers;
use App\Models\ProductCategory;
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
        $categories = $categories2 =ProductCategory::all();
        return view('categories.index',compact('categories','categories2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= ProductCategory::all();
        return view('categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>['required','unique:App\Models\ProductCategory,name','string'],
            'description'=>['required','string','min:1','max:2000'],
            'keyword'=> ['required','string','min:1','max:500'],
            'state'=>['required','boolean'],
        ]);



        $category=new ProductCategory;
        $category->name=$request->name;

        $category->slug=$this->create_slug($request->name);
        $category->meta_description=$request->description;
        $category->meta_keywords=$request->keyword;
        $category->parent=$request->parent;
        $category->state=$request->state;
        $category->user_id=auth()->user()->id;
        $id=$category->id;
        
        if($category->save())
         return redirect()->route('category.index')->with('update_success','Catégorie ajouté avec succès');
        else
            return redirect()->back()->with('update_failure','Une erreur est survenue, merci de réessayer');
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
        $category= Productcategory::findOrFail($categoryId);
        $categories=Productcategory::all();
        return view('categories.edit',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $category)
    {
        $category->update($request->all());

        return redirect()->route('category.index')->with('update_success','Modifications prises en compte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $category)
    {
        $category->delete();

        return back()->with('update_success','La catégorie à bien été suprimé');
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