@extends('layouts.main')
    @section('content')

    <!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="inner-banner relative-position">
			<div class="blakish-overlay"></div>
			<div class="container">
                <div class="dashboard-plate" >
                    <div class="row" >
                        <div class="col-md-6" >
                            <h3> Earn Commission by Recommending ICA Affiliate Program! </h3>
                            <p>Refer visitors to our Affiliate Program and earn commission easily and seamlessly! Make the most of your referrals through our link building tools.Our program gives you the opportunity to become part of a community that is dedicated to making India more employable.</p>
                            <div class="text-center" >
                                <img src="https://dummyimage.com/300" >
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="highlighted-content-wrapper text-center">
                                <div class="ad_banner_form_wrapeer" >
                                    <div class="register-fomr-title text-center">
                                        <h3 class="bold-font"><span>Know your</span> Career Opportunity.</h3>
                                    </div>
                                    <div class="register-form-area text-left" >
                                        <form id="banner_lead_capture_form" class="lead_form" action="{{ url('capture-lead') }}" method="POST" enctype="multipart/form-data">
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
                    <div class="row" >
                        <div class="section-title-2 headline text-left sponsor-section">
                            <h2>How to earn ?</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="university-page-tab">			
                                <div class="service-slide_4">
                                    <div class="service-text-icon">
                                        <div class="service-icon float-left">
                                            <i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
                                        </div>
                                        <div class="service-text">
                                            <h3 class="bold-font"> <span class="service_counter"> 1 </span> Signup </h3>
                                            <p>The Eduversity Affiliate Program is the leading way for creators, publishers, and bloggers to make money from their website.</p>
                                        </div>
                                    </div>
                                    <div class="service-text-icon">
                                        <div class="service-icon float-left">
                                            <i class="text-gradiant flaticon-clipboard-with-pencil"></i>
                                        </div>
                                        <div class="service-text">
                                            <h3 class="bold-font"><span class="service_counter"> 2 </span> Recommend</h3>
                                            <p>With our customized linking tools, you can seamlessly share millions of products with your audience, and start earning commissions immediately. </p>
                                        </div>
                                    </div>
                                    <div class="service-text-icon">
                                        <div class="service-icon float-left">
                                            <i class="text-gradiant flaticon-list"></i>
                                        </div>
                                        <div class="service-text">
                                            <h3 class="bold-font"><span class="service_counter"> 3 </span> Earn</h3>
                                            <p>Plus, our team provides personalized support to ensure you get the most out of your affiliate marketing efforts. </p>
                                        </div>
                                    </div>
                                </div>		
                            </div>
                        </div>
                    </div>
                </div>  
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

    @endsection
@section('script')
@endsection