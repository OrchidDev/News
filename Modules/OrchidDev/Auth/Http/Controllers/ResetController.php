<?php

namespace OrchidDev\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Mockery\Generator\StringManipulation\Pass\Pass;
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

        return $reset = Password::RESET_LINK_SENT ?
            back()->with(['message', 'پیوند بازیابی رمز عبور با موفقیت به ایمیل شما ارسال شد.']) :
             orback()->withErrors(['error', 'یک مشکلی در سیستم وجود آمده است, لطفا دوباره تلاش کنید.']);
    }
}
