<?php

namespace OrchidDev\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use OrchidDev\Auth\Http\Requests\RegisterReguest;
use OrchidDev\Auth\Services\RegisterService;

class RegisterControllter extends Controller
{
    public function view()
    {
        return view('Auth::register');
    }

    public function register(RegisterReguest $reguest, RegisterService $registerService)
    {
        $user = $registerService->generateUser($reguest);

        auth()->loginUsingId($user->id);

        return redirect()->route('home.index');
    }
}
