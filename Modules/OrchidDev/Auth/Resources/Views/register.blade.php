@extends('Auth::layouts.app')

<div class="container">
    <div class="col-md-6 offset-3" style="margin-top: 250px">
        <div class="card">
            <div class="card-header">
                ثبت نام در سایت
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="Text1" class="form-label">نام و نام خانوادگی</label>
                        <input type="text" class="form-control" id="Text1">
                    </div>
                    <div class="mb-3">
                        <label for="Email1" class="form-label">ایمیل</label>
                        <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Password1" class="form-label">رمز عبور</label>
                        <input type="password" class="form-control" id="Password1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">شرایط و قوانین را می پذیرم</label>
                    </div>
                    <button type="submit" class="btn btn-primary">ثبت نام</button>
                </form>
            </div>
        </div>
    </div>
</div>
