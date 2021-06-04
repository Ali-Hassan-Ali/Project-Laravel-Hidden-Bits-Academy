@extends('layouts.home.app')

@section('content')

	<!-- Breadcrumbs Start -->
	<div class="rs-breadcrumbs breadcrumbs-overlay pt-5">
        <div class="breadcrumbs-img">
            <img src="{{ asset('home_file/assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title text-center">تفاصيل المدرب</h1>
            <ul class="text-center">
                <li>الرئسيه</li> //
                <li>
                    <a class="active" href="/">تفاصيل المدرب</a>
                </li>

            </ul>
        </div>
    </div>

	<!-- Breadcrumbs End -->
	<!-- Profile Section -->
	<section class="profile-section orange-color pt-100 pb-100 md-pt-70 md-pb-70 loaded bg-hidden-bits-o"> 
	    <div class="container">                   
	        <div class="row clearfix bg-hidden-bits">                      
	            <!-- Content Section -->
	            <div class="content-column col-lg-7 pl-60 pt-50 md-pl-15 md-pt-2">
	                <div class="inner-column">
	                    <h2 class="text-light">{{ $coache->name }}</h2>
	                    <h4 class="text-light">{{ $coache->jobs }}</h4>
	                    <!-- Student List -->
	                    <ul class="student-list">
	                    		
	                        <li class="text-light">
	                    	@for ($i = 0; $i < $coache->rating; $i++)
	                        	<span class="fa fa-star"></span>
	                    	@endfor
	                        	 (التقيم)
	                        </li>
	                    </ul>
	                    <h5 class="text-light">عن المدرب</h5>
	                    <p class="text-light"> {{ $coache->description }}</p>
	                </div>
	            </div>

	            <!-- Image Section -->
	            <div class="image-column col-lg-5 md-mb-50">
	                <div class="inner-column mb-50 md-mb-0">
	                    <div class="image">
	                        <img src="{{ $coache->image_path }}" alt="">
	                    </div>
	                    <div class="team-content">
	                        <h3 class="text-center text-light">{{ $coache->name }}</h3>
	                        <div class="text text-center">{{ $coache->jobs }}</div>
	                        <ul class="personal-info">
	                            <li class="email">
	                                <span><i class="glyph-icon flaticon-email"> </i> </span>
	                                <a href="{{ $coache->email }}">{{ $coache->email }}</a>
	                            </li>
	                            <li class="phone">
	                                <span><i class="glyph-icon flaticon-call"></i></span>
	                                <a href="tel:+088-589-8745">{{ $coache->phone }}</a>
	                            </li>
	                        </ul>
	                    </div>
	                   {{--  <div class="social-box">
	                        <a href="#" class="fa fa-facebook-square"></a>
	                        <a href="#" class="fa fa-twitter-square"></a>
	                        <a href="#" class="fa fa-linkedin-square"></a>
	                        <a href="#" class="fa fa-github"></a>
	                    </div> --}}
	                </div>
	            </div>

	        </div>
	    </div>
	</section>

@endsection