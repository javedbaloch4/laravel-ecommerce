<?php

namespace App\Http\Controllers\Front;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{

    public function index() {
        return view('front.registration.index');
    }

    public function store(Request $request) {

        // Validate the user
        $request->validate([
           'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'address' => 'required'
        ]);

        // Save the data
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,

        ]);

        // Sign the user in
        auth()->login($user);

        // Redirect to
        return redirect('/user/profile');

    }

}
