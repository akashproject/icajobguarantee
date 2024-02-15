<!-- Classroom Form -->

<div class="modal fade" id="event-lead-generation-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header backgroud-style">
                <div class="gradient-bg"></div>
                <div class="popup-logo">
                    <img src="{{ url('assets/img/logo/p-logo.jpg')}}" alt="">
                </div>
                <div class="popup-close">
                    <span> X </span>
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
                                    <p class="message"> <span class="message"> Enter the OTP you receive at </span> +91 XXXXXX<span class="lastDigit"></span> <span class="changeGivenNumber"> (Change) </span> </p>
                                    <p class="response_status" style="color: #000;"></p>
                                </div> 
                                <div class="contact-info">
                                    <input class="verify_otp" name="verify_otp" type="text" placeholder="Enter One Time Password" autocomplete="off">
                                </div>
                                <div class="otp-content">
                                    <p class="message"> Did not receive OTP?
                                        <span class="countdown_label"> Resend in <span class="countdown" >59</span> Sec </span>
                                        <a class="resendOtp display-none" href="javascript:void(0)"> Resend OTP </a>
                                    </p>
                                </div>
                            </div>
                            <div class="nws-button text-center white text-capitalize">
                                <button class="submit_classroom_lead_generation_form form_step_1" type="submit" disabled> Submit <i class="fas fa-arrow-right" > </i> </button> 
                                <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                            </div>
                            <!-- Mendetory Fields -->
                            <input type="hidden" class="formFieldOtpResponse" value="">
                            <input type="hidden" name="utm_campaign" value="{{ getUtmCampaign(isset($contentMain->utm_campaign)?$contentMain->utm_campaign:null) }}">
                            <input type="hidden" name="utm_source" value="{{ getUtmSource(isset($contentMain->utm_source)?$contentMain->utm_source:null) }}">
                            <input type="hidden" name="LeadType" value="{{ getCommunicationMedium(isset($contentMain->lead_type)?$contentMain->lead_type:null) }}" >
                            <input type="hidden" name="utm_term" value="{{ (isset($_GET['utm_term']))?$_GET['utm_term']:'' }}" >  
                            <input type="hidden" name="utm_device" value="{{ (isset($_GET['utm_device']))?$_GET['utm_device']:'' }}" >  
                            <input type="hidden" name="utm_adgroup" value="{{(isset($_GET['utm_adgroup']))?$_GET['utm_adgroup']:''}}" >  
                            <input type="hidden" name="utm_content" value="{{(isset($_GET['utm_content']))?$_GET['utm_content']:''}}" >   
                            <input type="hidden" name="store_area" value="{{ isset($contentMain->store_area)?$contentMain->store_area:'1' }}" >
                            <input type="hidden" name="assessment" value="{{ isset($enableAssessment)?$enableAssessment:'' }}" >
                            <input type="hidden" name="ref_code" value="{{ (isset($_GET['ref']))?$_GET['ref']:'' }}" >  
                            <input type="hidden" name="source_url" value="{{ url()->current() }}" >
                            @honeypot
                            {{ csrf_field() }}            
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>