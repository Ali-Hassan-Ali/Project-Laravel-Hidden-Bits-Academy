@extends('layouts.home.app')

@section('content')

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="{{ asset('home_file/assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title text-center">التسجيل في الكورس</h1>
        <ul class="text-center">
            <li>التسجيل في الكورس</li> //
            <li>
                <a class="active" href="/">الرئسيه</a>
            </li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- My Account Section Start -->
<section class="register-section pt-100 pb-100 loaded bg-hidden-bits-o">

    <div class="container">
        <div class="register-box">
            
            <div class="sec-title text-center mb-30">
                <h2 class="title mb-10 text-light text-center">فورم التسجيل</h2>
            </div>
            
            <!-- Login Form -->
            <div class="styled-form">
            	@if (session('error'))
					<div class="alert alert-danger">{{ session('error') }}</div>
				@endif
                <form method="post" action="{{ route('Purchase.store') }}" enctype="multipart/form-data">                               

                		{{ csrf_field() }}
                        {{ method_field('post') }}

                    <div class="row clearfix">                                    
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input class="bg-transparent text-light" type="text" value="{{ auth()->user()->name }}" id="Name" name="first_name" readonly="" value="" placeholder="الاسم الاول" required="">
                        </div>
                        
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input class="bg-transparent text-light" type="text" id="last" name="last_name" value="" placeholder="الاسم الثاني" required="">
                        </div>
                        
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input class="bg-transparent text-light" type="email" value="{{ auth()->user()->email }}" id="email" name="email" value="" readonly="" placeholder="الاميل" required="">
                        </div>
                        
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input class="bg-transparent text-light" type="tel" name="phone" value="" placeholder="رقم الهاتف" required=""
                            size="20" minlength="9" maxlength="14">
                        </div>    
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input class="bg-transparent text-light new_Btn" type="file" name="bill_image" id="user" name="file" value="" placeholder="رقم الهاتف" required="">
                        </div>    
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input class="bg-transparent text-light" type="text" id="puser" name="name_course" value="{{ $purchase_course->name }}" placeholder="اسم الكورس" required="" readonly="">
                        </div>    

                        <div class="form-group col-lg-12">
                            <input type="text" name="course_id" value="{{ $purchase_course->id }}" required="" readonly="" hidden>
                        </div>    
                        <div class="form-group col-lg-12">
                            <input type="text" name="users_id" value="{{ auth()->user()->id }}" required="" readonly="" hidden >
                        </div>    
                        <!-- Form Group -->
                        
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                            <button type="submit" class="btn btn-dark col-12"><span class="txt">اضافه</span></button>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
</section>

<!-- My Account Section End -->	

@endsection