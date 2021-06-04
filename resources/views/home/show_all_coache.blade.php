@extends('layouts.home.app')

@section('content')

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay pt-5">
    <div class="breadcrumbs-img">
        <img src="{{ asset('home_file/assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title text-center">المدربون</h1>
        <ul class="text-center">
            <li>المدربون</li> //
            <li>
                <a class="active" href="/">الرئسيه</a>
            </li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- Team Section Start -->
<div id="Instructor" class="rs-team style1 inner-style orange-color pt-94 pb-100 md-pt-64 md-pb-70 gray-bg bg-dark">
    <div class="container">
        <div class="row">
        	@foreach ($all_coaches as $coaches)
	            <div class="col-lg-4 col-sm-6 mb-30">
	            	<a href="{{ route('show_coache',$coaches->id) }}">
		                <div class="team-item">
		                    <img src="{{ $coaches->image_path }}" alt="">
		                    <div class="content-part">
		                        <h4 class="text-center" style="color: #fff">{{ $coaches->name }}</h4>
		                        <span class="designation text-center">{{ $coaches->jobs }}</span>
		                    </div>
		                </div>
	            	</a>
	            </div>
        	@endforeach
        </div>
    </div>
</div>
<!-- Team Section End -->

@endsection