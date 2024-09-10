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
   .webtab {
      width: 46% !important; 
      background: linear-gradient(to right, #616dfd 0%, #393185 51%, #616dfd 100%) !important;
      padding: 9px !important;
      color: #fff !important;
      text-align: center !important;
      overflow: hidden;
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
   <div class="container-fluid bg-white py-5 webiner-content" style="background-image: url('/public/upload/2023-05-15/inner-banners.jpg');box-shadow: -1px 2px 2px 0px #ccc;border-top: 1px solid #ccc;background-size: cover;background-repeat: no-repeat;">
      <div class="container">
         <div class="row">
            <div class="col-12 text-center" style="color: #fff;">
               <h1> <strong> Become an Accounts Manager Even as a College Pass Out </strong> </h1>
               <h4>Learn the Secrets to Fast-Tracking Your Career in Accounts & Finance </h4>
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
                    <h3>Explore Your Future in Accounting with ICA Edu Skills</h3>
                     <p style="line-height: 107%; margin: 0cm 0cm 8pt;">&nbsp;</p>
                     <p style="margin-left: 0cm;"><span style="font-family: Calibri, sans-serif; font-size: 11pt;">Welcome to our exclusive counselling sessions designed to boost your accounting career. Today, when you register for our counselling session, you can take advantage of these special deals:</span></p>
                     <h4 id="e67398a380935b07202b726cb1f5e20b6" style="margin-left: 0cm;"><span style="font-family: Calibri, sans-serif; font-size: 11pt;">CIA Course: ₹55,000</span><br /><span style="font-family: Calibri, sans-serif; font-size: 11pt;">CIA with SAP Course: ₹81,000</span><br /><br /><span style="font-family: Calibri, sans-serif; font-size: 11pt;">Special Offer for Today Only:</span></h4>
                     <p>Sign up for our counseling session now at just <strong> ₹999</strong>  and receive:</p>
                     <p>Power BI Course (worth ₹15,000):<strong> Absolutely FREE</strong></p>
                     <p>AI in Accounting Course (worth ₹15,000): <strong>Absolutely FREE</strong></p>
                     <p>If you are not satisfied with the session, we offer a "No questions asked" 100% refund policy.</p>
                     <p style="margin-left: 0cm;"><span style="font-family: Calibri, sans-serif; font-size: 11pt;">Don't miss this opportunity to kick start your accounting journey. Register today and become an <strong>Accounts Manager</strong> even as a college pass-out!</span></p>
               </div>
            </div>
         </div>
         <div class="col-md-5" id="online">
            <div class="row">
               <div class="col-12 text-center mt-3" style="color:#000" >
                  <h3> Please Select Preferred Mode </h3>
               </div>
            </div>
            <div class="faq-tab  mb35">
               <div class="faq-tab-ques  ul-li">
                  <div class="tab-button text-left mb45">
                     <ul class="product-tab" style="width: 100%;margin-top: 25px;">
                        <li class="active webtab" rel="tab1">Online </li>
                        <li class="webtab" rel="tab2"  > Classroom </li>
                     </ul>
                  </div>
                  <!-- /tab-head -->

                  <!-- tab content -->
                  <div class="tab-container">

                     <!-- 1st tab -->
                     <div id="tab1" class="tab-content-1 pt35" style="display: none;">
                        <div id="accordion" class="panel-group">
                           <div class="highlighted-content-wrapper text-center"  >
                              <div class="ad_banner_form_wrapeer" style="background:#4bb6f5 !important;">
                                 <div class="register-fomr-title text-center">
                                    <p class="bold-font text-white" style="font-size: 18px!important;">Become an Accounts Manager</p>
                                 </div>
                                 <div class="register-form-area text-left" >
                                    <form id="nks_online_lead_capture_form" class="lead_form webinar-form" action="{{ url('global-other-form-submit') }}" method="POST" enctype="multipart/form-data">
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
                                             <div class="contact-info formFieldPincode">
                                                <input id="formFieldState" name="state" type="text" placeholder="Enter Your State" autocomplete="off" required>
                                             </div> 
                                             <div class="contact-info formFieldPincode">
                                                <input id="formFieldCity" name="city" type="text" placeholder="Enter Your City" autocomplete="off" required>
                                             </div>
                                             <div class="form-group disclaimer text-left">
                                                <p class="text-white" style="margin:0">
                                                   <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fa fa-whatsapp" style="color: green;"></i> whatsapp. 
                                                </p>
                                                <p class="text-white">
                                                   <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS. 
                                                </p>
                                             </div>
                                             <input name="source" type="hidden" value="Online">
                                          </div>
                                          {{ csrf_field() }}
                                          <div class="nws-button text-center white text-capitalize">
                                             <button class="submit_classroom_lead_generation_form form_step_1" type="submit" disabled>Apply Now <i class="fas fa-arrow-right" > </i> </button> 
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
                           <!-- end of #accordion -->
                        </div>
                     </div>
                     <!-- #tab1 -->

                     <div id="tab2" class="tab-content-1 pt35">
                        <div id="accordion-2" class="panel-group">
                           <div class="highlighted-content-wrapper text-center" id="Offline">
                              <div class="ad_banner_form_wrapeer" style="background:#4bb6f5 !important;;">
                                 <div class="register-fomr-title text-center">
                                    <p class="bold-font text-white" style="font-size: 18px!important;">Become an Accounts Manager</p>
                                 </div>
                                 <div class="register-form-area text-left" >
                                    <form id="nks_classroom_lead_capture_form" class="lead_form webinar-form" action="{{ url('global-other-form-submit') }}" method="POST" enctype="multipart/form-data">
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
                                             <div class="contact-info formFieldPincode">
                                                <input id="formFieldPincode" name="pincode" type="number" placeholder="Enter Your Pincode" autocomplete="off" min="100000" max="999999" required>
                                             </div>
                                             <div class="contact-info formFieldPincode">
                                                <input id="formFieldCity" name="city" type="text" placeholder="Enter Your City" autocomplete="off" required>
                                             </div>
                                             <div class="contact-info formFieldPincode">
                                                <select class="center" name="center">
                                                   <option value="">Select Center</option>
                                                   @foreach(getCenters() as $value)
                                                         <option value="{{$value->name}}" data-id="{{$value->id}}"> {{$value->name}} </option>
                                                   @endforeach
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
                                          <input name="source" type="hidden" value="Classroom">
                                          {{ csrf_field() }}
                                          <div class="nws-button text-center white text-capitalize">
                                             <button class="submit_classroom_lead_generation_form form_step_1" type="submit" disabled>Apply Now <i class="fas fa-arrow-right" > </i> </button> 
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
                        <!-- end of #accordion -->
                     </div>
                     <!-- #tab2 -->
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
               <h1><strong> Register with<span class="blink"> Rs. 999/-* </span> </strong> </h1>
               <h6> *Offer valid for first 100 Candidates </h6>
            </div>
            <div class="col-md-6" style="color: #333;">
               <div class="date-meta">
						<span class="mr-5"><strong><i class="fas fa-calendar-alt"></i> 06 July, 2024 at 03:00 PM </strong></span>
						<span class="mr-5"><strong><i class="fas fa-user"></i> Speaker : Dr. CA Narendra Shyamsukha </strong></span>															
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