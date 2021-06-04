<!DOCTYPE html>
<html lang="zxx" dir="rtl">
    <!-- Mirrored from keenitsolutions.com/products/html/educavo/index7.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 07:37:10 GMT -->
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Hidden bits</title>
        <meta content="" name="description">
                <!-- responsive tag -->
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <!-- favicon -->
        <link href="apple-touch-icon.html" rel="apple-touch-icon">
        

        <link href="{{ asset('home_file/assets/images/Hidden-bits-logo.jpg')}}" rel="shortcut icon" type="image/x-icon">
        <!-- Bootstrap v4.4.1 css -->
        <link href="{{ asset('home_file/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <!-- font-awesome css -->
        <link href="{{ asset('home_file/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <!-- animate css -->
        <link href="{{ asset('home_file/assets/css/animate.css')}}" rel="stylesheet" type="text/css">
        <!-- owl.carousel css -->
        <link href="{{ asset('home_file/assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
        <!-- slick css -->
        <link href="{{ asset('home_file/assets/css/slick.css')}}" rel="stylesheet" type="text/css">
        <!-- off canvas css -->
        <link href="{{ asset('home_file/assets/css/off-canvas.css')}}" rel="stylesheet" type="text/css">
        <!-- linea-font css -->
        <!-- magnific popup css -->
        <link href="{{ asset('home_file/assets/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
        <!-- Main Menu css -->
        <link href="{{ asset('home_file/assets/css/rsmenu-main.css')}}" rel="stylesheet">
        <!-- spacing css -->
        <link href="{{ asset('home_file/assets/css/rs-spacing.css')}}" rel="stylesheet" type="text/css">
        <!-- style css -->
        <!-- <link href="style.css" rel="stylesheet" type="text/css"> -->
        <link href="{{ asset('home_file/assets/css/style-rtl.css') }}" rel="stylesheet" type="text/css">
        <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link href="{{ asset('home_file/assets/css/responsive.css') }}" rel="stylesheet" type="text/css">

        <!-- sweetalert2 css -->
        <link href="{{ asset('home_file/plugins/sweetalert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">

        <style type="text/css" media="screen">
            select { text-align-last: right; }
            option { direction: rtl; }

            .bg-hidden-bits {
                background-color: black;
                /*background-color: #0e1c29;*/
                color: #fff;
            }

            .bg-hidden-bits-o {
                background-color: #18191A;
                color: #fff;   
            }

            .bits {
                color: #0e1c29;
            }

            .bits-o {
                color: #2a4f71;
            }


            #custom-nav {
                -webkit-box-shadow: 3px 2px 3px #fff;
                -moz-box-shadow:    3px 2px 3px #fff;
                box-shadow:         3px 2px 3px #Fff;
                z-index:999;
            }



            body {
                margin: 0;
                padding: 0
            }

            .wrapper {
                position: absolute;
                width: 100%;
                height: 100%;
                overflow: hidden;
                /*background: linear-gradient(90deg, rgba(2, 0, .6, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);*/
            }
            .box div {
                color: #fff;
                position: absolute;
                width: 60px;
                height: 60px;
                background-color: transparent;
                /*border-left: 6px solid rgba(255, 255, 255, 0.8);*/
                animation: animation-name 5s linear infinite;
            }
            .box div:nth-child(1) {
                top: 20%;
                left: 42%;
                animation: alternate 10s linear infinite;
                animation: animation-name 2s linear infinite;
            }
            .box div:nth-child(2) {
                top: 70%;
                left: 52%;
                animation: alternate 9s linear infinite;
                animation: animation-name 2s linear infinite;
            }
            .box div:nth-child(3) {
                top: 17%;
                left: 6%;
                animation: alternate 8s linear infinite;
                animation: animation-name 2s linear infinite;
            }
            .box div:nth-child(4) {
                top: 20%;
                left: 60%;
                animation: alternate 10s linear infinite;
                animation: animation-name 2s linear infinite;
            }
            .box div:nth-child(5) {
                top: 67%;
                left: 10%;
                animation: alternate 6s linear infinite;
                animation: animation-name 2s linear infinite;
            }
            .box div:nth-child(6) {
                top: 80%;
                left: 70%;
                animation: alternate 12s linear infinite;
                animation: animation-name 2s linear infinite;
            }
            .box div:nth-child(7) {
                top: 60%;
                left: 80%;
                animation: alternate 15s linear infinite;
                animation: animation-name 2s linear infinite;
            }
            .box div:nth-child(8) {
                top: 32%;
                left: 25%;
                animation: alternate 16s linear infinite;
                animation: animation-name 2s linear infinite;
            }
            .box div:nth-child(9) {
                top: 90%;
                left: 25%;
                animation: alternate 9s linear infinite;
                animation: animation-name 2s linear infinite;
            }
            .box div:nth-child(10) {
                top: 20%;
                left: 80%;
                animation: alternate 5s linear infinite;
                animation: animation-name 2s linear infinite;
            }

            .box div:nth-child(11) {
                top: 20%;
                left: 80%;
                animation: alternate 5s linear infinite;
                animation: animation-name 5s linear infinite;
            }

            .box div:nth-child(12) {
                top: 10%;
                left: 40%;
                animation: alternate 5s linear infinite;
                animation: animation-name 4s linear infinite;
            }

            .box div:nth-child(13) {
                top: 220%;
                left: 40%;
                animation: alternate 5s linear infinite;
                animation: animation-name 3s linear infinite;
            }

            .box div:nth-child(14) {
                top: 10%;
                left: 80%;
                animation: alternate 5s linear infinite;
                animation: animation-name 9s linear infinite;
            }

            .box div:nth-child(15) {
                top: 60%;
                left: 90%;
                animation: alternate 5s linear infinite;
                animation: animation-name 6s linear infinite;
            }

            .box div:nth-child(16) {
                top: 50%;
                left: 80%;
                animation: alternate 5s linear infinite;
                animation: animation-name 3s linear infinite;
            }

            .box div:nth-child(17) {
                top: 40%;
                left: 30%;
                animation: alternate 5s linear infinite;
                animation: animation-name 4s linear infinite;
            }

            .box div:nth-child(18) {
                top: 50%;
                left: 60%;
                animation: alternate 5s linear infinite;
                animation: animation-name 3s linear infinite;
            }

            .box div:nth-child(19) {
                top: 80%;
                left: 40%;
                animation: alternate 5s linear infinite;
                animation: animation-name 5s linear infinite;
            }
            .box div:nth-child(20) {
                top: 90%;
                left: 40%;
                animation: alternate 5s linear infinite;
                animation: animation-name 3s linear infinite;
            }

            .element {
             transform: translateX(200px);
             
            }

            @keyframes animation-name {

                0% {
                    transform: scale(0) translateY(0) rotate(0);
                    opacity: 1,
                }
                100% {
                    transform: scale(2.3) translateY(-290px) rotate(0deg);
                    opacity: 0,
                }
            }

            
        </style>
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/droid-arabic-kufi" type="text/css"/>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200;900&display=swap" rel="stylesheet"> -->
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet"> -->

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="home-style6">
        <!--Preloader area start here-->
        <div class="loader" id="loader">
            <div class="loader-container">
            </div>
        </div>
        <!--Preloader area End here-->
        <!--Full width header Start-->
        @include('layouts.home.include._header')
        <!--Full width header End-->
        <!-- Main content Start -->
        <div class="main-content">

                    <!-- Main content Start -->

        <div class="main-content bg-hidden-bits-o">
            <!-- Banner Section Start -->
            
            @yield('content')
           
            <!-- Newsletter section end -->

            </div>
        <!-- Main content End --> 
        </div>
        <!-- Main content End -->
        <!-- Footer Start -->
        @include('layouts.home.include._footer')
        <!-- Footer End -->
        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up">
            </i>
        </div>
        <!-- End scrollUp  -->
        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                <span class="flaticon-cross">
                </span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                                </input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->
        <!-- modernizr js -->
        <script src="{{ asset('home_file/assets/js/modernizr-2.8.3.min.js') }}">
        </script>
        <!-- jquery latest version -->
        <script src="{{ asset('home_file/assets/js/jquery.min.js') }}">
        </script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('home_file/assets/js/bootstrap.min.js') }}">
        </script>
        <!-- Menu js -->
        <script src="{{ asset('home_file/assets/js/rsmenu-main.js') }}">
        </script>
        <!-- op nav js -->
        <script src="{{ asset('home_file/assets/js/jquery.nav.js') }}">
        </script>
        <!-- owl.carousel js -->
        <script src="{{ asset('home_file/assets/js/owl.carousel.min.js') }}">
        </script>
        <!-- Slick js -->
        <script src="{{ asset('home_file/assets/js/slick.min.js') }}">
        </script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('home_file/assets/js/isotope.pkgd.min.js') }}">
        </script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ asset('home_file/assets/js/imagesloaded.pkgd.min.js') }}">
        </script>
        <!-- wow js -->
        <script src="{{ asset('home_file/assets/js/wow.min.js') }}">
        </script>
        <!-- Skill bar js -->
        <script src="{{ asset('home_file/assets/js/skill.bars.jquery.js') }}">
        </script>
        <script src="{{ asset('home_file/assets/js/jquery.counterup.min.js') }}">
        </script>
        <!-- counter top js -->
        <script src="{{ asset('home_file/assets/js/waypoints.min.js') }}">
        </script>
        <!-- video js -->
        <script src="{{ asset('home_file/assets/js/jquery.mb.YTPlayer.min.js') }}">
        </script>
        <!-- magnific popup js -->
        <script src="{{ asset('home_file/assets/js/jquery.magnific-popup.min.js') }}">
        </script>
        <!-- tilt js -->
        <script src="{{ asset('home_file/assets/js/tilt.jquery.min.js') }}">
        </script>
        <!-- plugins js -->
        <script src="{{ asset('home_file/assets/js/plugins.js') }}">
        </script>
        <!-- contact form js -->
        <script src="{{ asset('home_file/assets/js/contact.form.js') }}">
        </script>
        <!-- main js -->
        <script src="{{ asset('home_file/assets/js/main.js') }}"></script>

        {{-- sweetalert2 js --}}
        <script src="{{ asset('home_file/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>

        <script>
            $(document).ready(function () {

            $("a").click(function () {
                var e = $(this).attr("href");
                $("html, body").animate({scrollTop: $(e).offset().top}, 1e3);
            });//cluck add class


        });//document ready
        </script>

        @stack('scripts')
    </body>
    <!-- Mirrored from keenitsolutions.com/products/html/educavo/index7.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 07:37:26 GMT -->
</html>