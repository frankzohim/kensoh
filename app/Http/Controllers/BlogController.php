<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index')->with('blogs',$blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=>['required','string'],
            'state'=>['required','boolean'],
            'image'=>['required','file','mimes:jpg,png,jpeg'],
         ]);

        $blog = new blog;
        $blog->title = $request->title;
        $blog->state = $request->state;
       
        $blog->user_id=auth()->user()->id;

        //file management

        //giving new name to the uploaded file
        $fileName = $request->title.'_'.time().'_'.$request->image->getClientOriginalName().'.'.$request->image->extension(); 

        //Storing file in disk
        $request->image->storeAs('blog-images', $fileName);
        
        //preparing to save
        $blog->image = $fileName;

        if($blog->save())
            return redirect()->route('blog.index')->with('update_success','Actualité ajoutée avec succès');
        else
            return redirect()->back()>with('update_failure','Une erreur est survenue, merci de réessayer');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findorfail($id);
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validatedData = $request->validate([
            'title'=>['required','string'],
            'state'=>['required','boolean'],
         ]);

        $blog = blog::FindOrFail($id);
        
         if ($request->hasFile('image')) {
            $validatedData = $request->validate([
                'image'=>['required','file','mimes:jpg,png,jpeg'],
             ]);

             $fileName = $blog->id.'_'.time().'_'.$request->image->getClientOriginalName().'.'.$request->image->extension(); 
             
             //Storing file in disk
             $request->image->storeAs('blog-images', $fileName);

             //Updating file in blog table
             
             $oldfile = $blog->image; // Retrieving the old file name
             $blog->image = $fileName;
             
             //Deleting the old file from the disk
             Storage::delete('blog-images/' . $oldfile);
        }

       $blog->title = $request->title;
       $blog->state = $request->state;

        $blog->save();
        return redirect()->route('blog.index')->with('update_success', "Actualité mise à jour avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }

    public function displayImage($id)
    {
       $blog = Blog::FindOrFail($id);
       return response()->download(storage_path('app/blog-images/' . $blog->image));
        
    }
}
