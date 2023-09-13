<!-- Start of footer section
    ============================================= -->
    <footer>
        <section id="footer-area" class="footer-area-section">
            <div class="container">
                <div class="footer-content pb10">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <div class="footer-logo mb35">
                                    <img src="{{url('assets/images/logo.png')}}" alt="">
                                </div>
                                <div class="footer-about-text">
                                    {!! get_theme_setting('footer_description') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <div class="footer-menu ul-li-block">
                                    <h2 class="widget-title">Important Links</h2>
                                    <ul>
                                        @foreach ($studentMenu as $key => $menuItem)
                                        <li><a target="_blank" href="{{ $key }}"><i class="fas fa-caret-right"></i>{{ $menuItem }}</a></li>
                                        @endforeach
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-menu ul-li-block">
                                <h2 class="widget-title">Company Info</h2>
                                <ul>
                                        @foreach ($footerMenu as $key => $menuItem)
                                        <li><a target="_blank" href="{{ url($key) }}"><i class="fas fa-caret-right"></i>{{ $menuItem }}</a></li>
                                        @endforeach
                                       
                                    </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-social ul-li">
                                <h2 class="widget-title">Social Network</h2>
                                <ul>
                                    <li><a href="{{ get_theme_setting('facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ get_theme_setting('twitter') }}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ get_theme_setting('linkedin') }}"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="{{ get_theme_setting('youtube') }}"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- /footer-widget-content -->
                <!-- <div class="footer-social-subscribe mb65">
                    <div class="row">                        
                        <div class="col-md-9">
                            <div class="subscribe-form">
                                <h2 class="widget-title">Subscribe Newsletter</h2>

                                <div class="subs-form relative-position">
                                    <form action="#" method="post">
                                        <input class="course" name="course" type="email" placeholder="Email Address.">
                                        <div class="nws-button text-center  gradient-bg text-uppercase">
                                            <button type="submit" value="Submit">Subscribe now</button> 
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="copy-right-menu">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copy-right-text">
                                <p>{{ get_theme_setting('footer_about') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="copy-right-menu-item float-right ul-li">
                                <ul>
                                    <li><a href="{{ url('privacy-policy') }}">Privacy & Policy</a></li>
                                    <li><a href="{{ url('terms-conditions') }}">Term Of Service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
<!-- End of footer section
    ============================================= -->
    <div id="feedback">
        <a href="javascript:void(0)" onclick="lead_capture_form_btn(1,'')" >Enquire Now</a>
    </div>
    @if(!check_device('desktop'))
    <div class="sticky-footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-6">
                    <a class="sticky-btn" href="tel:{{get_theme_setting('mobile')}}"><i class="fas fa-phone"></i> Call Now</a>
                </div>
                <div class="col-6">
                    <a class="sticky-btn" href="https://api.whatsapp.com/send?phone={{get_theme_setting('whatsapp')}}"><i class="fab fa-whatsapp"></i> Live Chat</a>
                </div>
            </div>  
            
        </div>
    </div>
    @endif