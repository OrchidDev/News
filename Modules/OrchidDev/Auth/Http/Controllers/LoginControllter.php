<?php

namespace OrchidDev\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use OrchidDev\Auth\Http\Requests\LoginReguest;

class LoginControllter extends Controller
{
    public function view()
    {
        return view('Auth::login');
    }

    public function login(LoginReguest $reguest)
    {
        if (Auth::attempt(['email' => $reguest->email, 'password' => $reguest->password]))
        {
            return to_route('home.index');
        }

        return redirect()->route('home.index');
    }
}
