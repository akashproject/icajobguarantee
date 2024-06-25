@extends('layouts.main')
    @section('content')
	<script>
         popUp = 0;
	</script>
	<!-- Start of breadcrumb section
		============================================= -->
	<section id="breadcrumb" class="inner-banner relative-position backgroud-style"  style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-9">

					<div class="inner-banner-breadcrumb" >
						<span class="breadcrumbElement"> 
							<a href="{{url('/')}}" > Home </a> 
						</span>
						<span class="breadcrumbElement"> 
							 <i class="fas fa-chevron-right"> </i>
						</span> 
						<span class="breadcrumbElement"> 
							{{(isset($contentMain))?$contentMain->name:"Default Page" }}
						 </span>
					</div>
					<div class="inner-banner-content">
						<div class="inner-banner-title">
							<h1>{{(isset($contentMain))?$contentMain->name:"Default Page" }}</h1>
						</div>
						<div class="inner-banner-description">
							{!! (isset($contentMain))?$contentMain->description:"Default Description" !!}
						</div>
					</div>
				</div>
				<div class="col-md-3">
					
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
									<span class="counter-count bold-font">25 </span> <span>Years</span>
									<p>of Excellence</p>
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
									<span class="counter-count bold-font">100</span> <span>+</span>
									<p>Pan India Centers</p>
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
									<span class="counter-count bold-font">4</span> <span>Lacs</span>
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
									<p>ICA Edu Skills began its journey in 1999 with a vision to train the job-focused youth in India and make them employable at an affordable fee. As the industry demands ‘Skilled Manpower’, we too, expanded our horizon by providing practical training to our students and support them with placement at top companies and MNCs.</p>
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
										<a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=VGXY8YiPPBU"><i class="fas fa-play"></i></a>
									</div>
								</div>
								<div class="course-desc">
									<p>ICA Edu Skills Franchise Opportunity | Be a Part of ICA Family | Let's Upskill India.</p>
								</div>								
							</div>
							<div class="genius-btn mb20 gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a data-toggle="modal" data-target="#franchise-lead-generation-form" href="javascript:void(0)" > <i class="fas fa-download" style="color: #fff;"></i> Download Brochure</a>
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
									<p>We have been successfully imparting knowledge to the Indian Youth in 16 states and 61+ cities in India for over 24 glorious years</p>
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
									<p>We have been successfully imparting knowledge to the Indian Youth in 16 states and 61+ cities in India for over 24 glorious years</p>
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
										<h4>500K+ Satisfied Students.</h4>
										<p> We have been expertly teaching and training students, college graduates, and professionals to prepare them academically and practically for facing the dynamic job market for over two decades. </p>
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
										<p> We have a channel of 30+ placement offices across Pan India that connect and facilitate the process of matching qualified candidates from different regions with suitable employers and job opportunities</p>
									</div>
								</div>
							</div>
							<div class="col-md-6" >
								<div class="four-grid-box text-center">
									<div class="circle-icon">
										<img src="{{ url('assets/img/300-Centers.svg') }}" >
									</div>
									<div class="category-title">
										<h4>70k+ Registered Employers.</h4>
										<p>We have access to a wide network of employers across Pan India who value professional skills and expertise. These Companies operate in diversified businesses and can offer you incredible job opportunities.</p>
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
							<li class="cat-item"> Investment of just 18-20 lakh </li>
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