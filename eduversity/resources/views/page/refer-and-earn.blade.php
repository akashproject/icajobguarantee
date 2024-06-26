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
                                <img src="{{ url('assets/images/affiliate-marketing.png') }}" >
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="affiliate-registraion-form ad_banner_form_wrapeer" >
                                <div class="registration-form-header mb20" >
                                    <h5> Enter Personal Details </h5>
                                </div>
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <div class="register-form-area" >
                                    <form id="affliate-registration" method="post" action="{{url('affliate-registration')}}" >
                                        <div class="form_process">
                                            <div class="lead_steps step-1 active" >
                                                @csrf
                                                @honeypot
                                                <div class="contact-info formFieldName">
                                                    <input id="formFieldName" name="name" type="text" placeholder="Enter Your Name" autocomplete="off" required="">
                                                </div>
                                                <div class="contact-info formFieldName">
                                                    <input id="formFieldMobile" name="mobile" type="number" placeholder="Enter Your Mobile Number" min="6000000000" max="9999999999" autocomplete="off" required="">
                                                </div>
                                                <div class="contact-info formFieldName">
                                                    <input id="formFieldEmail" name="email" type="email" placeholder="Enter Your Email Address" autocomplete="off" required="">
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
                                                <button class="submit_affliate_registration_form form_step_1" type="submit" disabled>Apply Now <i class="fas fa-arrow-right" > </i> </button> 
                                                <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                            </div>
                                            <input type="hidden" class="formFieldOtpResponse" value="">
                                        </div>
                                    </form>
                                    <h6 class="mt-2"> Already Registerd? <a href="javascript:void(0)" data-toggle="modal" data-target="#affiliate-login-form" > Login </a> </h6>
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
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection