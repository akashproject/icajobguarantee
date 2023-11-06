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
                                        <a href="{{ url('#mission') }}"> Mission</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#success-stories') }}"> Success Stories</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#benefits') }}"> Benefits</a>
                                    </li>                                    
                                    <li class="">
                                        <a href="{{ url('#model') }}"> Business Model</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#why-ica') }}"> Why ICA</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#procedure') }}"> Procedure</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#management') }}"> Management Team</a>
                                    </li>                                    
								</ul>
							</div>
						</nav>

						<div class="mobile-menu">
							<div class="logo"><a href="javascript:void(0)"><img src="{{ url('assets/img/logo/logo.png') }}" alt="Logo"></a></div>
							<nav>
								<ul>
                                    <li class="">
                                        <a href="{{ url('#mission') }}"> Mission</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#success-stories') }}"> Success Stories</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#benefits') }}"> Benefits</a>
                                    </li>                                    
                                    <li class="">
                                        <a href="{{ url('#model') }}"> Business Model</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#why-ica') }}"> Why ICA</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#procedure') }}"> Procedure</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('#management') }}"> Management Team</a>
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
                        <h1 class="text-white" style="font-weight: 700!important;">Generate a monthly income of at least 4 lakh rupees</h1>
                    </div>
                    <div class="ad-banner-subtitle">
                        <h4> Partner with India's Largest Education Network </h4>
                        <p class="text-white"> Partner with India's top-ranked Accounting and Taxation Training Institute and become a part of a noble vision to build 'Skilled Manpower' among job-focused youth in India and make them employable at an affordable fee. </p>
                    </div>
                    <div class="ad-banner-sub-title">
                        <p class="text-white" style="font-size: 21px;margin: 0;"> <i class="fa fa-check"></i> Area Required: Minimum 1000 - 2500 SQFT </p>
                        <p class="text-white" style="font-size: 21px;margin: 0;"> <i class="fa fa-check"></i> Investment: 10 - 20 Lakhs  </p>
                        <p class="text-white" style="font-size: 21px;margin: 0;"> <i class="fa fa-check"></i> Zeal to be your own boss  </p>
                    </div>
                    <div class="ad-banner-sub-title">    
                        <div class="row">
                            <div class="col-md-3">
                                <div class="bg-white collaborate text-center">
                                    <img src="https://www.icajobguarantee.com/public/upload/2023-10-31/sap-fico-logo.webp">
                                </div>    
                            </div> 
                            <div class="col-md-3">
                                <div class="bg-white collaborate text-center">
                                    <img src="https://www.icajobguarantee.com/public/upload/2023-10-31/zoho-logo.webp">
                                </div>    
                            </div>   
                            <div class="col-md-3">
                                <div class="bg-white collaborate text-center">
                                    <img src="https://www.icajobguarantee.com/public/upload/2023-10-31/nsc-logo.webp">
                                </div> 
                            </div> 
                            <div class="col-md-3">
                                <div class="bg-white collaborate text-center">
                                    <img src="https://www.icajobguarantee.com/public/upload/2023-10-31/ica-nism-logo.webp">
                                </div> 
                            </div> 

                        </div>    
                    </div>
                </div>
            </div>
            <div id="apply" class="col-md-5">
                <div class="highlighted-content-wrapper text-center">
                <div class="ad_banner_form_wrapeer" >
                    <div class="register-fomr-title text-center">
                        <h4 class="bold-font text-white">Join the family of 100+ EdTech Chain in India</h4>
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
    
    
    <!-- Start of USP Bar
    ============================================= -->
    <section id="search-course" class="search-course-section search-course-secound">
        <div class="container">
            <div class="search-counter-up">
                <div class="row">
                    <div class="col-md-3">
                        <div class="counter-icon-number">
                            <div class="counter-icon">
                                <i class="text-gradiant flaticon-graduation-hat"></i>
                            </div>
                            <div class="counter-number">
                                <span class="counter-count bold-font">100 </span><span>+</span>
                                <p>Daily Admissions</p>
                            </div>
                        </div>
                    </div>
                    <!-- /counter -->

                    <div class="col-md-3">
                        <div class="counter-icon-number">
                            <div class="counter-icon">
                                <i class="text-gradiant flaticon-book"></i>
                            </div>
                            <div class="counter-number">
                                <span class="counter-count bold-font">100 </span><span>+</span>
                                <p>Pan India Franchises</p>
                            </div>
                        </div>
                    </div>
                    <!-- /counter -->

                    <div class="col-md-3">
                        <div class="counter-icon-number">
                            <div class="counter-icon">
                                <i class="text-gradiant flaticon-group"></i>
                            </div>
                            <div class="counter-number">
                                <span class="counter-count bold-font">4 Lacs </span><span>+</span>
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

    <!-- End of USP Bar
    ============================================= -->
    
    <!-- Start of course details section
    ============================================= -->
    <section id="mission" class="course-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">   
                    <div class="course-details-item">
                        <div class="course-single-pic mb30">
                            <img src="{{ url('public/upload/2023-10-31/pan-india.webp')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="side-bar">
                        <div class="side-bar-widget first-widget">
                            <h3 class="widget-title text-capitalize" style="font-size:25px" ><span>Let's Upskill India</span></h3>
                            <div class="latest-video-poster relative-position mb20">
                                <img src="{{ url('public/upload/2023-10-31/franchise-videothumb.webp') }}" alt="">
                                <div class="video-play-btn text-center gradient-bg">
                                    <a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=hjbKYGXJ7i4"><i class="fas fa-play"></i></a>
                                </div>
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
    
    
    <!-- Start of chairman message section
    ============================================= -->	
    <section id="message">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase"> A Mission and A Message </span>
                <h3>A social message from <span> Chairman </span> </h3>                
            </div>
            <div class="best-course-area mb10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="teacher-img-text relative-position text-center">
                            <div>
                                <iframe width="100%" height="282" src="https://www.youtube.com/embed/WkDyzRz9xn8?si=GZUsnhh4ZqIGf8zc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="four-grid-box">   
                            <div class="category-title">
                                <p>ICA Edu Skills began its journey in 1999 with a vision to train the job-focused youth in India and make them employable at an affordable fee. As the industry demands ‘skilled manpower’, we too, expanded our horizon by providing practical training to our students and support them with placement at top companies and MNCs. As a result, today we are considered as the pioneer in Accounts & Finance training nationwide, with our top-notch training centres across the country offering the widest range of practical skill building training programs. With the experience of having trained and placed over 4 lakh+ students, ICA has been recognized as India's Best Vocational Training Institute.</p>
                                <h4 class="text-right">- Dr. Narendra Shyamsukha</h4>
                                <p class="text-right">Founder & Chairman,<br />ICA Edu Skills Pvt. Ltd.<br />Largest EdTech Chain in India</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End of chairman message section
    ============================================= -->    

    <!-- Start of franchise success stories
    ============================================= -->	
    <section id="success-stories" class="best-course-section">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">Success Stories</span>
                <h3>What our <span> Franchisees have to say </span></h3>
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
    <!-- End of Franchise Success stories
    ============================================= -->    
    

    <!-- End Course category
        ============================================= -->
        <section id="benefits">
        <div class="container mt25">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">Franchise Benefits</span>
                <h3>What can <span> you expect </span></h3>
            </div>
            <div class="row">
                <img src="{{ url('public/upload/2023-10-31/benefits.webp') }}" >
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


    <!-- Start of why an education franchise section
    ============================================= -->	
    <section id="courses">
        <div class="container mt25">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">Why an EdTech Franchise?</span>
                <h3>Education Franchise - An Appealing Choice</span></h3>
            </div>
            <div class="best-course-area mb10">
                <div class="row">
                    <div class="col-md-3">
                        <div class="four-grid-box text-center">
                            <div class="my-3">
                                <img src="{{ url('public/upload/2023-10-31/international.webp') }}" >
                            </div>
                            <div class="category-title">
                                <h4>Cultural Aspect</h4>
                                <p>The cultural side is to tailor teaching methods and curriculum to local customs boosting engagement and trust that contributes to the overall success of the franchise within the community.</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="four-grid-box text-center">
                            <div class="my-3">
                                <img src="{{ url('public/upload/2023-10-31/etiquette.webp') }}" >
                            </div>
                            <div class="category-title">
                                <h4>Social Aspect</h4>
                                <p> The social responsibility that every Indian Entrepreneur should fulfill is providing education for building an exciting career opportunity for trained professionals and make them self-sufficient </p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="four-grid-box text-center">
                            <div class="my-3">
                                <img src="{{ url('public/upload/2023-10-31/growth.webp') }}" >
                            </div>
                            <div class="category-title">
                                <h4>Growing Need</h4>
                                <p> As India progresses towards becoming the World's third-largest economy, businesses expand, and regulations become more complex, there is a surging need for skilled accountants. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="four-grid-box text-center">
                            <div class="my-3">
                                <img src="{{ url('public/upload/2023-10-31/money.webp') }}" >
                            </div>
                            <div class="category-title">
                                <h4>Financially Rewarding</h4>
                                <p>Among the business ventures that yield considerable financial rewards, achieving early breakeven is especially feasible in education sector, provided operational efforts are conducted efficiently.</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of why an education franchise section
    ============================================= -->    

    <!-- Start of Franchise Model section
    ============================================= -->	
    <section id="model">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">Business Model</span>
                <h3>ICA <span> Franchise Model </span></h3>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Franchise Model section
    ============================================= -->    

    <!-- Start of why ICA partner section
    ============================================= -->
    <section id="why-ica">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">Business Model</span>
                <h3>Why<span> ICA Partner </span></h3>
            </div>            
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ url('public/upload/2023-10-31/franchise-left.webp')}}" >
                    
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6" >
                            <div class="four-grid-box text-center">
                                <div class="circle-icon">
                                    <img src="{{ url('assets/img/300-Centers.svg') }}" >
                                </div>
                                <div class="category-title">
                                    <h4>500K+ Satisfied Students</h4>
                                    <p>We have been expertly teaching and training students, college graduates, and professionals to prepare them academically and practically for facing the dynamic job market for over two decades.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="four-grid-box text-center">
                                <div class="circle-icon">
                                    <img src="{{ url('assets/img/Candidates-Placed.svg') }}" >
                                </div>
                                <div class="category-title">
                                    <h4>100+ centers in pan India</h4>
                                    <p>We have 100+ regional centers spread out over PAN India in 23+ states. Students who want to be future professionals can find the nearest training center from their homes and undergo a systematic training program.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="four-grid-box text-center">
                                <div class="circle-icon">
                                    <img src="{{ url('assets/img/State-Presence.svg') }}" >
                                </div>
                                <div class="category-title">
                                    <h4>30+ Placement Offices</h4>
                                    <p>We have a channel of 30+ placement offices across Pan India that connect and facilitate the process of matching qualified candidates from different regions with suitable employers and job opportunities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="four-grid-box text-center">
                                <div class="circle-icon">
                                    <img src="{{ url('assets/img/300-Centers.svg') }}" >
                                </div>
                                <div class="category-title">
                                    <h4>70k+ Registered Employers</h4>
                                    <p>We have access to a wide network of employers across Pan India who value professional skills and expertise. These Companies operate in diversified businesses and can offer you incredible job opportunities.</p>
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
    <!-- End of why ICA partner section
    ============================================= -->
    
    
    <!-- Start of application procedure section
    ============================================= -->    
    <section id="procedure">
        <div class="container mt25">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">Franchisee Process</span>
                <h3>Application Procedure for <span> Becoming Our Partner </span></h3>
            </div>            
            <div class="best-course-area mb10">
                <div class="row">
                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1 class="text-center"> 1 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Download the Brochure</h4>
                                <p>Download our franchise brochure to delve deeper into the ICA franchise business model.</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1 class="text-center"> 2 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Go through the Partnership Model</h4>
                                <p> Discover the details of our franchise business model by exploring our brochure. </p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1 class="text-center"> 3 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Discuss with a ICA Representative</h4>
                                <p> We'll reach out to you via phone to discuss your interest and explore potential partnership opportunities. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1 class="text-center"> 4 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Arrange for a face-to-face meeting</h4>
                                <p>Set a date for your visit to our ICA Head Office in Kolkata to delve deeper into your franchise business plan.</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1 class="text-center"> 5 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Examine the Service Partner Agreement</h4>
                                    <p>Upon successful submission of the necessary documents, you will be provided with a Service Partner Agreement.</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="four-grid-box text-center">
                            <div class="my-3 process-count">
                                <h1 class="text-center"> 6 </h1>
                            </div>
                            <div class="category-title">
                                <h4>Meet ICA Founders & The Network </h4>
                                <p>Communicate your vision, strategize, plan execution, and receive approval to commence with enthusiasm.</p>
                            </div>
                            <div class="category-description">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="genius-btn mb20 gradient-bg text-center text-uppercase ul-li-block bold-font">
                        <a data-toggle="modal" data-target="#franchise-lead-generation-form" href="javascript:void(0)" > <i class="fas fa-download" style="color: #fff;"></i> Request a Call Back </a>
                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!-- End of application procedure section
    ============================================= -->       

    <!-- Start team management section
		============================================= -->
    <section id="management" class="secound-teacher-section">
        <div class="container">
            <div class="section-title mb35 headline text-center">
                <span class="subtitle text-uppercase">Management</span>
                <h3>Management<span> Team </span></h3>
            </div>
            <div class="teacher-secound-slide">
                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="{{ url('public/upload/2023-10-31/nks.webp')}}" alt="">
                        <div class="blakish-overlay"></div>
                    </div>
                    <div class="teacher-name-designation mt15">
                       <span class="teacher-name">Dr. Narendra Shyamsukha</span><br />
                        <span class="teacher-designation">Chairman & Founder</span>
                        <p>A social Entrepreneur focused on Training and Skilling - Making 2lac+ people employable annually. An angel investor focused on EdTech.</p>
                    </div>
                </div>

                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="{{ url('public/upload/2023-10-31/ankit.webp')}}" alt="">
                        <div class="blakish-overlay"></div>
                    </div>
                    <div class="teacher-name-designation mt15">
                        <span class="teacher-name">Ankit Shyamsukha</span><br />
                        <span class="teacher-designation">Chief Executing Officer</span>
                        <p>An Entrepreneur. CEO of ICA Edu Skills was a Marketing Graduate from Christ University, Bangalore with a rich experience in operating EdTechs.</p>
                    </div>
                </div>

                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="{{ url('public/upload/2023-10-31/kanhiya.webp')}}" alt="">
                        <div class="blakish-overlay"></div>
                    </div>
                    <div class="teacher-name-designation mt15">
                        <span class="teacher-name">Kanhaiya Poddar</span><br />
                        <span class="teacher-designation">Chief Financial Officer</span>
                        <p>A finance professional graduated from ICAI. Skilled in Corporate Finance, Fund Raising, Cash Flow, Budgeting, Cost Optimisation, Leadership etc.</p>
                    </div>
                </div>

                <div class="teacher-img-text relative-position text-center">
                    <div class="teacher-img-social relative-position">
                        <img src="{{ url('public/upload/2023-10-31/tirthankar.webp')}}" alt="">
                        <div class="blakish-overlay"></div>
                    </div>
                    <div class="teacher-name-designation mt15">
                        <span class="teacher-name">Tirthankar Sanyal</span><br />
                        <span class="teacher-designation">CEO - Skill Vertical</span>
                        <p>A post-graduate in English from Calcutta University. Skilled in business communication and operating the execution of different processes in centers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- End of Team Management section
		============================================= -->
    
    <!--section id="faqs" class="teacher-details-area">
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
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section-->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection