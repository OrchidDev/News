<?php

namespace OrchidDev\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
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

        event(new Registered($user));

        return redirect()->route('home.index');
    }
}
