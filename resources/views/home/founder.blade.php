@extends('layouts.home.app')

@section('content')
	
	<!-- Breadcrumbs Start -->
	<div class="rs-breadcrumbs breadcrumbs-overlay pt-5">
        <div class="breadcrumbs-img">
            <img src="{{ asset('home_file/assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title text-center">مؤسس الاكاديميه </h1>
            <ul class="text-center">
                <li>
                    <a class="active" href="/">الرئسيه</a>
                </li>
                <li>مؤسس الاكاديميه </li>
            </ul>
        </div>
    </div>

    <!-- Breadcrumbs End -->
    <!-- Blog Section Start -->
    <div id="rs-about" class="rs-about style4 pt-100 pb-100 md-pt-80 md-pb-80 bg-hidden-bits-o">
        <div class="container">
            <div class="row">                        
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="sec-title mb-46 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                            <h2 class="mb-15 sm-mb-5 text-light">{{ $founders->name }}</h2>
                            <div class="sub-title text-light">{{ $founders->job }}</div>
                            <p class="desc text-light">
                            	{{ $founders->description }}
                            </p>
                        </div>
                        <ul class="contact-part wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 500ms; animation-name: fadeInUp;">
                            <li>
                                <div class="desc text-light">
                                    <span><a href="{{ $founders->phone }}" class="text-light">{{ $founders->phone }}</a></span>
                                    <span>رقم الهاتف</span> 
                                </div>
                                <div class="img-part text-light ml-3">
                                    <i class="fa fa-phone fa-lg"></i>
                                </div>
                            </li>
                            <li class="my-4">
                                <div class="desc">
                                    <span><a href="{{ $founders->email }}" class="text-light">{{ $founders->email }}</a></span>
                                    <span class="text-light">الاميل</span> 
                                </div>
                                <div class="img-part ml-3">
                                    <i class="fa fa-envelope fa-lg"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1"></div>
                <div class="col-lg-5 md-mb-50">
                    <div class="img-part mr-auto">
                        <img class="about-main" src="{{ $founders->image_path }}" alt="About Image">
                        <!-- <img class="circle-bg shape" src="assets/images/about/home5/about-circle-bg.png" alt="About Image"> -->
                        <!-- <img class="small-circle shape animated pulse infinite" src="assets/images/about/home5/small-circle-shape.png" alt="About Image"> -->
                        <!-- <img class="deep-bg shape" src="assets/images/about/home5/about-deep-bg.png" alt="About Image"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section End -->

@endsection