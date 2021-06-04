@extends('layouts.home.app')

@section('content')

	<!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay pt-5">
        <div class="breadcrumbs-img">
            <img src="{{ asset('home_file/assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title text-center"> بينات الحساب</h1>
            <ul class="text-center">
                <li>بينات الحساب</li> //
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
                        <h2 class="login text-center"> تعديل بينات الحساب</h2>
                        <form action="{{ route('profile.update',auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                            <input class="bg-transparent text-light" type="text" value="{{ auth()->user()->name }}" name="name" placeholder="الاسم" >
                            <input class="bg-transparent text-light" type="email" value="{{ auth()->user()->email }}" name="email" placeholder="اليميل" required>
                            <input class="bg-transparent text-light" type="password" name="password" placeholder="كلمه المرور">
                            <input class="bg-transparent text-light" type="password" name="password_confirmation" placeholder="إعادة كلمة المرور">
                            <input class="bg-transparent text-light" type="file" value="{{ auth()->user()->image_path }}" name="image" placeholder="إعادة كلمة المرور"  style="display: block;">
                            <button type="submit" class="btn btn-dark d-block col-12 btn-lg">تعديل</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- My Account Section End -->

@endsection