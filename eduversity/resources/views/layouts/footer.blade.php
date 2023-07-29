<!-- Start of footer section
    ============================================= -->
    <footer>
        <section id="footer-area" class="footer-area-section">
            <div class="container">
                <div class="footer-content pb10">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-widget">
                                <div class="footer-logo mb35">
                                    <img src="{{url('assets/images/logo.png')}}" alt="">
                                </div>
                                <div class="footer-about-text">
                                    The ICA Eduversity model is a first-of-its-kind project in India, with the corporation actively collaborating with industry and institutions of higher learning.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-widget">
                                <div class="footer-menu ul-li-block">
                                    <h2 class="widget-title">Useful Links</h2>
                                    <ul>
                                        <li><a target="_blank" href="/universities"><i class="fas fa-caret-right"></i> Universities </a></li>
                                        <li><a target="_blank" href="/courses"><i class="fas fa-caret-right"></i> Courses </a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="footer-social ul-li">
                                <h2 class="widget-title">Social Network</h2>
                                <ul>
                                    <li><a href="https://www.facebook.com/icacollegecourses"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/ica_universityalliance/"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                       
                    </div>
                </div> 

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
    @if(!check_device('desktop'))
    <div class="sticky-footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-6">
                    <a class="sticky-btn" href=""><i class="fas fa-phone"></i> Call Now</a>
                </div>
                <div class="col-6">
                    <a class="sticky-btn" href=""><i class="fab fa-whatsapp"></i> Live Chat</a>
                </div>
            </div>  
            
        </div>
    </div>
    @endif