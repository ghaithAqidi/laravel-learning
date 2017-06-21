<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(){
        /***
        this should do the following:
         * 1.validate the form.
         * 2.create and save the user.
         * 3.sign the user in.
         * 4.redirect to home page.
         */

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password'=>'required|confirmed'
            //the confirmed here means that the password_confirmation input must match the password input.
        ]);

        $user = User::create(request(['name','email','password']));

        auth()->login($user);

        return redirect()->home();


    }
}
