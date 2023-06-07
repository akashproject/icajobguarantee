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
									@foreach ($adHeaderMenu as $key => $menuItem)
										<li class="">
											<a href="{{ url($key) }}">{{ $menuItem }}</a>
										</li>
									@endforeach
								</ul>
							</div>
						</nav>

						<div class="mobile-menu">
							<div class="logo"><a href="javascript:void(0)"><img src="{{ url('assets/img/logo/logo.png') }}" alt="Logo"></a></div>
							<nav>
								<ul>
									@foreach ($adHeaderMenu as $key => $menuItem)
										<li class="">
											<a href="{{ url($key) }}">{{ $menuItem }}</a>
										</li>
									@endforeach
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>	

	<section id="breadcrumb" class="ad-page-banner relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});" >
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="ad-banner-content">
						<div class="ad-banner-title">
							<h1>Looking To Be An Accounts Manager? Secure Your Career In 6 Months</h1>
						</div>
						<div class="ad-banner-sub-title">
							<h2> Are you struggling to choose your career? Book Your Free One-To-One Counselling Session Now! </h2>
						</div>
						<div class="ad-banner-description">
							{!!(isset($contentMain))?$contentMain->description:"Course description" !!}
						</div>
						<div class="ad-banner-option">
							<span class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                                <a data-toggle="modal" data-target="#franchise-lead-generation-form" href="javascript:void(0)" > Download Brochure </i></a>
							</span>

							<span class="apply-now">
                                <a data-toggle="modal" data-target="#franchise-lead-generation-form" href="javascript:void(0)" > Get A Quote </i></a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="highlighted-content-wrapper text-center">
						<div class="latest-area-content mt60" >
							
							<div class="latest-video-poster relative-position mb20">
								<img src="{{url('assets/img/letest-video.webp')}}" alt="">
								<div class="video-play-btn text-center gradient-bg">
									<a class="popup-with-zoom-anim" href="https://youtu.be/vV1urFhrijY"><i class="fas fa-play"></i></a>
								</div>
							</div>
							<div class="vidoe-text">
								<h3 class="latest-title bold-font"><a href="#">Learning With ICA Edu Skills.</a></h3>
								<p class="mb25">Certified Industrial Accountant | Accounts Training Institute | Placement Support | ICA Edu Skills.</p>
							</div>
							<div class="view-all-btn bold-font">
								<a href="https://www.youtube.com/@ICAEduSkills">View All Videos <i class="fas fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- End of breadcrumb section
    ============================================= -->
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
                                <span class="counter-count bold-font">10 </span><span>K+</span>
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
                            <a data-toggle="modal" data-target="#franchise-lead-generation-form" href="javascript:void(0)" > <i class="fas fa-download" style="color: #fff;"></i> Get Online Brochure</a>
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
                        <li class="cat-item"> Investment of just 15-20 lakh </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection