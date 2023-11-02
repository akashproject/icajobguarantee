@extends('layouts.ad-main')
    @section('content')
    <style>
        .franchise-banner:before {
        background-image: url(https://www.careerlauncher.com/cuet/graduation-in-india/images/black-background.png);
        height: 100%;
        position: absolute;
        right: 0;
        opacity: inherit;
        top: 0;
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        content: "";
    }

    .franchise-banner h4 {
        font-size: 24px;
        color: #ffe202;
        margin: 20px 0;
    }

    .collaborate {
        height: 100px;
        padding: 19px 3px;
        width: auto;
        border-radius: 6px;
        border: 3px solid #ccc;
    }

    .process-count {
        text-align: left;
        padding-left: 20px;
    }

    .process-count h1 {
        font-size: 64px;
        font-weight: 800;
        color: #393185;
    }

    </style>
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
								
						</div><!-- /.navbar-header -->						
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<nav class="navbar-menu float-right">
							<div class="nav-menu ul-li">
								<ul>
                                    <li class="">
                                        <a href="{{ url('#about') }}"> About Us</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#model') }}"> Business Model</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#why') }}"> Why ICA</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#benefits') }}"> Benefits</a>
                                    </li>
								</ul>
							</div>
						</nav>

						<div class="mobile-menu">
							<div class="logo"><a href="javascript:void(0)"><img src="{{ url('assets/img/logo/logo.png') }}" alt="Logo"></a></div>
							<nav>
                                <ul>
                                    <li class="">
                                        <a href="{{ url('#about') }}"> About Us</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#model') }}"> Business Model</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#why') }}"> Why ICA</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#benefits') }}"> Benefits</a>
                                    </li>
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>	

    <!-- Start of Header section -->
    <section id="breadcrumb" class="ad-page-banner relative-position backgroud-style franchise-banner" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});" >
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="mt-5">
                    <div class="ad-banner-title">
                        <h1 class="text-white" style="font-weight: 700!important;">Generate a minimum monthly income of 4 Lakh rupees</h1>
                    </div>
                    <div class="ad-banner-subtitle">
                        <h4> Partner with India's largest education network </h4>
                        <p class="text-white"> Partner with India's top-ranked Accounting and Taxation Training Institute and become a part of a noble vision to build 'Skilled Manpower' among job-focused youth in India and make them employable at an affordable fee. </p>
                    </div>
                    <div class="ad-banner-sub-title">
                        <p class="text-white" style="font-size: 21px;margin: 0;"> <i class="fa fa-check"></i> Area Required: Minimum 1000 - 2500 SQFT </p>
                        <p class="text-white" style="font-size: 21px;margin: 0;"> <i class="fa fa-check"></i> Investment: 10 - 20 Lakh  </p>
                        <p class="text-white" style="font-size: 21px;margin: 0;"> <i class="fa fa-check"></i> No. of Franchises: 100+  </p>
                        <p class="text-white" style="font-size: 21px;margin: 0;"> <i class="fa fa-check"></i> Establishment Year: 1999  </p>
                    </div>
                    <div class="ad-banner-sub-title">    
                        <div class="row">
                            <div class="col-md-3">
                                <div class="bg-white collaborate">
                                    <img src="https://www.icajobguarantee.com/public/upload/2023-10-31/nsc-logo.png">
                                </div> 
                            </div> 
                            <div class="col-md-3">
                                <div class="bg-white collaborate">
                                    <img src="https://www.icajobguarantee.com/public/upload/2023-10-31/ica-nism-logo.png">
                                </div> 
                            </div> 
                            <div class="col-md-3">
                            </div> 
                            <div class="col-md-3">
                            </div>    
                        </div>    
                    </div>
                </div>
            </div>
            <div id="apply" class="col-md-5">
                <div class="highlighted-content-wrapper text-center">
                <div class="ad_banner_form_wrapeer" >
                    <div class="register-fomr-title text-center">
                        <h3 class="bold-font text-white">Business Partner!</h3>
                    </div>
                    <div class="register-form-area text-left" >
                        <form id="banner_lead_capture_form" class="lead_form" action="{{ url('franchise-capture-lead') }}" method="POST" enctype="multipart/form-data">
                            <div class="form_process" >
                            <div class="lead_steps step1 active" >
                                @include('common.franchiseLeadCaptureFormField')
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
    <!-- End of Header section -->
    <!-- Start of Search Courses
    ============================================= -->
    <section id="search-course" class="search-course-section search-course-secound">
        <div class="container">
            <div class="search-counter-up">
                <div class="row">
                    <div class="col-md-3">
                        <div class="counter-icon-number "  >
                            <div class="counter-icon">
                                <i class="text-gradiant flaticon-graduation-hat"></i>
                            </div>
                            <div class="counter-number">
                                <span class="counter-count bold-font">100</span><span>+</span>
                                <p>Daily Admission</p>
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
                                <span class="counter-count bold-font">100</span><span>+</span>
                                <p>Pan India Center</p>
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
                                <span class="counter-count bold-font">6</span><span>Lacs +</span>
                                <p>Monthly Income</p>
                            </div>
                        </div>
                    </div>
                    <!-- /counter -->

                    <div class="col-md-3">
                        <div class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                            <a data-toggle="modal" data-target="#franchise-lead-generation-form" href="javascript:void(0)" > Become Our Partner </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Search Courses
    ============================================= -->
    <!-- Start of course details section
    ============================================= -->
    <section id="course-details" class="course-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">   
                    <div class="course-details-item">
                        <div class="course-single-pic mb30">
                            <img src="{{ url('assets/img/pan-india.png')}}" alt="">
                        </div>
                        <div class="">
                            <div class="course-title mt10 headline relative-position">
                                <h3><b> ABOUT ICA EDU SKILLS </b></h3>
                            </div>
                            <p class="course-details-content">
                                ICA Edu Skills began its journey in 1999 with a vision to train the job-focused youth in India and make them employable at an affordable fee. As the industry demands ‘skilled manpower’, we too, expanded our horizon by providing practical training to our students and support them with placement at top companies and MNCs.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="side-bar">
                        <div class="side-bar-widget first-widget">
                            <h3 class="widget-title text-capitalize" style="font-size:25px" ><span>Franchise Opportunity</span></h3>
                            <div class="latest-video-poster relative-position mb20">
                                <img src="{{ url('assets/img/franchise-videothumb.png') }}" alt="">
                                <div class="video-play-btn text-center gradient-bg">
                                    <a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=hjbKYGXJ7i4"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>ICA Edu Skills Franchise Opportunity | Be a Part of ICA Family | Let's Upskill India.</p>
                            </div>								
                        </div>
                        <div class="genius-btn mb20 gradient-bg text-center text-uppercase ul-li-block bold-font">
                            <a data-toggle="modal" data-target="#franchise-lead-generation-form" href="javascript:void(0)" > <i class="fas fa-download" style="color: #fff;"></i> Get Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Course category
        ============================================= -->
        <section id="course-category" class="course-category-section home-secound-version">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">BENEFITS OF FRANCHISE</span>
                <h3>BENEFITS OF<span> ICA FRANCHISE.</span></h3>
            </div>
            <div class="row">
                <img src="{{ url('assets/img/benefits.jpg') }}" >
            </div>
            <div class="row mt-5">
                <div class="col-md-5">
                    
                </div>
                <div class="col-md-6">
                    <div class="genius-btn mb20 gradient-bg text-center text-uppercase ul-li-block bold-font">
                        <a data-toggle="modal" data-target="#franchise-lead-generation-form" href="javascript:void(0)" > <i class="fas fa-download" style="color: #fff;"></i> Know More </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End of course details section
    ============================================= -->	
    <section id="courses" class="best-course-section">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">Why an education franchisee?</span>
                <h3>Own a business that contributes to the society and its future</span></h3>
            </div>
            <div class="best-course-area mb10">
                <div class="row">
                    <div class="col-md-3">
                        <div class="four-grid-box text-center">
                            <div class="my-3">
                                <img src="{{ url('assets/img/international.png') }}" >
                            </div>
                            <div class="category-title">
                                <h4>Cultural Value</h4>
                                <p>The huge emphasis that every Indian family gives on education offers an exciting entrepreneurial opportunity for an entrepreneur like you and for CL</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="four-grid-box text-center">
                            <div class="my-3">
                                <img src="{{ url('assets/img/etiquette.png') }}" >
                            </div>
                            <div class="category-title">
                                <h4>Social Respect</h4>
                                <p> Helping students in achieving their career dreams enables you to give back to the society and earn, both, status, and respect </p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="four-grid-box text-center">
                            <div class="my-3">
                                <img src="{{ url('assets/img/growth.png') }}" >
                            </div>
                            <div class="category-title">
                                <h4>Growing Need</h4>
                                <p> With the competition for the limited number of seats in educational institutes increasing by the day, the demand for quality coaching is also on the rise </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="four-grid-box text-center">
                            <div class="my-3">
                                <img src="{{ url('assets/img/money-bag.png') }}" >
                            </div>
                            <div class="category-title">
                                <h4>Easy to Breakeven</h4>
                                <p>One of the most financially rewarding businesses, in terms of achieving the breakeven early (provided the operational efforts made are efficient).</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of course details section
    ============================================= -->	
    <section id="courses" class="secound-teacher-section">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">A message from our Chairman?</span>
            </div>
            <div class="best-course-area mb10">
                <div class="row">
                    <div class="col-md-3">
                        <div class="teacher-img-text relative-position text-center">
                            <div class="teacher-img-social relative-position">
                                <img src="https://www.icajobguarantee.com/assets/img/about/nks.png" alt="">
                                <div class="blakish-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="four-grid-box text-center">   
                            <div class="category-title">
                                <h4>Dr.Narendra Shyamsukha</h4>
                                <p> Helping students in achieving their career dreams enables you to give back to the society and earn, both, status, and respect </p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- End of course details section
    ============================================= -->	
    <section id="courses" class="best-course-section">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">Francise Model</span>
                <h3>ICA<span> Francise Model.</span></h3>
            </div>
            <div class="best-course-area mb10">
                <div class="row">
                    <div class="tree-grid-slide text-center">
                        <div class="four-grid-box text-center">
                            <div class="circle-icon">
                                <img src="{{ url('assets/img/Area.svg') }}" >
                            </div>
                            <div class="category-title">
                                <h4>Minimum Carpet Area of <br> 1000-2500 Sqft</h4>
                                <p>We have been successfully imparting knowledge to the Indian Youth in 16 states and 61+ cities in India for over 22 glorious years</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>

                        <div class="four-grid-box text-center">
                            <div class="circle-icon">
                                <img src="{{ url('assets/img/Investment.svg') }}" >
                            </div>
                            <div class="category-title">
                                <h4>10-20 lakhs of Investment </h4>
                                <p> We have been expertly teaching and training students, college graduates, and professionals and preparing them academically for facing the job market for over two decades </p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>

                        <div class="four-grid-box text-center">
                            <div class="circle-icon">
                                <img src="{{ url('assets/img/Growth.svg') }}" >
                            </div>
                            <div class="category-title">
                                <h4>Zeal To Be <br> Your Own boss</h4>
                                <p> We follow ‘Activity Based Thematic Curriculum’ which includes multimedia and internet-based teaching for lasting lessons </p>
                            </div>
                        </div>

                        <div class="four-grid-box text-center">
                            <div class="circle-icon">
                                <img src="{{ url('assets/img/Area.svg') }}" >
                            </div>
                            <div class="category-title">
                                <h4>Minimum Carpet Area of 1000-2500 Sqft</h4>
                                <p>We have been successfully imparting knowledge to the Indian Youth in 16 states and 61+ cities in India for over 22 glorious years</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Course category
        ============================================= -->
    <section id="course-category" class="testimonial_2_section home-secound-version">
        <div class="container">
            <div class="section-title mb20 headline text-left">
                <span class="subtitle ml42  text-uppercase">why choose us</span>
                <h3>Why <span>ICA Partner.</span></h3>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ url('assets/img/franchise-left.png')}}" >
                    
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6" >
                            <div class="four-grid-box text-center">
                                <div class="circle-icon">
                                    <img src="{{ url('assets/img/300-Centers.svg') }}" >
                                </div>
                                <div class="category-title">
                                    <h4>100+ centers in pan India.</h4>
                                    <p> We have been expertly teaching students, college graduates and professionals by preparing them academically for facing the job market for over two decades </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="four-grid-box text-center">
                                <div class="circle-icon">
                                    <img src="{{ url('assets/img/Candidates-Placed.svg') }}" >
                                </div>
                                <div class="category-title">
                                    <h4>70,000+ Registered Employers</h4>
                                    <p>We have been expertly teaching students, college graduates and professionals by preparing them academically for facing the job market for over two decades </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="four-grid-box text-center">
                                <div class="circle-icon">
                                    <img src="{{ url('assets/img/State-Presence.svg') }}" >
                                </div>
                                <div class="category-title">
                                    <h4>23+ State presence in India</h4>
                                    <p>We have been expertly teaching students, college graduates, and professionals by preparing them academically for facing the job market for over two decades </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="four-grid-box text-center">
                                <div class="circle-icon">
                                    <img src="{{ url('assets/img/300-Centers.svg') }}" >
                                </div>
                                <div class="category-title">
                                    <h4>100+ centers in pan India.</h4>
                                    <p>We have been expertly teaching students, college graduates and professionals by preparing them academically for facing the job market for over two decades </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="genius-btn mb20 gradient-bg text-center text-uppercase ul-li-block bold-font">
                        <a data-toggle="modal" data-target="#franchise-lead-generation-form" href="javascript:void(0)" > <i class="fas fa-download" style="color: #fff;"></i> Request a Call Back </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of course details section
    ============================================= -->	
    <section id="courses" class="best-course-section">
        <div class="container">
            <div class="section-title mb20 headline text-left">
                <span class="subtitle ml42  text-uppercase">Getting started as a CL business franchisee</span>
                <h3>Application procedure for becoming  <span>our partner.</span></h3>
            </div>
            <div class="best-course-area mb10">
                <div class="row">
                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1> 1 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Download thebrochure</h4>
                                <p>Get your copy of our franchisee brochure which further elaborates the CL franchise business model.</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1> 2 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Go through the CL Biz Partner model</h4>
                                <p> Explore our brochure and watch the testimonials of our biz partners to understand the franchise business model and its effectiveness </p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1> 3 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Discuss with a CL representative</h4>
                                <p> Our team will contact you on your number to discuss your interest and the partnership possibilities </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1> 4 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Schedule an in-person visit</h4>
                                <p>Block a date for your visit to our CL Head Office in New Delhi to further discuss your franchise business plan</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1> 5 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Review the Service Partner Agreement</h4>
                                <p>You shall receive a service partner agreement upon successfully submitting the required documents</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1> 6 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Meet Career Launcher's Founders & The Network 1000 Board</h4>
                                <p>Share your vision, discuss strategy, and plan the execution and get a green-signal to start with a bang</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start secound teacher section
		============================================= -->
    <section id="teacher-2" class="secound-teacher-section">
        <div class="container">
            <div class="section-title mb35 headline text-left">
                <span class="subtitle ml42  text-uppercase">GENIUS STAFFS</span>
                <h3>Team <span>Managements.</span></h3>
            </div>
            <div class="teacher-secound-slide">
                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="{{ url('assets/img/about/nks.png')}}" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="teacher-social-list ul-li">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="teacher-name-designation mt15">
                        <span class="teacher-name">Dr.Narendra Shyamsukha</span>
                        <span class="teacher-designation">Chairman</span>
                    </div>
                </div>

                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="{{ url('assets/img/about/ankit.png')}}" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="teacher-social-list ul-li">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="teacher-name-designation mt15">
                        <span class="teacher-name">Ankit Shyamsukha</span>
                        <span class="teacher-designation">CEO</span>
                    </div>
                </div>

                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="{{ url('assets/img/about/kanhiya.png')}}" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="teacher-social-list ul-li">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="teacher-name-designation mt15">
                        <span class="teacher-name">Kanhaiya Poddar</span>
                        <span class="teacher-designation">CFO</span>
                    </div>
                </div>

                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="{{ url('assets/img/about/tirthankar-sanyal.png')}}" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="teacher-social-list ul-li">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="teacher-name-designation mt15">
                        <span class="teacher-name">Tirthankar Sanyal</span>
                        <span class="teacher-designation">CEO - Skill Vertical</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- End teacher section
		============================================= -->
    
    <section id="faqs" class="teacher-details-area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="about-teacher about-faq faq-secound-home-version">
                <div class="section-title-2  headline text-left">
                    <h2>Frequently  <span>Ask &amp; Questions.</span></h2>
                </div>
                <div class="faq-tab mb35">
                    <div class="faq-tab-ques  ul-li">
                        <div id="accordion3" class="panel-group">
                            @foreach(getFaqs("Adpage",$contentMain->id) as $key => $value)
                            <div class="panel">
                            <div class="panel-title" id="heading_{{$key}}">
                                <h3 class="mb-{{$key}}">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$key}}">
                                    {{ $value->question }}
                                    </button>
                                </h3>
                            </div>
                            <div id="collapse_{{$key}}" class="collapse" aria-labelledby="heading_{{$key}}" data-parent="#accordion3">
                                <div class="panel-body">
                                    {!! $value->answer !!}
                                </div>
                            </div>
                            </div>
                            @endforeach                                       
                        </div>
                        <!-- end of #accordion -->
                    </div>
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