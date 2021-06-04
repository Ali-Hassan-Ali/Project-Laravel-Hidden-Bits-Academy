@extends('layouts.home.app')

@section('content')

	<!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay pt-5">
        <div class="breadcrumbs-img">
            <img src="{{ asset('home_file/assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title text-center"> كورساتي</h1>
            <ul class="text-center">
                <li> كورساتي</li> //
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
            @if ($courses->count() > 0)
            <h2 class="text-light">االكورسات التي تم الاشتراك بيها</h2>

                <table class="table text-light" border="border">

                    <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم الكورس</th>
                        <th>رابط الكورس</th>
                        <th>الوصف المحتصر</th>
                        <th>عدد ساعات الكورس</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    @foreach ($courses as $index=>$course)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $course->course->name }}</td>
                            <td><a href="{{ $course->course->url }}" title="">{{ $course->course->url }}</a></td>
                            <td>{{ $course->course->Short_description }}</td>
                            <td>{{ $course->course->time }}</td>
                        </tr>
                    
                    @endforeach
                    </tbody>

                </table><!-- end of table -->
                
            @else
                
                <h2 class="text-light text-center">لايوجد اي بينات</h2>
                
            @endif

        </div>
    </div>

<!-- My Account Section End -->

@endsection