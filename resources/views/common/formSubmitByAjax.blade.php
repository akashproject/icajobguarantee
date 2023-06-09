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
                    <form id="classroom_popup_lead_capture_form" class="contact_form lead_form" action="{{ url('capture-lead') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <div class="lead_steps step2">
                                <div class="otp-content">
                                    <h4 class="otp-heading"> OTP Verification </h4>                                   
                                    <p class="message"> <span class="message"> Enter the OTP you recive at </span> +91 XXXXXX<span class="lastDigit"></span> <a href="javacript:void(0)" class="gotoStep1"> (Change) </a> </p>
                                    <p class="response_status" style="color: #000;"></p>
                                </div> 
                                <div class="contact-info">
                                    <input class="verify_otp" name="verify_otp" type="text" placeholder="Enter One Time Password" autocomplete="off">
                                </div>
                            </div>
                            <div class="nws-button text-center white text-capitalize">
                                <button class="submit_classroom_lead_generation_form form_step_1" type="submit" disabled>Apply Now <i class="fas fa-arrow-right" > </i> </button> 
                                <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                            </div>
                        </div>
                        <div class="form_success" style="display:none">
                            <div class="form-success-content">
                                <span class="success-icon"> <i class="fas fa-check"></i> </span>
                                <h4> Thank You! Your Application Submitted Successfully </h4>
                                <p> <strong> Brochure </strong> has been sent your email address </p>
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Franchise Form -->
<div class="modal fade" id="franchise-lead-generation-form" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <form id="franchise_lead_capture_form" class="lead_capture_form contact_form" action="{{ url('franchise-capture-lead') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form_process" >
                            <div class="lead_steps step1 active" > 
                                @include('common.franchiseLeadCaptureFormField')
                            </div>
                            <div class="lead_steps step2">
                                <div class="otp-content">
                                    <h4 class="otp-heading"> OTP Verification </h4>                                   
                                    <p class="message"> <span class="message"> Enter the OTP you recive at </span> +91 XXXXXX<span class="lastDigit"></span> <a href="javacript:void(0)" class="gotoStep1"> (Change) </a> </p>
                                    <p class="response_status" style="color: #000;"></p>
                                </div> 
                                <div class="contact-info">
                                    <input class="verify_otp" name="verify_otp" type="text" placeholder="Enter One Time Password" autocomplete="off">
                                </div>
                            </div>
                            <div class="nws-button text-center white text-capitalize">
                                <button class="submit_franchise_lead_generation_form form_step_1" type="submit" disabled>Apply Now <i class="fas fa-arrow-right" > </i> </button> 
                                <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                            </div>
                        </div>
                        <div class="form_success" style="display:none">
                            <div class="form-success-content">
                                <span class="success-icon"> <i class="fas fa-check"></i> </span>
                                <h4> Thank You! Your Application Submitted Successfully </h4>
                                @if(!isset($contentMain->sendBrochure))
                                <p> <strong> Brochure </strong> has been sent your email address </p>
                                @endif
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="job-application-form" tabindex="-1" role="dialog" aria-hidden="true">
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
                <form id="lead_capture_form" class="contact_form lead_capture_form" action="{{ url('capture-lead') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="lead_steps step1 active" > 
                        @include('common.applyJobFormField')
                        <div class="nws-button text-center white text-capitalize">
                            <button class="form_step_1" type="submit">Next</button> 
                        </div>
                    </div>
                    <div class="lead_steps step2">
                        <div class="otp-content">
                            <h4 class="otp-heading"> OTP Verification </h4>                                   
                            <p class="message"> <span class="message"> Enter the OTP you recive at </span> +91 XXXXXX<span class="lastDigit"></span> <a href="javacript:void(0)" class="gotoStep1"> (Change) </a> </p>
                            <p class="response_status" style="color: #000;"></p>
                        </div> 
                        <div class="contact-info">
                            <input class="verify_otp" name="verify_otp" type="text" placeholder="Enter One Time Password" autocomplete="off" required>
                        </div>
                        <div class="nws-button text-center white text-capitalize">
                            <button class="apply_now" type="button">Apply Now</button> 
                        </div>
                    </div>
                    <div class="lead_steps step3">
                        <div class="form-success-content">
                            <span class="success-icon"> <i class="fas fa-check"></i> </span>
                            <h4> Thank You! Your Application Submitted Successfully </h4>
                            <p> <strong> Brochure </strong> has been sent your email address </p>
                        </div>
                    </div>
                    <input type="hidden" name="course_id" value="">
                    <input type="hidden" name="responsed_otp" class="responsed_otp" value="">
                    <input type="hidden" name="" class="is_enable_otp" value="1">
                    <input type="hidden" name="utm_campaign" class="" value="{{ isset($contentMain->utm_campaign)?$contentMain->utm_campaign:'' }}">
                    <input type="hidden" name="utm_source" class="utm_source" value="{{ isset($contentMain->utm_source)?$contentMain->utm_source:'' }}">
                </form>  
            </div>
        </div>
    </div>
</div>