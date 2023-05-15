<!-- The Modal -->
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
                <form id="lead_capture_form" class="contact_form lead_capture_form" action="{{ url('capture-lead') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="lead_steps step1 active" > 
                        @include('common.leadCaptureFormField')
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
                </form>  
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
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
                <form id="lead_capture_form" class="contact_form lead_capture_form" action="{{ url('capture-lead') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="lead_steps step1 active" > 
                        <div class="contact-info">
                            <input class="name" name="name" type="text" placeholder="Enter Your Name" autocomplete="off" required>
                        </div>
                        <div class="contact-info">
                            <input class="email" name="email" type="email" placeholder="Enter Your Email" autocomplete="off" required>
                        </div>
                        <div class="contact-info">
                            <input class="mobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" required>
                        </div>
                        <div class="register-form-area">
                            <select class="state" name="state" required>
                                @foreach(getStates() as $value)
                                    <option value="{{$value->name}}" data-id="{{$value->id}}"> {{$value->name}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="register-form-area">
                            <select class="city_id" name="city" required>
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="contact-info">
                            <input type="text" class="occupation" name="occupation" placeholder="Enter Your Occupation" autocomplete="off" required>
                        </div>
                        <div class="register-form-area">
                            <select class="invest" name="invest" required>
                                <option value="" disabled="" hidden="" selected="">Are you ready to Invest  15-20 lakh ?</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
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