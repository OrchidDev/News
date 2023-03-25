@extends('Auth::layouts.app')

<div class="container">
    <div class="col-md-6 offset-3" style="margin-top: 250px">
        <div class="card">
            <div class="card-header">
                ورود در سایت
            </div>
            <div class="card-body">
                <form action="{{ route('auth.login.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Email1" class="form-label">ایمیل</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="Email1">
                        @error('email')
                        <div class="text-danger mt-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Password1" class="form-label">رمز عبور</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="Password1">
                        @error('password')
                        <div class="text-danger mt-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">مرا به خاطر بسپار</label>
                    </div>
                    <button type="submit" class="btn btn-primary">ورود</button>
                </form>
            </div>
        </div>
        <div class="text-center mt-3">
            ثبت نام کردید؟ <a href="{{ route('auth.register') }}" class="fw-bolder text-dark text-decoration-none">عضو شوید</a>
        </div>
    </div>
</div>
