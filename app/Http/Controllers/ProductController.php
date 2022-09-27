<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\ProductImage;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Models\Store;
use App\Models\Review;
use App\Models\user;
use App\Models\product_favorite;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProductMail;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = ProductCategory::all();
        $brands = Brand::all();
        $stores = Store::all();
        if(auth()->user()->role_id==1)
            return view('products.index',compact('products','categories','stores','brands'));
        if(auth()->user()->role_id==2)
            return view('products.index',compact('products','categories','stores','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();
        $brands = Brand::all();
        $stores = Store::all();
        return view('products.create',compact('categories','brands','stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //Validating user's inputs
        $validatedData = $request->validated();
        $product = new Product;
        $product->name = $request->name;
        $product->slug = $this->create_slug($request->name);
        $product->meta_description = $request->description;
        $product->meta_keywords = $request->keyword;
        $product->category_id = $request->category_id;
        $product->new = $request->new;
        $product->position = $request->position;

        $product->user_id = auth()->user()->id;
        $product->featured = 0;
        $product->stock_quantity = $request->stock_quantity;
        $product->unit_price = $request->price;
        $product->nature = $request->nature;
        $product->brand_id = $request->brand_id;
        $product->store_id = $request->store_id;
        $product->state = 0;
        $product->video_url = $request->video_url;

        if($product->save()){

                //Sendig mail to admin
                Mail::to('delanofofe@gmail.com')
                    ->send(new ProductMail($product));

            return redirect()->route('product.index')->with('update_success','Produit bien enregistré');
        }

        else
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories=ProductCategory::all();
        $product = product::findOrfail($id);
        $reviews = Review::where('product_id','=',$id)->get();
        $users=User::all();
        $review = Review::where('product_id','=',$id)->count();
        return view('products.show',compact('product','review','reviews','users','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productImages = ProductImage::where('product_id','=',$id)->get();
        $reviews= Review::where('product_id','=',$id)->get();
        $users=User::all();
        $product=Product::findOrFail($id);
        $categories = ProductCategory::all();
        $brands = Brand::all();
        $stores = Store::all();
        $users = user::all();

        return view('products.edit',compact('product','stores','categories','brands','productImages' , 'reviews','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        //Validating user's inputs
        $validatedData = $request->validated();
        $product = Product::FindOrFail($id);
        $product->name = $request->name;
        $product->slug = $this->create_slug($request->name);
        $product->meta_description = $request->description;
        $product->meta_keywords = $request->keyword;
        $product->category_id = $request->category_id;
        $product->new = $request->new;
        $product->position = $request->position;

        $product->user_id = auth()->user()->id;
        $product->featured = $request->vedette;
        $product->stock_quantity = $request->stock_quantity;
        $product->unit_price = $request->price;
        $product->nature = $request->nature;
        $product->brand_id = $request->brand_id;
        $product->store_id = $request->store_id;
        $product->state = $request->state;
        $product->video_url = $request->video_url;

        if($product->save())
            return redirect()->route('product.index')->with('update_success','Produit mise à joue avec succès');
        else
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');
    }

    /**
     * Display product details in frontend.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        $product = Product::with('product_images', 'brand','category','store')->where('id','=',$id)->first();
        //$product = $product[0];
        //dd($product);
        $categories=ProductCategory::all();


        return view('products.details', compact('product','categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('update_failure','votre Produit à bien été bien supprimé');
    }

    /**
     * publish the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function publish(Product $product)
    {
        $product->state = 1;
        $product->save();

        return back()->with('update_success','votre Produit à bien été bien publié');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyImage($id)
    {
        //Retrieving product image from database
        $productImage = ProductImage::findOrFail($id);
        $oldfile = $productImage->path; // Retrieving the old file name

        //deleting product's image from disk
        Storage::delete('product-images/'.$oldfile);

        //delete file in database
        $productImage->delete();

        return back()->with('update_success','Image bien supprimé');
    }

    /**
     * Save products images to storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function images(Request $request)
    {
        //Loading product for which we want to add images
        $product = Product::FindOrFail($request->productId);

        //Count images already added to that product
        $productImages = ProductImage::where('product_id','=',$request->productId)->count();

        //Check if images quota of 5 is still maintain, before adding image
        if($productImages < 3){
            $image = $request->file('file');
            $name = "toto";
            $extension = $image->getClientOriginalExtension();

            $allowedfileExtension=['jpg','png','jpeg'];

            $check = in_array($extension,$allowedfileExtension);

            if(!$check){

                return response('invalid extension', 400);
            }
            else{

                //Storing file in disk
                $fileName = $product->id.'_'.time().'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
                $image->storeAs('product-images', $fileName);

                //Add image to database (product_images table)
                $productImage = new \App\Models\productImage;
                $productImage->path = $fileName;
                $productImage->product_id = $product->id;
                $productImage->save();


                return response('Image ajoutée avec succès', 200);
            }
        }
        else{
            return response('Quota d\'images atteint', 400);
        }


    }

    public function displayImage($id)
    {
       $productIamge = ProductImage::FindOrFail($id);
       return response()->download(storage_path('app/product-images/' . $productIamge->path));

    }

    public function deleteImage($id)
    {
       $productIamge = ProductImage::FindOrFail($id);
       return response()->download(storage_path('app/product-images/' . $productIamge->path));

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
