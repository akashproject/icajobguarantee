<!-- Classroom Form -->
<div class="modal fade" id="lead-generation-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header backgroud-style">
                <div class="gradient-bg"></div>
                <div class="popup-logo">
                    <img src="{{ url('assets/img/logo/p-logo.jpg')}}" alt="">
                </div>
                <div class="popup-text text-center">
                    <h2> <span>Get</span> In Touch. </h2>
                    <p>Enter your details to start the <span>Application</span></p>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body">    
                <div class="popup_banner_form_wrapeer" > 
                    <form id="eduvarsity_popup_lead_capture_form" class="contact_form lead_form" action="{{ url('eduversity-capture-lead') }}" method="POST" enctype="multipart/form-data">
                        <div class="form_process" >
                            <div class="lead_steps step1 active" > 
                                @include('common.leadCaptureFormField')
                                <div class="form-group disclaimer text-left">
                                    <p style="margin:0">
                                        <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fa fa-whatsapp" style="color: green;"></i> whatsapp. 
                                    </p>
                                    <p>
                                        <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS. 
                                    </p>
                                </div>
                            </div>
                            @include('common.leadCaptureFormOtpField')                           
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="affiliate-login-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header backgroud-style">
                <div class="gradient-bg"></div>
                <div class="popup-logo">
                    <img src="{{ url('assets/img/logo/p-logo.jpg')}}" alt="">
                </div>
                <div class="popup-text text-center">
                    <h2> <span>Login</span> </h2>
                    <p>Enter your details to login your <span>Portal</span></p>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body">    
                <div class="popup_banner_form_wrapeer" > 
                    <form id="affiliate-login" class="contact_form lead_form" action="{{ url('affiliate-login') }}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                            <div class="form_process">
                                <div class="contact-info formFieldMobile">
                                    <input id="formFieldMobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" min="6000000000" max="9999999999" required>
                                </div>
                            </div>
                            <div class="lead_steps step2">
                                <div class="otp-content">
                                    <h4 class="otp-heading"> OTP Verification </h4>                                   
                                    <p class="message"> <span class="message"> Enter the OTP you receive at </span> +91 XXXXXX<span class="lastDigit"></span> <span class="changeGivenNumber"> (Change) </span> </p>
                                    <p class="response_status" style="color: #000;"></p>
                                </div> 
                                <div class="contact-info">
                                    <input class="verify_otp" name="verify_otp" type="text" placeholder="Enter One Time Password" autocomplete="off">
                                </div>
                            </div>
                            <div class="nws-button text-center white text-capitalize">
                                <button class="submit_affiliate_login_form form_step_1" type="submit">Sign in <i class="fas fa-arrow-right"> </i> </button> 
                                <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                            </div>                 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
