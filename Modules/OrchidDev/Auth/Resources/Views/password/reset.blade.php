@extends('Auth::layouts.app')

@section('title', 'ایجاد رمز عبور جدید')

@section('content')
    <div class="container">
        <div class="col-md-6 offset-3" style="margin-top: 250px">
            @if(session()->has('success_reset_password'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success_reset_password')}}
                </div>
            @endif
            @if(session()->has('error_reset'))
                <div class="alert alert-danger" role="alert">
                    {{session()->get('error_reset')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header text-center">
                    ایجاد رمز عبور جدید
                </div>
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img src="{{asset('img/basic_lock.png')}}" alt="">
                    </div>
                    <p>ایمیل خود را وارد کنید. ما پیوند بازنشانی رمز عبور را برای شما ارسال می کنیم.</p>
                </div>
                <div class="p-3">
                    <form action="{{ route('password.reset') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{$token}}">
                        <label for="email" class="mb-2">ایمیل</label>
                        <input type="email" class="form-control mb-3" id="email" name="email" value="{{ $email }}" placeholder="ایمیل خود را وارد کنید">
                        @error('email')
                        <div class="text-danger mt-3">
                            {{ $message }}
                        </div>
                        @enderror
                        <label for="password" class="mb-2">رمز عبور</label>
                        <input type="password" class="form-control mb-3" id="password" name="password" placeholder="رمز عبور را وارد کنید">
                        @error('password')
                        <div class="text-danger mt-3">
                            {{ $message }}
                        </div>
                        <label for="password_confirmation" class="mb-2">رمز عبور</label>
                        <input type="password" class="form-control mb-3" id="password_confirmation" name="password_confirmation" placeholder="دوباره رمز عبور را وارد کنید">
                        @error('password_confirmation')
                        <div class="text-danger mt-3">
                            {{ $message }}
                        </div>
                        @enderror
                        <button type="submit" class="btn btn-primary">ذخیره رمز عبور</button>
                    </form>
                </div>
            </div>
            <div class="text-center mt-3">
                بازگشت به <a href="{{ route('auth.login') }}" class="fw-bolder text-dark text-decoration-none">صفحه ورود</a>
            </div>
        </div>
    </div>
@endsection
