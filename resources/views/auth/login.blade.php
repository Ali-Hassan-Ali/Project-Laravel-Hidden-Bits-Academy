@extends('layouts.home.app')

@section('content')

          <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay pt-5">
            <div class="breadcrumbs-img">
                <img src="{{ asset('home_file/assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title text-center">تسجيل الدخول</h1>
                <ul class="text-center">
                    <li>تسجيل الدخول</li> //
                    <li>
                        <a class="active" href="index.html">الرئسيه</a>
                    </li>
                </ul>
            </div>
        </div>
      <!-- Breadcrumbs End -->

      <!-- My Account Section Start -->
        <div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="noticed">
                    <div class="main-part">                           
                        <div class="method-account">
                            <h2 class="login text-center">تسجيل الدخول</h2>
                            <form action="{{ route('login') }}" method="post">
                                
                                @csrf

                                <input class="bg-transparent text-light form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="اليميل" required="">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <input class="bg-transparent text-light form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="password"  name="password" placeholder="كلمه المرور" required="">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <button type="submit" class="btn btn-dark d-block col-12 btn-lg">تسجيل الدخول</button>
                                <div class="last-password pt-3">
                                    <p class="text-light">ليس لديك حساب ? <a href="{{ route('Register_Client') }}" class="text-light">انشاء حساب جديد</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- My Account Section End -->

@endsection
