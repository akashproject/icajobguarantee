<!-- Start of footer section
    ============================================= -->
    <footer>
        <section id="footer-area" class="footer-area-section">
            <div class="container">
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
                                    <li><a href="#">License</a></li>
                                    <li><a href="#">Privacy & Policy</a></li>
                                    <li><a href="#">Term Of Service</a></li>
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