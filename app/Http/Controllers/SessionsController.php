<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){

    }

    public function destroy(){

        auth()->logout();

        redirect()->home();

    }
}
