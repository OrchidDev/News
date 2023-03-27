@extends('Auth::layouts.app')

@section('title', 'بازیابی رمز عبور')

@section('content')
    <div class="container">
        <div class="col-md-6 offset-3" style="margin-top: 250px">
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('message')}}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{session()->get('error')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header text-center">
                    بازیابی رمز عبور
                </div>
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img src="{{asset('img/basic_mail_open_text.png')}}">
                    </div>
                    <p>ایمیل خود را وارد کنید. ما پیوند بازنشانی رمز عبور را برای شما ارسال می کنیم.</p>
                </div>
                <div class="p-3">
                    <form action="{{ route('auth.password.send.email') }}" method="POST">
                        @csrf
                        <label for="reset" class="mb-2">ایمیل</label>
                        <input type="email" class="form-control mb-3" id="reset" name="email" placeholder="ایمیل خود را وارد کنید">
                        @error('email')
                        <div class="text-danger mt-3">
                            {{ $message }}
                        </div>
                        @enderror
                        <button type="submit" class="btn btn-primary">باز نشانی رمز عبور</button>
                    </form>
                </div>
            </div>
                <div class="text-center mt-3">
                    بازگشت به <a href="{{ route('auth.login') }}" class="fw-bolder text-dark text-decoration-none">صفحه ورود</a>
                </div>
        </div>
    </div>
@endsection

