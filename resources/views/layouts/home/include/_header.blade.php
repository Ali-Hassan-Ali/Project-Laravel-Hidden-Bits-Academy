

        <div class="full-width-header header-style2 modify1 header-home6">
            <!--Header Start-->
            <header class="rs-header" id="rs-header">
                <!-- Menu Start -->
                <div class="menu-area menu-sticky sticky" id="custom-nav">
                    <div class="container">
                        <div class="row y-middle d-flex flex-row-reverse">
                            <div class="col-lg-3">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part pr-90">
                                        <a href="/">
                                            <img alt="" src="{{ asset('home_file/assets/images/Hidden-bits-logo.png')}}">
                                            </img>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 text-center d-flex flex-row-reverse">
                                <div class="rs-menu-area">
                                    <div class="main-menu pr-90 md-pr-15">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars">
                                                </i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu">
                                            <ul class="nav-menu">

                                                @auth
                                                <li class="menu-item-has-children">
                                                    <a href="#">
                                                        <img src="{{ auth()->user()->image_path }}" alt="" class="rounded-circle" width="50px">
                                                    </a> 
                                                    <ul class="sub-menu">
                                                        @if (auth()->user()->hasPermission('dashboard_read'))
                                                        <li>
                                                            <a href="{{ route('dashboard.welcome') }}">
                                                                لوحه التحكم
                                                            </a>
                                                        </li>
                                                        @endif
                                                        <li>
                                                            <a href="{{ route('my_course',auth()->user()->id) }}">
                                                                كورساتي 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('profile.index',auth()->user()->id) }}">
                                                                الملف الشخصي
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                                تسجيل الخروج
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>

                                                @else 

                                                <li class="menu-item-has-children">
                                                    <a href="#">
                                                        تسجيل <i class="fa fa-user-plus"></i>
                                                    </a> 
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="{{ route('Login_Client') }}">
                                                                تسجيل الدخول
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('Register_Client') }}">
                                                                تسجيل
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                @endauth

                                                <li class="menu-item-has-children">
                                                    <a href="#Contact">
                                                        اتصل بنا
                                                    </a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="{{ route('certificates') }}">
                                                        الشهادات
                                                    </a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">
                                                        عن المؤسسة <i class="fa fa-plus"></i>
                                                    </a> 
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="{{ route('show_all_coache') }}">
                                                                المدربين
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('founder',1) }}">
                                                                المؤسسين
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#OurServices">
                                                        خدماتنا
                                                    </a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">
                                                         كورساتنا <i class="fa fa-plus"></i>
                                                    </a> 
                                                    <ul class="sub-menu">
                                                        @foreach ($categorys as $category)

                                                        <li>
                                                            <a href="{{ route('Show_Course',$category->id) }}">
                                                                {{ $category->name }}
                                                            </a>
                                                        </li>

                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#LatestCourses">
                                                        أحدث الدورات
                                                    </a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="index.html">
                                                        الرئسيه
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- //.nav-menu -->
                                        </nav>
                                    </div>
                                    <!-- //.main-menu -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
            </header>
            <!--Header End-->
        </div>