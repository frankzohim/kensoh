<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.profile', [
            'user' => User::findOrFail(auth()->user()->id),
            'countries' => Country::all()
        ]);
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
    public function update(Request $request, User $user)
    {
        //Validating request
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', Rules\Password::defaults()],
            'country_id' => ['required', 'exists:App\Models\Country,id'],
            'phone' => ['required', 'numeric'],
        ]);

        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->country_id = $request->country_id;
        $user->password = Hash::make($request->password);

        $user->save();
        return back()->with('update_success', 'Modifications prises en compte');
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

    public function images(Request $request)
    {
        if ($user < 3) {
            $image = $request->file('file');
            $name = "toto";
            $extension = $image->getClientOriginalExtension();

            $allowedfileExtension = ['jpg', 'png', 'jpeg'];

            $check = in_array($extension, $allowedfileExtension);

            if (!$check) {

                return response('invalid extension', 400);
            } else {

                //Storing file in disk
                $fileName = $image->id . '_' . time() . '_' . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('user', $fileName);

                //Add image to database (product_images table)
                $user = new \App\Models\productImage;
                $user->profil = $fileName;
                $user->user = $user->id;
                $user->save();
                return response('Image ajoutée avec succès', 200);
            }
        } else {
            return response('Quota d\'images atteint', 400);
        }
    }
}
