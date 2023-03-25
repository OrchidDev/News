<?php

namespace OrchidDev\Auth\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginControllter extends Controller
{
    public function view()
    {
        return view('Auth::login');
    }

    public function register()
    {
        //
    }
}
