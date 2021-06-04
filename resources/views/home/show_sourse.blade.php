@extends('layouts.home.app')

@section('content')

<!-- Breadcrumbs Start -->

<div class="rs-breadcrumbs breadcrumbs-overlay pt-5">
  <div class="breadcrumbs-img">
      <img src="{{ asset('home_file/assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
  </div>
  <div class="breadcrumbs-text white-color">
      <h1 class="page-title text-center">{{ $name_courses }}</h1>
      <ul class="text-center">
          <li> {{ $name_courses }}</li> //
          <li>
              <a class="active" href="/">الرئسيه</a>
          </li>
      </ul>
  </div>
</div>

<!-- Breadcrumbs End -->
<!-- Popular Courses Section Start -->
	<div id="rs-popular-courses" class="rs-popular-courses style3 orange-color pt-100 pb-100 md-pt-70 md-pb-70" style="background-color:#18191A">
      <div class="container">                  
       @if ($courses->count() > 0)
          <div class="row">                     
             <div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                
                  @foreach ($courses as $cours)
                {{-- expr --}}
                 <div class="courses-item">
                     <div class="img-part">
                         <img src="{{ $cours->image_path }}" alt="">
                         {{-- <img src="{{ asset('home_file/assets/images/courses/7.jpg') }}" alt=""> --}}
                     </div>
                     <div class="content-part">
                         <span class="d-flex justify-content-end"><a class="categories" href="{{ route('DetailsCourse',$cours->id) }}">{{ $cours->name }}</a></span>
                         <ul class="meta-part">
                             <li class="user"><i class="fa fa-user"></i> {{ $cours->studant_count }}</li>
                             <li><span class="price">{{ $cours->price }}</span></li>
                         </ul>
                         <h3 class="title"><a href="{{ route('DetailsCourse',$cours->id) }}">{{ $cours->Short_description }}</a></h3>
                         <div class="bottom-part">
                             <div class="info-meta">
                                 <ul>                                                
                                     <li class="ratings">
                                      @for ($i = 0; $i < $cours->rating ; $i++)
                                          <i class="fa fa-star"></i>
                                      @endfor
                                         ({{ $cours->rating }})
                                     </li>
                                 </ul>
                             </div>
                             <div class="btn-part">
                                 <a href="{{ route('purchase.create',$cours->id) }}">اشترك الان<i class="flaticon-right-arrow"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

              @endforeach

             </div>
          </div>
       @else
          <h2 class="text-light text-center">لايوجد اي بينات</h2>
       @endif
      </div>
  </div>
              <!-- Popular Courses Section End -->

@endsection
