    <footer class="rs-footer style6" id="Contact">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 footer-widget md-mb-50 sm-mb-30">
                            <h4 class="widget-title">
                                الاقســــــــــــأم
                            </h4>
                            <div dir="RTL">
                                <ul class="site-map">
                                    @foreach ($categorys as $category)

                                    <li style="list-style: none;">
                                        <a href="{{ route('Show_Course',$category->id) }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>

                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 footer-widget">
                            <h4 class="widget-title">
                                عنوان
                            </h4>
                            <ul class="address-widget mx-3">
                                <li>
                                    <i class="flaticon-location">
                                    </i>
                                    <div class="desc">
                                        {{ setting('map_location') }}
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-call">
                                    </i>
                                    <div class="desc">
                                        <a href="tel:(123)-456-7890">
                                            {{ setting('number_phone_one') }}
                                        </a>
                                        ,
                                        <a href="tel:(123)-456-7890">
                                            {{ setting('number_phone_two') }}
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email">
                                    </i>
                                    <div class="desc">
                                        <a href="{{ setting('email') }}">
                                            {{ setting('email') }}
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="main-part">
                        <div class="row y-middle">
                            <div class="col-lg-4 md-mb-20">
                                <div class="footer-logo md-text-center">
                                    <a href="/">
                                        <img alt="" src="{{ asset('home_file/assets/images/Hidden-bits-logo.png') }}"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 md-mb-20">
                                <div class="copyright text-center md-text-left">
                                </div>
                            </div>
                            <div class="col-lg-4 text-right md-text-left">
                                <ul class="footer-social">
                                    <li>
                                        <a href="{{ setting('facebbok_link') }}">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ setting('twitter_link') }}">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ setting('instagram_link') }}">
                                            <i class="fa fa-instagram">
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ setting('whatsapp_link') }}">
                                            <i class="fa fa-whatsapp">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>