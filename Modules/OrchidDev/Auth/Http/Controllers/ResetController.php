<?php

namespace OrchidDev\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use OrchidDev\Auth\Http\Requests\PasswordUpdateRequest;
use OrchidDev\Auth\Http\Requests\SendEmailPasswordRecoveryRequest;

class ResetController extends Controller
{
    public function view()
    {
        return view('Auth::password.send-email');
    }

    public function sendEmail(SendEmailPasswordRecoveryRequest $request)
    {
        $reset = Password::sendResetLink($request->only('email'));

        return $reset == Password::RESET_LINK_SENT ?
            back()->with(['message', 'پیوند بازیابی رمز عبور با موفقیت به ایمیل شما ارسال شد.']) :
             back()->withErrors(['error', 'یک مشکلی در سیستم وجود آمده است, لطفا دوباره تلاش کنید.']);
    }

    public function reset(Request $request)
    {
        $token = $request->token;
        $email = $request->email;
        return view('Auth::password.reset', compact(['token', 'email']));
    }

    public function update(PasswordUpdateRequest $request)
    {
        $reset = Password::reset(
            $request->only('token', 'email', 'password', 'password_confirmation'),
            static function ($user, $password)
            {
                $user->forceFill(['password' => bcrypt($password)])->setRememberToken(Str::random(60));
                $user->save();
                event(new ResetPassword($user));
            }
        );

        return $reset === Password::PASSWORD_RESET ? to_route('login')->with(['success_reset_password', 'رمز عبور شما با موفقیت تغییر کرد.'])
            : back()->withErrors(['error_reset' => 'مشکلی در سیستم وجود آمده است و دوباره تلاش کنید.']);
    }
}
