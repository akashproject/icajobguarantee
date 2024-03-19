@extends('layouts.ad-main')
@section('content')
<!-- Start of Header section
   ============================================= -->
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
                        <li><a href="mailto:{{$contentMain->email}}" ><i class="fas fa-envelope"></i> {{$contentMain->email}}</a></li>
                        <li><a href="tel:{{$contentMain->mobile}}" ><i class="fas fa-phone-square"></i> {{$contentMain->mobile}}</a></li>
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
                        <li class="">
                           <a href="#placements">Placements</a>
                        </li>
                        <li class="">
                           <a href="#highlights">Highlights</a>
                        </li>
                        <li class="">
                           <a href="#courses">Courses</a>
                        </li>
                        <li class="">
                           <a href="#trainers">Trainers</a>
                        </li>
                        <li class="">
                           <a href="#classroom">Classroom</a>
                        </li>
                        <li class="">
                           <a href="#certification">Certification</a>
                        </li>
                        <!--li class="">
                           <a href="#testimonials">Testimonials</a>
                           
                           
                           
                           </li-->
                        <li class="">
                           <a href="#faqs">FAQs</a>
                        </li>
                     </ul>
                  </div>
               </nav>
               <div class="mobile-menu">
                  <div class="logo"><a href="javascript:void(0)"><img src="{{ url('assets/img/logo/logo.png') }}" alt="Logo"></a></div>
                  <nav>
                     <ul>
                        <li class="">
                           <a href="#placements">Placements</a>
                        </li>
                        <li class="">
                           <a href="#highlights">Highlights</a>
                        </li>
                        <li class="">
                           <a href="#courses">Courses</a>
                        </li>
                        <li class="">
                           <a href="#trainers">Trainers</a>
                        </li>
                        <li class="">
                           <a href="#classroom">Classroom</a>
                        </li>
                        <li class="">
                           <a href="#certification">Certification</a>
                        </li>
                        <!--li class="">
                           <a href="#testimonials">Testimonials</a>
                           
                           
                           
                           </li-->
                        <li class="">
                           <a href="#faqs">FAQs</a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- Start of Header section
   ============================================= -->
<section id="breadcrumb" class="ad-page-banner relative-position backgroud-style" >
   <div class="container">
      <div class="row text-dark-gray">
         <div class="col-md-8">
            <ol class="inner-banner-breadcrumb">
                     <li class="breadcrumbElement">
                     <a href="javascript:void(0)">Home</a>
                     <span> 
                     <i class="fas fa-chevron-right"> </i>
                     </span> 
               </li>
                     <li class="breadcrumbElement">
                     <a href="javascript:void(0)">Courses</a>
                     <span class="breadcrumbElement"> 
                     <i class="fas fa-chevron-right"> </i>
                     </span> 
                  </li>
                  <li class="breadcrumbElement">
                     Advanced Excel Course
                  </li>
               </ol>
               <div class="ad-banner-content">
                  <div class="ad-banner-title">
                     <img src="{{url('assets/img/banner-icon.webp')}}" >
                  </div>
                  <div class="ad-banner-option">
                     <!-- <div class="mt-4">
                        <h5>Elevate your skills and transform your career with specialized training towards professional excellence</h5>
                     </div> -->
                  </div>
                  <div class="ad-banner-sub-title my-5">
                  <div class="row"> 
                     <div class="col-md-3 text-center" style="">
                        <img src="{{url('assets/img/handshake.png')}}" >
                        <h5 class="mt-2">100% Job Guarantee </h5>
                     </div>
                     <div class="col-md-3 text-center" style="">
                        <img src="{{url('assets/img/award.png')}}" >
                        <h5 class="mt-2">Triple Certifications </h5>
                     </div>
                     <div class="col-md-3 text-center" style="">
                        <img src="{{url('assets/img/software.png')}}" >
                        <h5 class="mt-2">7 Simulation Softwares</h5>
                     </div>
                     <div class="col-md-3">
                     </div>
                  </div>
                     </div>
                  <div class="ad-banner-option my-5">
                     <span class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font mb10">
                        <a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>
                     </span>

                     <span class="apply-now">
                        <a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Apply Now </a>
                     </span>
                  </div>
               </div>
         </div>
         <div class="col-md-4">
            <div class="mt-5" >
               <img src="https://dummyimage.com/420x390" >
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Start of Header section
   ============================================= -->
<section id="" class="inline-lead-form-section">
   <div class="container-fluid inline-lead-form" >
      <div class="container">
         <form method="post" action="" > 
            <div class="row" >
               <div class="col-md-10" >
                  <div class="row" >
                     <div class="col-md-3" >
                        <div class="contact-info formFieldName">
                           <input id="formFieldName" name="name" type="text" placeholder="Enter Your Name" autocomplete="off" required>
                        </div>
                     </div>
                     <div class="col-md-3" >
                        <div class="contact-info formFieldEmail">
                           <input id="formFieldEmail" name="email" type="email" placeholder="Enter Your Email" autocomplete="off" required>
                        </div>
                     </div>
                     <div class="col-md-3" >
                        <div class="contact-info formFieldMobile">
                           <input id="formFieldMobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" min="6000000000" max="9999999999" required>
                        </div>
                     </div>
                     <div class="col-md-3" >
                        <div class="contact-info formFieldPincode">
                           <input id="formFieldPincode" name="pincode" type="number" placeholder="Enter Your Pincode" min="100000" max="999999" autocomplete="off" required>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2" >
                  <div class="ad-banner-option" >
                     <span class="apply-now" style="display: block;text-align: center;background: #fff;">
                        <a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Apply Now </a>
                     </span>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</section>
<!-- Start of Upper Band
   ============================================= -->
   
<section id="usp" class="usp-container">
   <div class="container">
      <div class="search-counter-up">
         <div class="row">
            <div class="col-md-3">
               <div class="counter-icon-number "  >
                  <div class="counter-icon">
                     <i class="text-gradiant flaticon-graduation-hat"></i>
                  </div>
                  <div class="counter-number">
                     <span class="counter-count bold-font">500K</span><span>+</span>
                     <p>Satisfied Students</p>
                  </div>
               </div>
            </div>
            <!-- /counter -->
            <div class="col-md-3">
               <div class="counter-icon-number "  >
                  <div class="counter-icon">
                     <i class="text-gradiant flaticon-book"></i>
                  </div>
                  <div class="counter-number">
                     <span class="counter-count bold-font">24</span><span>+</span>
                     <p>Years of Excelllence</p>
                  </div>
               </div>
            </div>
            <!-- /counter -->
            <div class="col-md-3">
               <div class="counter-icon-number "  >
                  <div class="counter-icon">
                     <i class="text-gradiant flaticon-favorites-button"></i>
                  </div>
                  <div class="counter-number">
                     <span class="counter-count bold-font">90</span><span>%</span>
                     <p>Practical Training</p>
                  </div>
               </div>
            </div>
            <!-- /counter -->
            <div class="col-md-3">
               <div class="counter-icon-number "  >
                  <div class="counter-icon">
                     <i class="text-gradiant flaticon-group"></i>
                  </div>
                  <div class="counter-number">
                     <span class="counter-count bold-font">Live</span>
                     <p>Projects</p>
                  </div>
               </div>
            </div>
            <!-- /counter -->
         </div>
      </div>
   </div>
</section>
<!-- End of Upper Band
   ============================================= -->

@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection