@extends('layouts.home.app')

@section('content')

    <div class="wrapper">
        <h2>Anmate background</h2>
        <div class="box">
            <div>1</div>
            <div>0</div>
            <div>1</div>
            <div>0</div>
            <div>1</div>
            <div>0</div>
            <div>1</div>
            <div>0</div>
            <div>1</div>
            <div>0</div>
            <div>1</div>
            <div>0</div>
            <div>1</div>
            <div>0</div>
            <div>1</div>
            <div>0</div>
            <div>1</div>
            <div>0</div>
            <div>1</div>
            <div>0</div>
            <div>1</div>
            <div>0</div>
        </div>
    </div>  
            
            
	 <div class="rs-banner style6 mb-0" id="rs-banner">
                <div class="container">
                    <div class="banner-content text-center">
                        <h1 class="banner-title white-color text-center">
                            مرحبا بكم في أكاديمية هيدن بت
                        </h1>
                        <div class="desc white-color mb-50 text-center">
                            تعلم حسب سرعتك طور حياتك المهنية
                        </div>
                    </div>
                    <div class="shape-img left">
                        <img alt="images" class="animate slideInLeft wow" data-wow-duration="1.5s" src="{{ asset('home_file/assets/images/bg/home6/icon/1.png') }}">
                        </img>
                    </div>
                    <div class="shape-img center">
                        <div class="inner">
                            <img alt="images" class="animate slideInUp wow" data-wow-duration="1.5s" src="{{ asset('home_file/assets/images/bg/home6/icon/2.png') }}">
                                <div class="spiner one">
                                    <img alt="images" class="spine-r" src="{{ asset('home_file/assets/images/banner/home6/spine-sm.png') }}">
                                        <img alt="images" class="spine" src="{{ asset('home_file/assets/images/banner/home6/spine.png') }}">
                                        </img>
                                    </img>
                                </div>
                                <div class="spiner two">
                                    <img alt="images" class="spine-r" src="{{ asset('home_file/assets/images/banner/home6/spine-sm.png') }}">
                                        <img alt="images" class="spine" src="{{ asset('home_file/assets/images/banner/home6/spine.png') }}">
                                        </img>
                                    </img>
                                </div>
                                <div class="spiner three">
                                    <img alt="images" class="spine-r" src="{{ asset('home_file/assets/images/banner/home6/spine-sm.png') }}">
                                        <img alt="images" class="spine" src="{{ asset('home_file/assets/images/banner/home6/spine.png') }}">
                                        </img>
                                    </img>
                                </div>
                            </img>
                        </div>
                    </div>
                    <div class="shape-img right">
                        <img alt="images" class="animate slideInRight wow" data-wow-duration="1.5s" src="{{ asset('home_file/assets/images/bg/home6/icon/3.png') }}">
                        </img>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->
            <div class="rs-about style6 pt-90 pb-100 md-pt-60 md-pb-70 bg-hidden-bits" id="About">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 pr-10 md-mb-40">
                            <div class="desc text-light">
                                {{ setting('from_academy') }}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title mb-26">
                                <div class="sub-title">
                                    عن المؤسسة
                                </div>
                                <h2 class="title extra-bold text-light">
                                    هيدن بت
                                </h2>
                                    {{ setting('our_slogan') }}
                            </div>
                        </div>
                    </div>
                    <div class="shape-animate">
                        <div class="transparent left">
                            <img alt="images" src="{{ asset('home_file/assets/images/about/home6/line/1.png') }}">
                            </img>
                        </div>
                        <div class="transparent right">
                            <img alt="images" src="{{ asset('home_file/assets/images/about/home6/line/2.png') }}">
                            </img>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rs-counter style2-about pb-100 pt-100 md-pb-70 bg-hidden-bits-o">
                <div class="container">
                    <div class="row couter-area">
                        <div class="col-lg-4 col-md-4 md-mb-30">
                            <div class="counter-item text-center">
                                <h2 class="text-light text-center">
                                    {{ $courses_count }}
                                </h2>
                                <h4 class="title mb-0 text-light text-center">
                                    الدورة المنتهية
                                </h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 md-mb-30">
                            <div class="counter-item text-center">
                                <h2 class="text-light text-center">
                                    {{ $sudant_count }}
                                </h2>
                                <h4 class="title mb-0 text-light text-center">
                                    الطلاب المسجلين
                                </h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 sm-mb-30">
                            <div class="counter-item text-center">
                                <h2 class="text-light text-center">
                                    {{ $coaches_count }}
                                </h2>
                                <h4 class="title mb-0 text-light text-center">
                                    المدربين المسجلين
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section Start -->
            <div class="rs-latest-couses gray-bg2 pt-100 pb-100 md-pt-70 md-pb-70 bg-hidden-bits" id="LatestCourses">
                
            </style>
                <div class="container">
                    <div class="sec-title text-center mb-60 md-mb-45">
                        <div class="sub-title text-right text-center">
                            اختر الدورات الدراسية الخاصة بك
                        </div>
                        <h2 class="title mb-0 text-right text-center text-white">
                            أحدث الدورات المميزة
                        </h2>
                    </div>
                    <div class="row d-flex flex-row-reverse">
                        @foreach ($all_course as $course)
                            {{-- expr --}}
                        @endforeach
                        <div class="col-lg-6 mb-40 ">
                            <div class="course-item d-flex flex-row-reverse">
                                <div class="course-image">
                                    <a href="#">
                                        <img alt="images" src="{{ $course->image_path }}">
                                        </img>
                                    </a>
                                </div>
                                <div class="course-info bg-hidden-bits-o text-right">
                                    <ul class="meta-part">
                                        <li>
                                            <span class="price">
                                                {{ $course->price }}
                                            </span>
                                        </li>
                                        <li class="user">
                                            <i class="fa fa-user">
                                            </i>
                                                {{ $course->studant_count }}
                                        </li>
                                    </ul>
                                    <h3 class="course-title">
                                        <a href="{{ route('DetailsCourse',$course->id) }}" class="text-light" style="font-size: 15px;">
                                            {{ $course->Short_description }}
                                        </a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="info-meta">
                                            <ul>
                                                <li class="ratings">
                                                    @for ($i = 0; $i < $course->rating; $i++)
                                                        <i class="fa fa-star"></i>
                                                    @endfor
                                                    ({{ $course->rating }})
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="{{ route('purchase.create',$course->id) }}" style="color: #fff">
                                                اشترك الان
                                                <i class="flaticon-right-arrow">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->
            <!-- Services Section Start -->
            <div class="rs-services style6 pb-10 md-pb-70 pt-100 bg-hidden-bits-o" id="coursesa">
                <div class="container">
                    <div class="sec-title text-center mb-35">
                        <h2 class="title mb-21 text-light text-center" style="color: #26c7f9">
                            خدمـــــــــــتنا
                        </h2>
                        <div>
                            <p class="text-center">
                                {{ setting('service_academy') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->
            <!-- Team Section Start -->
            <div id="Instructor" class="rs-team style1 inner-style orange-color pt-94 pb-100 md-pt-64 md-pb-70 gray-bg bg-hidden-bits">
                <div class="container">
                    <div class="sec-title mb-50 md-mb-30 text-center">
                        <h2 class="title mb-0 text-light text-center">مدربـــــــــــونا</h2>
                    </div>
                    <div class="row">
                        @foreach ($all_coaches as $coache)
                            {{-- expr --}}
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <a href="{{ route('show_coache',$coache->id) }}">
                                <div class="team-item">
                                    <img src="{{ $coache->image_path }}" alt="">
                                    <div class="content-part text-center">
                                        <h4 class="text-center" style="color: #fff">{{ $coache->name }}</h4>
                                        <span class="designation text-center" style="background: #18191A;">{{ $coache->jobs }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                        <div class="container pt-5">
                            <div class="row">
                                <div class="col text-center">
                                  <a href="{{ route('show_all_coache') }}" class="btn btn-dark btn-sm">عرض المزيد</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Team Section End -->
            <!-- Blog Section Start -->
            <div class="rs-blog style2 modify2 pb-100 pt-100 md-pt-70 md-pb-70 bg-hidden-bits-o" id="LatestNews">
                <div class="container relative">
                    <div class="right-top-shape">
                        <img alt="" src="{{ asset('home_file/assets/images/shape/radius-circle-shape.png') }}">
                        </img>
                    </div>
                    <div class="sec-title mb-60 text-center md-mb-40">
                        <h2 class="title mb-0 text-light text-center">
                            منــــــشوراتنا
                        </h2>
                    </div>
                    <div class="rs-carousel owl-carousel" data-autoplay="true" data-autoplay-timeout="5000" data-center-mode="false" data-dots="false" data-hoverpause="true" data-ipad-device="2" data-ipad-device-dots="false" data-ipad-device-dots2="false" data-ipad-device-nav="false" data-ipad-device-nav2="false" data-ipad-device2="1" data-items="3" data-loop="true" data-margin="30" data-md-device="3" data-md-device-dots="false" data-md-device-nav="false" data-mobile-device="1" data-mobile-device-dots="false" data-mobile-device-nav="false" data-nav="false" data-nav-speed="false" data-smart-speed="800">
                        @foreach ($posts as $post)
                        <div class="blog-item">
                                {{-- expr --}}
                            <div class="image-part">
                                <img alt="" src="{{ $post->image_path }}">
                                </img>
                            </div>
                            <div class="blog-content new-style2" style="background: red">

                                <ul class="blog-meta">
                                    <li>
                                        <i class="fa fa-calendar">
                                        </i>
                                        {{ $post->created_at->toFormattedDateString() }}
                                    </li>
                                </ul>
                                <h3 class="title">
                                    <a href="#">
                                         {{ $post->description }}
                                    </a>
                                </h3>
                                <div class="desc">
                                        {{ $post->short_description }}
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->
            <!-- Contact Section Start -->
            <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70 bg-hidden-bits">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 pl-30 lg-pl-15 bg-hidden-bits">
                            <div class="rs-quick-contact new-style">
                                <div class="inner-part mb-50">
                                    <h2 class="mb-15 text-center" style="color: #fff">
                                        خدمه استشاريه
                                    </h2>
                                    <p style="color: #fff">
                                        يرجى ملء النموذج التالي وسوف نتصل بك
                                    </p>
                                </div>
                                <div  class="">
                                    <form action="{{ route('advisory_services.store') }}"  method="post">

                                            {{ csrf_field() }}
                                            {{ method_field('post') }}

                                        <div class="row">
                                            <div class="col-lg-6 mb-35 col-md-12">
                                                <input class="from-control bg-transparent text-light" id="name" name="name" placeholder="ادخل الاسم" required type="text">
                                                </input>
                                            </div>
                                            <div class="col-lg-6 mb-35 col-md-12">
                                                <input class="from-control bg-transparent text-light" id="email" name="email" placeholder="ادخل الاميل" required type="email">
                                                </input>
                                            </div>
                                            <div class="col-lg-6 mb-35 col-md-12">
                                                <input class="from-control bg-transparent text-light" id="phone" name="phone" placeholder="ادخل رقم الهاتف" required
                                                 type="text" size="20" minlength="9" maxlength="14">
                                                </input>
                                            </div>
                                            <div class="col-lg-6 mb-35 col-md-12">
                                                <input class="from-control bg-transparent text-light" id="title" name="title" placeholder="ادخل العنوان" required="" type="text">
                                                </input>
                                            </div>
                                            <div class="col-lg-12 mb-50">
                                                <textarea class="from-control bg-transparent text-light" id="body" name="body" placeholder=" ادخل الرساله" required="">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-dark col-12 btn-lg advisory-services"
                                                    data-url="{{ route('advisory_services.store') }}"
                                                    data-method="post"
                                            >إرسال</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->
            <!-- Newsletter section start -->
            <div class="rs-newsletter style6 bg4 pt-100 pb-90 md-pt-70 md-pb-60 bg-hidden-bits-o">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="content-part text-center mb-45 md-mb-30">
                            <h2 class="mb-10 text-center" style="color: #fff">
                                اشترك ليصلك كل جديد
                            </h2>
                        </div>
                        <form class="">
                          
                          <div class="form-group col-8 mx-auto p-0">
                            <input type="email" class="form-control form-control-lg bg-transparent text-light" placeholder="ادخل الاميل">
                          </div>

                        <div class="form-group mx-auto p-0">
                            <button type="submit" class="btn btn-dark mx-auto col-8 d-block">اضف</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

@endsection

@push('scripts')
    <script>

    $(document).ready(function() {

        $(".advisory-services").click(function(e){
            e.preventDefault();

            var url       = $(this).data('url');
            var method    = $(this).data('method');

            var name   = $('#name').val();
            var email  = $('#email').val();
            var phone  = $('#phone').val();
            var title  = $('#title').val();
            var body   = $('#body').val();

            $.ajax({
                url: url,
                method: method,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{
                    name:name,
                    email:email,
                    phone:phone,
                    title:title,
                    body:body,
                },
                success: function (response) {

                    if (response.success == true) 
                    {
                        swal({
                            title: 'تمت الاضافه بنجاح',
                            timer: 5000,
                        });

                        $('#name').val('');
                        $('#email').val('');
                        $('#phone').val('');
                        $('#title').val('');
                        $('#body').val('');

                    }//end of if
                    
                },//end of success

            });//end of ajax  

        });//end of click

    });//end of document ready functiom

    </script>
@endpush