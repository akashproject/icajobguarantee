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
                            @include('common.leadCaptureFormOtpField')                           
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
                        <div class="form_process" >
                            <div class="lead_steps step1 active" > 
                                @include('common.franchiseLeadCaptureFormField')
                            </div>
                            @include('common.leadCaptureFormOtpField')
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
                <div class="popup_banner_form_wrapeer" > 
                    <form id="apply_job_application_form" class="lead_capture_form contact_form" action="{{ url('job-application-form') }}" method="POST" enctype="multipart/form-data">
                        <div class="form_process" >
                            <div class="lead_steps step1 active" > 
                                @include('common.applyJobFormField')
                            </div>
                            <div class="nws-button text-center white text-capitalize">
                                <button class="" type="submit">Apply Now <i class="fas fa-arrow-right" > </i> </button> 
                                <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                            </div>
                        </div>
                        <div class="form_success" style="display:none">
                            <div class="form-success-content">
                                <span class="success-icon"> <i class="fas fa-check"></i> </span>
                                <h4> Thank You! Your Application Submitted Successfully </h4>
                            </div>
                        </div>
                    </form>  
                </div> 
            </div>
        </div>
    </div>
</div>