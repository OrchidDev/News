@extends('Auth::layouts.app')

@section('title', 'تایید ایمیل کاربر')

@section('content')
    <div class="container">
        <div class="col-md-6 offset-3" style="margin-top: 250px">
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header text-center">
                    تایید ایمیل
                </div>
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img src="{{asset('img/basic_mail_open_text.png')}}">
                    </div>
                    <p>یک ایمیل به {{auth()->user()->email}} ارسال شده است و لطفا روی لینک ایمیل کلیک کنید.</p>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('verify-email-resend').submit()" class="btn btn-primary">ارسال دوباره پیوند برای ایمیل</a>
                    <form action="{{ route('verify.resend') }}" method="POST" id="verify-email-resend">@csrf</form>
                </div>
            </div>
        </div>
    </div>
@endsection
