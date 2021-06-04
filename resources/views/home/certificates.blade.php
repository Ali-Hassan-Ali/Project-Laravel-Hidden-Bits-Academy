@extends('layouts.home.app')

@section('content')

	<!-- Breadcrumbs Start -->
	<div class="rs-breadcrumbs breadcrumbs-overlay pt-5">
        <div class="breadcrumbs-img">
            <img src="{{ asset('home_file/assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title text-center">الشهادات</h1>
            <ul class="text-center">
                <li>الشهادات</li> //
                <li>
                    <a class="active" href="/">الرئسيه</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- My Account Section Start -->
    <div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container my-auto">
            <p>هل انت مستعد للاعتراف بمعرفتك ومهاراتك ؟</p>
            <p>*كن معتمدا واجعل العالم يعترف بقدراتك*</p>
            <p>اذا كنت تتطلع الى التقدم في حياتك المهنية واثبات مستوى معرفتك ... يؤهلك التدريب على ايدي خبرائنا للحصول على شهادة اثبات قدرتك على اجراء اختبارات متقدمة  ...شهاده حضوربامكانك توثيقها من الخارجية الأمريكية فهي معتمده من البورد الأمريكي للمدربين الدوليين</p>
            <a href="#" title="">www.bita-usa.org</a>
            <p>تساعدك على التميز كمحترف مؤهل وذو خبره</p>
            <p>لطلب الشهادة بعد إتمام الدورة التدريبيه الرجاء تعبئه نموذج الطلب</p>

            <div class="noticed">
                <div class="main-part">                           
                    <div class="method-account">
                        <h2 class="login text-center">فورم طلب شهاده</h2>
                        <form action="{{ route('certificates_store') }}" method="post">
                        		
                        		{{ csrf_field() }}
                        		{{ method_field('post') }}

                            <input class="bg-transparent text-light" type="email" name="email" placeholder="الايميل" required="" value="{{ old('email') }}">
                            <input class="bg-transparent text-light" type="text" name="name_ar" placeholder="الاسم  كامل باللغة الإنجليزية" required="" value="{{ old('name_ar') }}">
                            <input class="bg-transparent text-light" type="text" name="name_en" placeholder="الاسم كامل باللغة العربية" required="" value="{{ old('name_en') }}">
                            <div class="form-group bg-transparent text-light">
                                <select class="form-control bg-transparent text-light" name="name_course" dir="rtl">
                                    <option style="background: black; text-align: right;">اختر الكورس</option>
                                    @foreach ($courses as $course)    
                                        <option value="{{ $course->name }}" style="hover: background: black ;background: black;">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark d-block col-12 btn-lg">اضافه</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- My Account Section End -->

@endsection