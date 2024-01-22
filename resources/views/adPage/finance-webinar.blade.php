@extends('layouts.ad-main')

@section('content')

<!-- Start of Header section

   ============================================= -->
<style >
section#footer-area {
    display: none;
}
.foobar {
    position: fixed;
    bottom: 0;
    width: 100%;
}
.sticky-footer {
   display: none;
}
.webinar-list li {
   margin: 10px 0;
}

.webinar-list li {
    margin: 10px 0;
    list-style: disc;
    font-size: 18px;
}
.date-meta {
    font-size: 18px;
}
.date-meta span {
   padding: 4px 0 !important;
   display: block;
}
.blink {
   animation: blinker 1s linear infinite;
   color:red;
}

form#banner_lead_capture_form p {
    color: #fff;
} 
form#banner_lead_capture_form h4 {
    color: #fff;
}

@keyframes blinker {
   50% {
         opacity: 0;
   }
}
</style>
<header>

   <div id="main-menu"  class="main-menu-container header-style-2">

      <div class="header-top">

         <div class="container-fluid">

            <div class="row">

               <div class="col-md-7">

               </div>

               <div class="col-md-5 top-right-bar">

                  <div class="header-top-bar ul-li">

                     <ul>

                        <li><a href="mailto:{{get_theme_setting('email')}}" ><i class="fas fa-envelope"></i> {{get_theme_setting('email')}}</a></li>

                        <li><a href="tel:{{get_theme_setting('mobile')}}" ><i class="fas fa-phone-square"></i> {{get_theme_setting('mobile')}}</a></li>

                     </ul>

                  </div>

               </div>

            </div>

         </div>

      </div>

      <div class="main-menu">

         <div class="container">

            <div class="navbar-default">

               <div class="navbar-header float-left">

                  <a class="navbar-brand text-uppercase" href="javascript:void(0)"><img src="{{ url('assets/images/logo.png') }}" alt="ICA Edu Skills"></a>

               </div>

               <!-- /.navbar-header -->						

               <!-- Collect the nav links, forms, and other content for toggling -->

               <nav class="navbar-menu float-right">

                  <div class="nav-menu ul-li">

                     <ul>

                        
                     </ul>

                  </div>

               </nav>

               

            </div>

         </div>

      </div>

   </div>

</header>
<!-- Start of Header section
{{ url('assets/images/trophy.png') }}
   ============================================= -->
<section class="header-devider"></section>
<section class="header-margin"></section>
<section id="breadcrumb" class="relative-position backgroud-style">
   <div class="container-fluid bg-white py-5 webiner-content" style="background-image: url('/assets/img/webiner-strip.webp');box-shadow: -1px 2px 2px 0px #ccc;border-top: 1px solid #ccc;background-size: cover;background-repeat: no-repeat;">
      <div class="container">
         <div class="row">
            <div class="col-12 text-center" style="color: #fff;">
               <h1> <strong> Start Your Career in the Stock Market </strong> </h1>
               <h4> Master the Art of Investing and Trading in the Stock Market to Earn 1 Lakh Per Month </h4>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      
      <div class="row">

         <div class="col-md-7">

            <div style="padding:20px;">

               <div class="ad-banner-title" style="color: #333;">
                    <!-- <h2 class="text-center">ICA's Yuva Pratibha Scholarship</h2> -->
                    <div class="mt-2">
                     <h4> Explore the Key Pillars of Success in the Stock Market </h4>
                     </div>
                     <div class="about-content-text">
								<p class="">Presenting a webinar designed to help everyone—<strong>investors, traders, professionals, students, homemakers</strong>, and more—navigate the stock market. We cover everything from investment tips and market trends to choosing the right financial products and long-term investment ideas. It's useful info for all types of investors, and it's free!</p>
								<div class="about-list mb65 ul-li-block ">
									<ul>
										<li><strong> NCFM Certification </strong></li>
										<li><strong> Technical Analysis </strong></li>
										<li><strong> Fundamental Analysis </strong></li>
										<li><strong> Derivatives – Future Options </strong></li>
										<li><strong> Currency and Commodities </strong></li>
									</ul>
								</div>
								
							</div>
               </div>


            </div>

         </div>

         <div class="col-md-5">

            <div class="highlighted-content-wrapper text-center">

               <div class="ad_banner_form_wrapeer" style="background:#0B151B!important;">

                  <div class="register-fomr-title text-center">
                     <p class="bold-font text-white" style="font-size: 18px!important;">Register FREE Webinar and start the Financial Revolution</p>

                  </div>

                  <div class="register-form-area text-left" >

                     <form id="banner_lead_capture_form" class="lead_form webinar-form" action="{{ url('weabiner-capture-lead') }}" method="POST" enctype="multipart/form-data">

                        <div class="form_process" >

                           <div class="lead_steps step1 active">

                              <div class="contact-info formFieldName">
                                 <input id="formFieldName" name="name" type="text" placeholder="Enter Your Name" autocomplete="off" required>
                              </div>

                              <div class="contact-info formFieldEmail">
                                 <input id="formFieldEmail" name="email" type="email" placeholder="Enter Your Email" autocomplete="off" required>
                              </div>

                              <div class="contact-info formFieldMobile">
                                 <input id="formFieldMobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" min="6000000000" max="9999999999" required>
                              </div>

                              <div class="contact-info formFieldOccupation">
                                 <select id="formFieldOccupation" name="occupation">
												<option value="Select Occupation" selected="">Select Occupation </option>
												<option value="Student">Student</option>
												<option value="Working Professional">Working Professional</option>
												<option value="Investor">Investor</option>
												<option value="House Wife">House Wife</option>
												<option value="Others">Others</option>
											</select>
                              </div>

                              <div class="form-group disclaimer text-left">
                                 <p class="text-white" style="margin:0">
                                    <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fa fa-whatsapp" style="color: green;"></i> whatsapp. 
                                 </p>

                                 <p class="text-white">
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

   </div>

</section>
<section class="foobar bg-white">
   <div class="container-fluid bg-white py-3" style="box-shadow: -1px 2px 2px 0px #ccc;border-top: 1px solid #ccc;">
      <div class="container">
         <div class="row">
            <div class="col-md-6 text-center" style="color: #333;">
               <h1><strong> Register <span class="blink"> FREE </span> Webinar </strong> </h1>
            </div>
            <div class="col-md-6" style="color: #333;">
               <div class="date-meta">
						<span class="mr-5"><strong><i class="fas fa-calendar-alt"></i> 23 Jan, 2024 at 04:00 PM </strong></span>
						<span class="mr-5"><strong><i class="fas fa-user"></i> Organized By : ICA Edu Skills </strong></span>															
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection