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
    <!-- EndStart of Header section -->
    
    
    <section id="breadcrumb" class="ad-page-banner relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});" >
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="mt-5">
                    <div class="ad-banner-title">
                        <h1 class="text-center" style="font-size: 32px!important; font-weight: 700!important;"> <h1>Generate a minimum monthly income of 4 Lakh rupees</h1> </h1>
                    </div>
                    <div class="ad-banner-subtitle">
                        <h4> Partner with India's largest education network </h4>
                        <p> Partner with India's top-ranked Accounting and Taxation Training Institute and become a part of a noble vision to build 'Skilled Manpower' among job-focused youth in India and make them employable at an affordable fee. </p>
                    </div>
                    <div class="ad-banner-sub-title">
                        <p class="text-white" style="font-size: 21px;margin: 0;"> <i class="fa fa-check"></i> Area Required: Minimum 1000 - 2500 SQFT </p>
                        <p class="text-white" style="font-size: 21px;margin: 0;"> <i class="fa fa-check"></i> Investment: 18 - 20 Lakh  </p>
                        <p class="text-white" style="font-size: 21px;margin: 0;"> <i class="fa fa-check"></i> No. of Franchises: 100+  </p>
                        <p class="text-white" style="font-size: 21px;margin: 0;"> <i class="fa fa-check"></i> Establishment Year: 1999  </p>
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
    
    <!-- Start of franchise success stories
    ============================================= -->	
    <section id="success-stories" class="best-course-section">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">Franchise Success Stories</span>
                <h3>What our <span> Partner has to say </span></h3>
            </div>
            <div class="best-course-area mb10">
                <div class="row">
                    <div class="tree-grid-slide text-center">
					
                        <div class="four-grid-box text-center">
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/WJLuzTGosNU?si=GZUsnhh4ZqIGf8zc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                        <div class="four-grid-box text-center">
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/CrfeJpVYIJ4?si=GZUsnhh4ZqIGf8zc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                        <div class="four-grid-box text-center">
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/hzkVRQ3z-xU?si=GZUsnhh4ZqIGf8zc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                        <div class="four-grid-box text-center">
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/xMGlWBKxSdo?si=GZUsnhh4ZqIGf8zc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of franchise success stories
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
                        <div class="course-single-text">
                            <div class="course-title mt10 headline relative-position">
                                <h3><b> ABOUT ICA EDU SKILLS </b></h3>
                            </div>
                            <div class="course-details-content">
                                <p>ICA Edu Skills began its journey in 1999 with a vision to train the job-focused youth in India and make them employable at an affordable fee. As the industry demands ‘skilled manpower’, we too, expanded our horizon by providing practical training to our students and support them with placement at top companies and MNCs.</p>
                            </div>
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

    <!-- Start of Francise Model section
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
                                <p>We have been successfully imparting knowledge to the Indian Youth in 23+ states in India for over 24+ glorious years</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>

                        <div class="four-grid-box text-center">
                            <div class="circle-icon">
                                <img src="{{ url('assets/img/Investment.svg') }}" >
                            </div>
                            <div class="category-title">
                                <h4>18-20 lakhs of Investment </h4>
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
                                <p>We have been successfully imparting knowledge to the Indian Youth in 23+ states in India for over 24+ glorious years</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Francise Model section
    ============================================= -->    

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

    <!-- End Course category
        ============================================= -->
    <section id="course-category" class="course-category-section home-secound-version">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">BENEFITS OF FRANCHISE</span>
                <h3>BENEFITS OF<span> ICA FRANCHISE.</span></h3>
            </div>
            <div class="row">
                <div class="col-md-6" >
                    <ul class="benifit-wrap">
                        <li class="cat-item"> In-house ERP, CRM, and R&D Team </li>
                        <li class="cat-item"> Regular seminar and grooming session </li>
                        <li class="cat-item"> Practical Training sessions with fun activities </li>
                        <li class="cat-item"> Faculty Training </li>
                        <li class="cat-item"> Quality Assurance </li>
                        <li class="cat-item"> 100% Lead Generation through Digital Marketing </li>
                    </ul>
                </div>
                <div class="col-md-6" >
                    <ul class="benifit-wrap">
                        <li class="cat-item"> Earning potential of 1 – 4 Lakhs/month </li>
                        <li class="cat-item"> Partnership Advantage with India’s top-ranked training institute </li>
                        <li class="cat-item"> Best Training facilities in Accounts, Finance and Taxation </li>
                        <li class="cat-item"> All time student rush due to high demand for CIA courses </li>
                        <li class="cat-item"> 100+ centers in Pan India </li>
                        <li class="cat-item"> Investment of just 18-20 lakh </li>
                    </ul>
                </div>
            </div>
            <div class="row">
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
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection