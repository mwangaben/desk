<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function create()
    {
        return view('registration.create');
    }
    public function store()
    {
        // validate the form
        $this->validate(request(), [
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required|confirmed',
        ]);

        // create and save the user
        $user = User::create([
            'name'     => request('name'),
            'email'    => request('email'),
            'password' => bcrypt(request('password')),
        ]);
        // sign in the user
        auth()->login($user);

        // Sending a welcome email
        \Mail::to($user)->send(new Welcome);

        // redirect to the home page
        return redirect()->home();
    }
}
