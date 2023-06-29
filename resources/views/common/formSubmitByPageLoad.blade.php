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
                
            </div>
        </div>
    </div>
</div>