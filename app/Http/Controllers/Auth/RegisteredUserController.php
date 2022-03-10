<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
			'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'account_type' => ['required', 'integer'],
        ]);
        //dd($request->account_type);
        if($request->account_type==2)
            $role = 2;
        elseif($request->account_type==3)
            $role = 3;
        //dd($role);
        $user = User::create([
            'role_id' => '3',
            'name' => $request->name,
			'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => '3',
        ]);

        /*$user = new \App\Models\User;
		$user->role_id = $role;
        $user->name = $request->name;
		$user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);*/

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
