@extends('layouts.home.app')

@section('content')

          <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay pt-5">
            <div class="breadcrumbs-img">
                <img src="{{ asset('home_file/assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title text-center">تسجل</h1>
                <ul class="text-center">
                    <li>تسجل</li> //
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
                            <h2 class="login text-center">تسجل</h2>
                            <form action="{{ route('register') }}" method="post">
                                
                                @csrf

                                <input class="bg-transparent text-light form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="ادخل الاسم" required="">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <input class="bg-transparent text-light form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="اليميل" required="">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input class="bg-transparent text-light form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"  name="password" placeholder="ادخل كلمه السر" required="">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <input class="bg-transparent text-light" type="password"  name="password_confirmation" placeholder="إعادة كلمة المرور" required="">
                                <button type="submit" class="btn btn-dark d-block col-12 btn-lg">تسجيل الدخول</button>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 btn-lg pt-4">
                                            <div class="users text-light">هل لديك حساب من قبل <a href="{{ route('Login_Client') }}" style="color: #aaa">تسجيل الدخول</a></div>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- My Account Section End -->

@endsection
