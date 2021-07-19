@extends('layouts.home.app')

@section('content')

	<!-- Breadcrumbs Start -->
	<div class="rs-breadcrumbs breadcrumbs-overlay pt-5">
	      <div class="breadcrumbs-img">
	          <img src="{{ asset('home_file/assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
	      </div>
	      <div class="breadcrumbs-text white-color">
	          <h1 class="page-title text-center">صفحه تفاصيل الكورس</h1>
	          <ul class="text-center">
	              <li>تفاصيل الكورسات</li> //
	              <li>
	                  <a class="active" href="/">الرئسيه</a>
	              </li>
	          </ul>
	      </div>
	  </div>

	  <!-- Breadcrumbs End -->
	  <!-- Intro Courses -->
	  <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70 loaded bg-hidden-bits-o">
        <div class="container">
	        <div class="row clearfix">
	            <!-- Content Column -->
	            <div class="col-lg-8 md-mb-50">
	                <!-- Intro Info Tabs-->
	                <div class="intro-info-tabs">
	                    <div class="tab-content tabs-content" id="myTabContent">
	                        <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
	                            <div class="content white-bg pt-30 bg-hidden-bits">
	                                <!-- Cource Overview -->
	                                <div class="course-overview">
	                                    <div class="inner-box">
	                                        <h4 class="text-light">{{ $details_course->name }}</h4>
	                                        <p class="text-light">
	                                            {{ $details_course->description }}
	                                        </p>
	                                    </div>
	                                </div>                                                
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            
	            <!-- Video Column -->
	            <div class="video-column col-lg-4">
	                <div class="inner-column">
	                <!-- Video Box -->
	                    <div class="intro-video media-icon orange-color2">
	                        {{-- <img class="video-img" src="{{ $details_course->image_path }}" alt="Video Image"> --}}
	                        <video controls poster="{{ $details_course->image_path }}">
                              <source src="{{ asset('uploads/'.$details_course->demo_video) }}" type="video/ogg">
                              <source src="{{ asset('uploads/'.$details_course->demo_video) }}" type="video/webm">
                              	<i class="fa fa-play"></i>
                            </video>
	                    </div>
	                    
                        <h4 class="text-light text-center">فديوو تعرفي عن الكورس</h4>
	                    <!-- End Video Box -->
	                    <div class="course-features-info">
	                        <ul class="" style="text-align: right;">
	                            <li class="lectures-feature">
	                                <span class="label">محاضرات</span>
	                                <i class="fa fa-files-o"></i>
	                            </li>
	                           
	                            <li class="quizzes-feature">
	                                <span class="label">الإختبارات</span>
	                                <i class="fa fa-puzzle-piece"></i>
	                            </li>
	                           
	                            <li class="duration-feature">
	                                <span class="label">مدة</span>
	                                <i class="fa fa-clock-o"></i>
	                            </li>
	                          
	                            <li class="students-feature">
	                                <span class="label">الطلاب</span>
	                                <i class="fa fa-users"></i>
	                            </li>
	                           
	                            <li class="assessments-feature">
	                                <span class="label">التقييمات</span>
	                                <i class="fa fa-check-square-o"></i>
	                            </li>
	                        </ul>
	                    </div>
	                    
	                    <div class="btn-part">
	                        <a href="#" class="btn btn-dark">{{ $details_course->price }}</a>
	                        <a href="{{ route('purchase.create',$details_course->id) }}" class="btn btn-dark orange-transparent">اشترك الان</a>
	                    </div>
	                </div>
	            </div>                        
	        </div>                
	    </div>
	</section>

	<!-- End intro Courses -->

@endsection