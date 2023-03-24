<?php

namespace OrchidDev\Auth\Http\Controllers;

use App\Http\Controllers\Controller;

class RegisterControllter extends Controller
{
    public function view()
    {
        return view('Auth::register');
    }

    public function register()
    {
        //
    }
}
