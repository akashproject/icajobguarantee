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
                        <li><a href="tel:+918450006000"><i class="fas fa-phone-square"></i> +91-84500 06000</a></li>
                        <li><a target="_blank" href="https://wa.me/9147421932?text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20the%20stock%20market%20course.%20Please%20guide%20me."><i class='fas fa-comment-alt'></i> Chat With Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="main-menu">
         <div class="container">
            <div class="navbar-default">
               <div class="navbar-header float-left" style="left: 20px!important;">
                  <a class="navbar-brand text-uppercase" href="javascript:void(0)"><img src="{{ url('assets/images/logo.png') }}" alt="ICA Edu Skills Logo"></a>								
               </div>
               <!-- /.navbar-header -->
               <nav class="navbar-menu float-right">
                  <div class="nav-menu ul-li">
                     <ul>
                        <li class="">
                           <a href="#enquiryform">Demo Class</a>
                        </li>
                        <li class="">
                           <a href="#placements">Placements</a>
                        </li>
                        <li class="">
                           <a href="#gallery">Gallery</a>
                        </li>
                        <li class="">
                           <a href="#trainers">Trainers</a>
                        </li>
                        <li class="">
                           <a href="#course-details">Courses</a>
                        </li>
                        <li class="">
                           <a href="#career">Career</a>
                        </li>
                        <li class="">
                           <a href="#recruiters">Recruiters</a>
                        </li>
                     </ul>
                  </div>
               </nav>
               <div class="mobile-menu">
                  <div class="logo"><a href="javascript:void(0)"><img src="{{ url('assets/img/nsc-logo.png') }}" alt="ICA Edu Skills Logo"></a></div>
                  <nav>
                     <ul>
                        <a href="#enquiryform">Demo Class</a>
                        </li>
                        <li class="">
                           <a href="#placements">Placements</a>
                        </li>
                        <li class="">
                           <a href="#gallery">Gallery</a>
                        </li>
                        <li class="">
                           <a href="#trainers">Trainers</a>
                        </li>
                        <li class="">
                           <a href="#course-details">Courses</a>
                        </li>
                        <li class="">
                           <a href="#career">Career</a>
                        </li>
                        <li class="">
                           <a href="#recruiters">Recruiters</a>
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
<section id="enquiryform" class="ad-page-banner banner-black-shadow relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});" >
   <div class="container">
      <div class="row">
         <div class="col-md-7" style="margin-top: 40px!important;">
            <div class="ad-banner-content" style="padding: 15px 0; color: #393185!important; background: #fff!important;">
               <div class="ad-banner-title">
                  <h1 class="text-center" style="color: #393185!important;">Stock Market Courses</h1>
               </div>
               <div class="ad-banner-sub-title" style="padding: 0 15px;">
                  <p class="text-center" style="color:#393185!important;">Learn about financial market, stocks, fundamental analysis, technical analysis, futures & options, fixed income, mutual funds, life insurance and financial planning.</p>
               </div>
               <div class="ad-banner-description" style="overflow-x:auto;">
                  <div style="text-align: center; margin: 0 auto; padding: 5px 10px; border-top:3px solid #071e62; border-bottom:3px solid #071e62;">
                     <div style="font-size: .9rem!important; font-weight: bold;" class="text-center">Create Wealth | Grow Wealth | Make A Career</div>
                     <div style="font-size:80%!important;">Whatever your goal is, we will prepare you accordingly</div>
                  </div>
                  <table class="table">
                     <tr>
                        <td align="center"><strong>Stock Trading Training<br />Futures & Options Trading Training</strong></td>
                     </tr>
                     <tr>
                        <td align="center"><strong>Stock Investment Training<br />Mutual Fund Training<br />Bond Market Training</strong></td>
                     </tr>
                     <tr>
                        <td align="center"><strong>NCCMP & NISM Preparation<br />Financial Planner Training</strong></td>
                     </tr>
                  </table>
               </div>
				<div class="row">
				    <div class="col-md-3">
					</div>
					<div class="col-md-6 text-center bold-font" style="padding: 5px; background: #393185;">
						<div class="total-rating text-white">
							Rating: <a href="javascript:void(0)" style="color: #fff;"> 5 </a>
							<div class="ratings" style="display: inline;margin: 0 6px;">
								<i class="fas fa-star active"></i>
								<i class="fas fa-star active"></i>
								<i class="fas fa-star active"></i>
								<i class="fas fa-star active"></i>
								<i class="fas fa-star active"></i>
							</div>
							<br /><a href="javascript:void(0)" class="text-white" style="cursor: auto;margin: 0 6px;">5773 Votes</a>| <span class="text-white total-enroll">6629 Students</span>
						</div>
					</div>
					<div class="col-md-3">
					</div>
				</div>			   
            </div>	
         </div>

         <div class="col-md-5">
            <div class="highlighted-content-wrapper text-center">
               <div class="ad_banner_form_wrapeer" style="background: #fff!important;">
                  <div class="register-fomr-title text-center">
                     <h2 class="bold-font" style="color: #393185!important;">Book A Free Class</h2>
                     <h3 class="bold-font" style="color: #393185!important;"><span>Upcoming</span> Class Schedule</h3>
                  </div>
                  <div class="row batch-schedule">
                     <div class="col-6 text-center" style="border-right:2px dashed #fff;">
                        <h5 style="color: #393185; font-weight: 700; font-size: 16px!important;">Weekly Batch</h5>
                        <h6 style="color: #393185; font-weight: 700; font-size: 14px!important">06<sup>th</sup> May, 2025</h6>
                        <p style="color: #393185; font-size: 14px;">Tue | Thu | Sat</p>
                     </div>
                     <div class="col-6 text-center" style="border-left:2px dashed #fff;">
                        <h5 style="color: #393185; font-weight: 700; font-size: 16px!important;">Weekend Batch</h5>
                        <h6 style="color: #393185; font-weight: 700; font-size: 14px!important">03<sup>rd</sup> May, 2025</h6>
                        <p style="color: #393185; font-size: 14px;">Sat | Sun</p>
                     </div>
                  </div>
                  <div class="register-form-area text-left" >
                     <form id="banner_lead_capture_form" class="lead_form" action="{{ url('capture-lead') }}" method="POST" enctype="multipart/form-data">
                        <div class="form_process" >
                           <div class="lead_steps step1 active" >
                              @include('common.leadCaptureFormField')
                              <div class="form-group disclaimer text-left">
                                 <p style="margin:0; font-size:12px!important;">
                                    <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  <span style="color: #071e62!important;">I agree to receive updates on whatsapp.</span> 
                                 </p>
                                 <p style="margin:0; font-size:12px!important;">
                                    <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> <span style="color: #071e62!important;">I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS.</span>
                                 </p>
                              </div>
                           </div>
                           @include('common.leadCaptureFormOtpField')
                        </div>
                        <div class="form_success" style="display:none">
                           <div class="form-success-content">
                              <span class="success-icon"> <i class="fas fa-check"></i> </span>
                              <h4> Thank You! Your Application is Submitted Successfully </h4>
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
<!-- Start of Top Bands
   ============================================= -->
<section id="usp" class="search-course-section search-course-secound">
   <div class="container">
      <div class="search-counter-up">
         <div class="row">
            <div class="col-md-3">
               <div class="counter-icon-number "  >
                  <div class="counter-icon">
                     <i class="text-gradiant flaticon-graduation-hat"></i>
                  </div>
                  <div class="counter-number">
                     <span class="counter-count bold-font">Four</span>
                     <p>Certifications</p>
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
                     <span class="counter-count bold-font">Classes</span>
                     <p>Offline | Online</p>
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
                     <span class="counter-count bold-font">Trading</span>
                     <p>Simulation</p>
                  </div>
               </div>
            </div>
            <!-- /counter -->
            <div class="col-md-3">
               <div class="counter-icon-number">
                  <div class="counter-icon">
                     <i class="text-gradiant flaticon-favorites-button"></i>
                  </div>
                  <div class="counter-number">
                     <span class="counter-count bold-font">Placement</span>
                     <p>Assistance</p>
                  </div>
               </div>
            </div>
            <!-- /counter -->
         </div>
      </div>
   </div>
</section>
<!-- End of Top Bands
   ============================================= -->
<!-- Start of placement section
   ============================================= -->
@if(count(getJoinees('',2)) > 0)
<section id="placements" class="testimonial_2_section">
   <div class="container">
      <!--div class="testimonial-slide"-->
      <div class="section-title mb20 headline text-center">
         <span class="subtitle text-uppercase"> Students' Placements </span>
         <h3>Our Students <span>Who Got A Job</span> In The Financial Market</h3>
      </div>
      <div  id="placement-slide-item" class="placement-slide-area">
         @foreach(getJoinees('',2) as $value)						
         <div class="placement-content" style="height: 300px!important;">
            <div class="text-center">
               <div class="" style="width: 98px; height: 115px; margin: auto; padding: 2px; border: 1px solid #e3e2e2; border-radius: 6px;">
                  <img src="{{ url('assets/img/placements/'.strtolower(str_replace(' ','-',$value->name)).'.png') }}" alt="Student {{ $value->name }} placement in {{getCourseById($value->course_id)->name}} in {{ getCenterById($value->center_id)->name }}" style="height: 100%;">
               </div>
            </div>
            <div class="text-center my-2">
               <a href="javascript:void()" style="font-weight: 600;color: #362a7e;">{{ $value->name }}</a>
            </div>
            <div class="">
               <p class="st-designation"><strong>Designation:</strong> {{ $value->dasignation }}</p>
               <p class="st-designation"><strong>Company:</strong> {{ $value->placed_at }}</p>
            </div>
         </div>
         @endforeach
      </div>
      <!--/div-->
   </div>
</section>
@endif
<!-- End of placement section
   ============================================= -->
<!-- Start of classroom views section
   ============================================= -->
<section id="gallery" class="galleries-section">
   <div class="container">
      <div class="testimonial-slide">
         <div class="section-title mb20 headline text-center">
            <span class="subtitle text-uppercase">Galleries</span>
            <h3>Classroom<span> Views</span></h3>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="photo-list ul-li">
                  <ul>
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/13.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/13.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/12.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/12.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>                     
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/11.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/11.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/10.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/10.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/9.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/9.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>					 
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/8.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/8.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/7.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/7.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>					 
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/2.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/2.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/3.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/3.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/4.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/4.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/5.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/5.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2025-03-10/6.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2025-03-10/6.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End  of classroom views section
   ============================================= -->
<!-- Start of certificate section
   ============================================= -->
<section id="certificates" class="galleries-section">
   <div class="container">
      <div class="testimonial-slide">
         <div class="section-title mb20 headline text-center">
            <span class="subtitle text-uppercase">Students' Certificates</span>
            <h3>Our Students <span>Who Got A Certificate</span> from NSE Academy</h3>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="photo-list ul-li">
                  <ul>
                     <li>
                        <img src="https://www.icajobguarantee.com/assets/certificates/nccmp/Krish-Wadha.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/assets/certificates/nccmp/Krish-Wadha.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/assets/certificates/nccmp/Rishav-Dugar.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/assets/certificates/nccmp/Rishav-Dugar.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/assets/certificates/nccmp/Asish-Kr-Singh.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/assets/certificates/nccmp/Asish-Kr-Singh.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/assets/certificates/nccmp/Rakesh-Dutta.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/assets/certificates/nccmp/Rakesh-Dutta.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/assets/certificates/nccmp/Rimas-Mallick.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/assets/certificates/nccmp/Rimas-Mallick.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/assets/certificates/nccmp/Komal-Vayas.webp" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/assets/certificates/nccmp/Komal-Vayas.webp" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>					 
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End of certificate section
   ============================================= -->
<!-- Start of our trainer section
   ============================================= -->
<section id="trainers" class="testimonial_2_section">
   <div class="container">
   <div class="testimonial-slide">
      <div class="section-title mb20 headline text-center">
         <span class="subtitle text-uppercase">Our Trainers</span>
         <h3>Learn from the <span> Market Experts </span></h3>
      </div>
      <div  id="testimonial-slide-item" class="testimonial-slide-area">
         <div class="student-qoute">
            <div class="course-pic relative-position text-center">
               <div class="circle-img">
                  <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/trainer-2.png" alt="Anish Gandhi">	
               </div>
            </div>
            <p><strong>Industry Experience:</strong> Capital Markets educator having 23 years of experience in stock broking and trading. Worked in Depository Services of HDFC Bank Limited and as Vice President in Corporate Banking of RBL Bank.</p>
            <div class="student-name-designation">
               <span class="st-name bold-font">Mr. Anish Gandhi</span>
            </div>
         </div>
         <div class="student-qoute">
            <div class="course-pic relative-position text-center">
               <div class="circle-img">
                  <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/trainer-1.png" alt="">	
               </div>
            </div>
            <p><strong>Industry Experience:</strong> With over 20 years of domain expertise across different sectors. Worked in Equity research & Advisory with Training & Education, in Sharekhan Ltd, Angel Broking, IIFL & Motilal Oswal Ltd.</p>
            <div class="student-name-designation">
               <span class="st-name bold-font">Mr. Ravi Honda</span>
            </div>
         </div>
         <div class="student-qoute">
            <div class="course-pic relative-position text-center">
               <div class="circle-img">
                  <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/trainer-3.png" alt="Snehasish Bhattacharjee">	
               </div>
            </div>
            <p><strong>Industry Experience:</strong> Having 14 years of experience in academics and stock broking firms. MBA PGDM MCOM & CFA, CWM. NISM & NSE-NCFM Certified professional and financial market educator.</p>
            <div class="student-name-designation">
               <span class="st-name bold-font">Snehasish Bhattacharjee</span>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End  of our trainer section
   ============================================= -->
<!-- Start of Courses Listings
   ============================================= -->
<section id="course-details" class="best-course-section">
   <div class="container">
      <div class="section-title mb45 headline text-center">
         <span class="subtitle text-uppercase"> Training Section </span>
         <h3> Explore the <span>Financial Market Courses</span> </h3>
      </div>
      <div class="faq-tab mb65">
         <div class="faq-tab-ques ul-li">
            <div class="tab-button text-center ">
               <ul class="course-tab index-category-tab">
                  @foreach($courseType as $key => $value)
                  <li rel="course{{$key}}"> {{ $value->name }} </li>
                  @endforeach
               </ul>
            </div>
            <!-- /tab-head -->
            <!-- tab content -->
            <div class="tab-container">
               @foreach($courseType as $key => $value)
               <!-- 1st tab -->
               <div id="course{{$key}}" class="course-tab-content-1 pt35" style="display:{{ ($key == 0)?'block':'none' }}">
                  <div class="row justify-content-center">
                     @foreach($courses as $course)
                     @if($course->categorySlug == $value->slug)
                     <div class="col-md-3">
                        <div class="best-course-pic-text relative-position">
                           <div class="best-course-pic relative-position">
                              <img src="{{ (isset($course->featured_image))?getSizedImage('',$course->featured_image):url('assets/img/course/c-1.jpg') }}" alt="">
                              <div class="trend-badge-2 text-center text-uppercase">
                                 <i class="fas fa-bolt"></i>
                                 <span>Trending</span>
                              </div>
                              <div class="course-rate ul-li">
                                 <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                 </ul>
                              </div>
                              <div class="course-details-btn">
                                 <a href="{{ URL::to('/courses') }}/{{ $course->slug }}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                              </div>
                              <div class="blakish-overlay"></div>
                           </div>
                           <div class="best-course-text">
                              <div class="course-title mb20 headline relative-position height-60">
                                 <h3> {{ $course->name }}  
                                    <span class="trend-bestseller text-uppercase bold-font">
                                    <i class="fas fa-bolt"></i> Bestseller</span> 
                                 </h3>
                              </div>
                              <div class="course-meta">
                                 <span class="course-category"><i class="fas fa-clock"></i> {{ $course->duration }}</span>
                                 <span class="course-author"><i class="fas fa-book"></i> {{ $course->no_of_module }} Modules</span>
                              </div>
                           </div>
                           <div class="more-btn text-center" >
                              <div class="course-type-list">	
                                 <a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn('',{{ $contentMain->id }})"><i class="fas fa-download"></i> Brochure</a>
                              </div>
                              <div class="course-type-list">														
                                 <a class="btn-outline course-detail-tab-btn" data-id="course-view-{{$course->id}}" href="#detail-course" >View More <i class="fas fa-caret-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endif
                     @endforeach
                  </div>
               </div>
               <!-- #tab1 -->
               @endforeach						
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /course-categori -->
<!-- End of best course
   ============================================= -->
<style type="text/css">
   h2 {
   font-size: 1.5rem!important;
   margin: 15px 0!important;
   color: #3D3791!important;
   }
   h3 {
   font-size: 1.3rem!important;
   margin: 15px 0!important;
   color: #3D3791!important;
   }    
   p {
   font-size: 16px!important;
   }
</style>
<section id="detail-course" class="course-detail-section">
   <div class="container">
      @foreach($courses as $key => $course)
      <div id="course-view-{{$course->id}}" class="course-view-content {{ ($key == 0)?'active':'' }}">
         <div class="section-title mb45 headline text-center">
            <span class="subtitle text-uppercase">COURSE DETAILS</span>
            <h3><span>  {{ $course->name }}.</span></h3>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="course-details-item">
                  <div class="faq-tab mb65">
                     <div class="faq-tab-ques  ul-li">
                        <div class="course-details-category ul-li tab-button text-left mb25 tab-button text-left mb25">
                           <span>Course <b>Section:</b></span>
                           <ul class="product-tab ">
                              <li class="active" rel="{{$course->slug}}1"> Summary </li>
                              <li rel="{{$course->slug}}2"> Features </li>
                              <li rel="{{$course->slug}}3"> Highlights </li>
                              <li rel="{{$course->slug}}4">  Curriculum  </li>
                           </ul>
                        </div>
                        <!-- /tab-head -->
                        <!-- tab content -->
                        <div class="tab-container">
                           <!-- 1st tab -->
                           <div id="{{$course->slug}}1" class="tab-content-1 pt35" style="display:block">
                              <div class="course-details-content">
                                 {!! $course->description !!}
                              </div>
                           </div>
                           <!-- #tab1 -->
                           <div id="{{$course->slug}}2" class="tab-content-1 pt35">
                              <div class="course-details-content criteria">
                                 {!! $course->criteria !!}
                              </div>
                           </div>
                           <!-- #tab2 -->
                           <div id="{{$course->slug}}3" class="tab-content-1 pt35">
                              <div class="course-details-content highlights">
                                 <div class="affiliate-market-guide mb65">
                                    {!! $course->highlights !!}
                                 </div>
                              </div>
                           </div>
                           <!-- #tab3 -->
                           <div id="{{$course->slug}}4" class="tab-content-1 pt35">
                              <div class="course-details-content">
                                 <div class="affiliate-market-guide mb65">
                                    <div class="affiliate-market-accordion">
                                       <div id="accordion" class="panel-group">
                                          @foreach(getCourseCarriculams($course->id) as $key => $carriculam)
                                          @if($carriculam->name)
                                          <div class="panel">
                                             <div class="panel-title" id="heading_{{$course->slug}}_{{$key}}">
                                                <div class="ac-head">
                                                   <button class="btn btn-link {{ (count(getCourseCarriculams($course->id)) > 1)?'collapsed':'' ; }}" data-toggle="collapse" data-target="#collapse_{{$course->slug}}_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$course->slug}}_{{$key}}">
                                                   <span>{{ ($key < "9" )?"0":""}}{{$key + 1}}</span> {{$carriculam->name}}
                                                   </button>
                                                   <!-- <div class="course-by">
                                                      BY: <b>TONI KROSS</b> 
                                                      
                                                      </div> -->
                                                   <div class="leanth-course">
                                                      <span>{{ $carriculam->duration }} Hours</span>
                                                      <span> {{ count(json_decode($carriculam->lecture)) }} Lecture</span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="collapse_{{$course->slug}}_{{$key}}" class="collapse {{ (count(getCourseCarriculams($course->id)) > 1)?'':'show' ; }}" aria-labelledby="heading_{{$course->slug}}_{{$key}}" data-parent="#accordion">
                                                <div class="panel-body">
                                                   @foreach(json_decode($carriculam->lecture) as $key => $lecture)
                                                   <div class="" >
                                                      <strong> Lecture {{$key + 1}} : </strong> {!! $lecture !!}
                                                   </div>
                                                   @endforeach
                                                   <div>
                                                      @if($carriculam->benefits)
                                                      <h4 class="benefit-title"> Module Benefit </h4>
                                                      <div class="benefit-content" >
                                                         {!! $carriculam->benefits !!}
                                                      </div>
                                                      @endif
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          @endif
                                          @endforeach
                                       </div>
                                    </div>
                                 </div>
                                 <!-- /market guide -->
                              </div>
                           </div>
                           <!-- #tab3 -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</section>
<!-- End of Courses Listings
   ============================================= -->
<!-- Hightlists section
   ============================================= -->
<section id="career" class="highlights-section">
   <div class="container">
      <div class="row">
         <div class="col-md-5 mb20 text-center">
            <img src="{{ url('assets/img/ICA-Stock-market.jpg') }}" style="border-radius: 20px;">
         </div>
         <div class="col-md-7 mt10">
            <div class="section-title mb20 headline text-center">
               <span class="subtitle text-uppercase">Key Highlights </span>
               <h3>Career Opportunities <span>(100% Placement Assistance *)</span></h3>
            </div>
            <div class="row text-center">
               <div class="col-md-4 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/Dealer-Equity-Derivatives.png') }}" >
                     <h6> Dealer - Equity or Derivatives </h6>
                  </div>
               </div>
               <div class="col-md-4 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/Relationship-Manager-Executive.png') }}" >
                     <h6> Relationship Manager or Executive </h6>
                  </div>
               </div>
               <div class="col-md-4 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/Financial-Advisor-or-Planner.png') }}" >
                     <h6> Financial Advisor or Planner </h6>
                  </div>
               </div>
               <div class="col-md-4 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/Mutual-Fund-Specialist.png') }}" >
                     <h6> Mutual Fund Specialist </h6>
                  </div>
               </div>
               <div class="col-md-4 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/Business-Development-Executive.png') }}" >
                     <h6> Business Development Executive </h6>
                  </div>
               </div>
               <div class="col-md-4 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/Client-Acquisition-Executive.png') }}" >
                     <h6> Client Acquisition Executive </h6>
                  </div>
               </div>
               <div class="col-md-4 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/Retail-Investor.png') }}" >
                     <h6> Retail Investor </h6>
                  </div>
               </div>
               <div class="col-md-4 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/Retail-Trader.png') }}" >
                     <h6> Retail Trader </h6>
                  </div>
               </div>
               <div class="col-md-4 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/Sub-Broker.png') }}" >
                     <h6> Sub-Broker </h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Hightlists section
   ============================================= -->
<style type="text/css">
   .placement-grid {
   border: 0!important;
   padding: 0!important;
   box-shadow: 0 0px 0px 0 rgb(46 61 73 / 20%);
   }
</style>
<!-- Start our Recruiters section
   ============================================= -->
<section id="recruiters" class="sponsor-section">
   <div class="container">
      <div class="section-title mb35 headline text-center">
         <span class="subtitle text-uppercase">Our Recruiters</span>
         <h3>Our Alumni <span>Works At</span></h3>
      </div>
      <div class="row">
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Anandrathi.png" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Angel-One.png" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Axis-Direct.png" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Edelweiss.png" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/ICICI-Securities.png" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/IIFL.png" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Indiabulls.png" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Kotak-Mahindra-Bank.png" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Motilal-Oswal.png" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Religare.png" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Sharekhan.png" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/UTI-Mutual-Fund.png" alt="">		
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End our Recruiters section
   ============================================= -->
@endsection
@section('script')
<!-- ============================================================== -->
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection