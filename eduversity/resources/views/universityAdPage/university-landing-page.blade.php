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
									<li><a href="mailto:{{get_theme_setting('email')}}" ><i class="fas fa-envelope"></i> {{get_theme_setting('university_email')}}</a></li>
									<li><a href="tel:{{get_theme_setting('mobile')}}" ><i class="fas fa-phone-square"></i> {{get_theme_setting('university_mobile')}}</a></li>
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
							<a class="navbar-brand text-uppercase" href="javascript:void(0)"><img src="https://www.icajobguarantee.com/assets/images/logo.png" alt="ICA Edu Skills"></a>
								
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
							<div class="logo"><a href="javascript:void(0)"><img src="https://www.icajobguarantee.com/assets/images/logo.png" alt="Logo"></a></div>
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
<!-- Start of Header section
	============================================= -->
		<!-- Start of breadcrumb section
		============================================= -->
	<section id="breadcrumb" class="ad-page-banner relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});" >
		<div id="overlay"></div>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="ad-banner-content">
							<div class="ad-banner-title">
								<h1>The Only 3 Years Bachelor Degree That Gives You 1 Year Work Experience!</h1>
							</div>
							<div class="ad-banner-sub-title">
								<h2>Why Settle for Traditional Graduation Programs? Join <span style="font-size: 30px;color: #393185;font-weight: 800;">{{$university->name}}</span> to power up your career. </h2>
							</div>
							
						</div>
					</div>
					<div class="col-md-5">
						<div class="highlighted-content-wrapper text-center" >
							<div class="ad_banner_form_wrapeer" style="background: #babae7;">
								<div class="register-fomr-title text-center">
									<h3 class="bold-font"><span>Know your</span> Career Opportunity.</h3>
								</div>
								<div class="register-form-area text-left" >
									<form id="eduvarsity_lead_capture_form" class="contact_form lead_form text-white" action="{{ url('eduversity-capture-lead') }}" method="POST" enctype="multipart/form-data">
										<div class="form_process" >
											<div class="lead_steps step1 active" > 
												@include('common.leadCaptureFormField')
												<div class="form-group disclaimer text-left">
													<p style="margin:0">
														<input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fa fa-whatsapp" style="color: green;"></i> whatsapp. 
													</p>
													<p>
														<input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS. 
													</p>
												</div>
											</div>
											@include('common.leadCaptureFormOtpField')                           
										</div>
									</form>  
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

	<!-- Start of Search Courses
		============================================= -->
		<section id="usp" class="search-course-section search-course-secound">
			<div class="container">
				<div class="search-counter-up">
					<div class="row">
						<div class="col-md-4">
							<div class="counter-icon-number "  >
								<div class="counter-icon">
									<i class="text-gradiant flaticon-graduation-hat"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">2000</span><span>+</span>
									<p>Students Enrolled</p>
								</div>
							</div>
						</div>
						<!-- /counter -->

						<div class="col-md-4">
							<div class="counter-icon-number "  >
								<div class="counter-icon">
									<i class="text-gradiant flaticon-book"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">800</span><span>+</span>
									<p>Total Students Placed</p>
								</div>
							</div>
						</div>
						<!-- /counter -->

						
						<!-- /counter -->

						<div class="col-md-4">
							<div class="counter-icon-number "  >
								<div class="counter-icon">
									<i class="text-gradiant flaticon-group"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">25000</span><span>/mo</span>
									<p>Average Salary</p>
								</div>
							</div>
						</div>
						<!-- /counter -->
					</div>
				</div>
			</div>
		</section>
	<!-- End of Search Courses
		============================================= -->
<!-- Hightlists section
		============================================= -->
		<section id="about" class="highlights-section">
			<div class="container">
				
				<div class="row">
					<div class="col-md-7 mt10">
						<div class="section-title mb35 headline text-center">
							<span class="subtitle text-uppercase"> About Us</span>
							<h3>About Us</h3>
						</div>
						<div class="section-title mb20 headline">
							<h6>
								Welcome to {{ $university->name }}, where excellence meets opportunity. Our Bachelor program goes beyond traditional education, empowering students to gain a competitive edge in today's dynamic world. What sets us apart is the perfect blend of 2 years rigorous classroom training, 1 year paid internship in top-tier companies, practical hands-on experience, and unwavering placement support. Prepare to have your future transformed in just three years!
							</h6>
						</div>
					</div>
					<div class="col-md-5 mb20 text-center">
						<img src="{{ getSizedImage('',$university->featured_image) }}" style="padding: 12px;background: #e3e3e3;border-radius: 22px;">
					</div>
				</div>
			</div>
		</section>

	<!-- End Hightlists section
	============================================= -->

	<!-- Hightlists section
		============================================= -->
		<section id="about" class="highlights-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5 mb20 text-center">
						<img src="https://www.myidcm.com/wp-content/uploads/2022/10/IDCM-Landing-Page_Image-500×580-1-1.png">
					</div>
					<div class="col-md-7 mt10">
						<div class="section-title mb20 headline text-center">
							<span class="subtitle text-uppercase">Key Highlights </span>
							<h3>Best Prefferd<span> Modules.</span></h3>
						</div>
						<div class="row text-center">
							<div class="col-md-4 col-6"> 
								<div class="key-highlights" >
									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >
									<h6> Comprehensive Program </h6>
								</div>
							</div>
							<div class="col-md-4 col-6"> 
								<div class="key-highlights" >
									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >
									<h6> Practical Training </h6>
								</div>
							</div>
							<div class="col-md-4 col-6"> 
								<div class="key-highlights" >
									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >
									<h6> 2 Years Classroom Training </h6>
								</div>
							</div>
							<div class="col-md-4 col-6"> 
								<div class="key-highlights" >
									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >
									<h6> 1 Year Paid Internship </h6>
								</div>
							</div>
							<div class="col-md-4 col-6"> 
								<div class="key-highlights" >
									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >
									<h6> Any Time Job (ATJ) Card </h6>
								</div>
							</div>
							<div class="col-md-4 col-6"> 
								<div class="key-highlights" >
									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >
									<h6> 100% Assured Placement </h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<!-- End Hightlists section
	============================================= -->
	<!-- Start secound testimonial section
		============================================= -->
	<section id="recruiters" class="sponsor-section">
		<div class="container">
			<div class="section-title mb35 headline text-center">
				<span class="subtitle text-uppercase">Student Placement</span>
				<h3>Our Alumni <span>Worked At.</span></h3>
			</div>
			<div class="row" >
				@foreach(getRecruiters() as $value)
					<div class="col-md-2 col-lg-2 col-6 mt10 mb20" >
						<div class="placement-grid" >
							<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'https://dummyimage.com/140x140' }}" alt="">		
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- End secound testimonial section
		============================================= -->
		<!-- Start of best course
	============================================= -->
	<!-- Start of recent view product
		============================================= -->
	<section id="course" class="best-course-section">
		<div class="container">
			<div class="section-title mb10 headline text-center">
				<span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
				<h3>Choose our<span> Best Courses.</span></h3>
			</div>
			<div class="best-course-area mb10">
				<div class="row justify-content-center">
				@if(getCourses($university->courses))
					@foreach (getCourses($university->courses) as $value)
					<div class="col-md-3">
						<div class="best-course-pic-text relative-position">
							<div class="best-course-pic relative-position">
								<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):url('/assets/img/course/bc-1.jpg') }}" alt="">
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
									<a href="#detail-course">Know More <i class="fas fa-arrow-right"></i></a>
								</div>
								<div class="blakish-overlay"></div>
							</div>
							<div class="best-course-text">
								<div class="course-title mb10 headline relative-position">
									<h3><a href="#detail-course">{{ $value->name }}</a></h3>
								</div>
								<div class="course-short-description mb10" >
									{!! substr($value->excerpt,0,100); !!}...
								</div>
							</div>
							<div class="more-btn text-center" >
								<div class="course-type-list">	
									<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $value->id }},'')"><i class="fas fa-download"></i> Brochure</a>
								</div>
								<div class="course-type-list">														
									<a class="btn-outline course-detail-tab-btn" data-id="course-view-{{$value->id}}" href="#detail-course" >View More <i class="fas fa-caret-right"></i></a>
								</div>														
							</div>
						</div>
					</div>
					<!-- /course -->
				@endforeach	
					@endif	
					
				</div>
			</div>
		</div>
	</section>
	<!-- End of recent view product
		============================================= -->
	<!-- /course-categori -->
	<!-- End of best course
	============================================= -->
	<section id="detail-course" class="course-detail-section">
		<div class="container">
			@foreach(getCourses($university->courses) as $key => $course)
				<div id="course-view-{{$course->id}}" class="course-view-content {{ ($key == 0)?'active':'' }}">
					<div class="section-title mb45 headline text-center">
						<span class="subtitle text-uppercase">COURSES DETAILS</span>
						<h3><span>  {{ $course->name }}</span></h3>
					</div>
					<div class="row" >
						<div class="col-md-9">
							<div class="course-details-item">
								
								<div class="faq-tab mb65">
									<div class="faq-tab-ques  ul-li">
										<div class="course-details-category ul-li tab-button text-left mb25 tab-button text-left mb25">
											<span>Course <b>Section:</b></span>
											<ul class="product-tab ">
												<li class="active" rel="{{$course->slug}}1"> Summary </li>												
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
																					<span>{{ $carriculam->duration }}</span>
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

						<div class="col-md-3">
							<div class="side-bar">
								@if(isset($course->course_video_image) || $course->course_video_image > 0)
								<div class="latest-area-content " >
									<div class="latest-video-poster relative-position mb20">
										<img src="{{ getSizedImage('mobile',$course->course_video_image) }}" alt="">
										<div class="video-play-btn text-center gradient-bg">
											<a class="popup-with-zoom-anim" href="{{$course->course_video_link}}"><i class="fas fa-play"></i></a>
										</div>
									</div>
									<div class="vidoe-text text-center">
										<h3 class="latest-title bold-font"><a href="#">{{$course->course_video_title}}</a></h3>
									</div>
								</div>
								@endif
								<div class="enrolled-student mt15">								
									<div class="comment-ratting float-left ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>	
									</div>
									
									<div class="student-number bold-font">
										{{ thousandsCurrencyFormat($course->number_of_rating) }} Rating
									</div>
								</div>
								<div class="couse-feature ul-li-block">
									<ul>
										<li>Enrolled <span>{{ thousandsCurrencyFormat($course->number_of_enrolled) }} Enrolled </span></li>
										<li>Duration <span>{{ $course->duration }}</span></li>
										<li>Call  <a href="tel:{{ get_theme_setting('university_mobile') }}" ><span>+91 {{ get_theme_setting('university_mobile') }}</span></a> </li>
									</ul>
								</div>
								<div class="course-side-bar-widget">
									<div class="genius-btn gradient-bg text-center text-uppercase float-left bold-font">
										<a onclick="lead_capture_form_btn({{ $university->id }},'')" href="javascript:void(0)"> <i class="fas fa-download"></i> Download Syllabus</a>
									</div>
									<div class="like-course">
										<a href="#"><i class="fas fa-heart"></i></a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</section>

	<!-- Start of testimonial secound section
	============================================= -->
	<!-- <section id="certificate" class="certification-section">
		<div class="container">
			<div class="certificate-slide">
				<div class="section-title mb20 headline text-center">
					<span class="subtitle text-uppercase">Certification</span>
					<h3>Issued<span> Certificates.</span></h3>
				</div>
				<div id="certificate-slide-item" class="certificate-slide-area">
					<div class="certificate-list row">
						<div class="col-md-8" >
							<div class="section-title-2 mb65 headline text-left">
								<h2>CIA<span> Certificate.</span></h2>
							</div>
							<p>  I had zero confidence level. Thanks to rigorous mock interview sessions I was able to crack all the interview rounds and today my dream to work in an MNC came true..." </p>
							<ul>
								<li>I had zero confidence level. Thanks to rigorous mock interview sessions</li>
								<li>I had zero confidence level. Thanks to rigorous mock interview sessions</li>
							</ul>
							<p>  I had zero confidence level. Thanks to rigorous mock interview sessions I was able to crack all the interview rounds and today my dream to work in an MNC came true..." </p>
							<p>  I had zero confidence level. Thanks to rigorous mock interview sessions I was able to crack all the interview rounds and today my dream to work in an MNC came true..." </p>
						</div>
						<div class="col-md-4" >
							<img src="{{getSizedImage('',63)}}" >
							<div class="course-side-bar-widget">
								<div class="genius-btn gradient-bg text-center text-uppercase float-left bold-font">
									<a onclick="lead_capture_form_btn(1,'')" href="javascript:void(0)">  Apply Certificate <i class="fas fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="certificate-list row">
						<div class="col-md-8" >
							<div class="section-title-2 mb65 headline text-left">
								<h2>MicroSoft<span> Certificate.</span></h2>
							</div>
							<p>  I had zero confidence level. Thanks to rigorous mock interview sessions I was able to crack all the interview rounds and today my dream to work in an MNC came true..." </p>
							<ul>
								<li>I had zero confidence level. Thanks to rigorous mock interview sessions</li>
								<li>I had zero confidence level. Thanks to rigorous mock interview sessions</li>
							</ul>
							<p>  I had zero confidence level. Thanks to rigorous mock interview sessions I was able to crack all the interview rounds and today my dream to work in an MNC came true..." </p>
							<p>  I had zero confidence level. Thanks to rigorous mock interview sessions I was able to crack all the interview rounds and today my dream to work in an MNC came true..." </p>
						</div>
						<div class="col-md-4" >
							<img src="{{getSizedImage('',62)}}" >
							<div class="course-side-bar-widget">
								<div class="genius-btn gradient-bg text-center text-uppercase float-left bold-font">
									<a onclick="lead_capture_form_btn(1,'')" href="javascript:void(0)"> Apply Certificate <i class="fas fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="certificate-list row">
						<div class="col-md-8" >
							<div class="section-title-2 mb65 headline text-left">
								<h2>SAP<span> Certificate.</span></h2>
							</div>
							<p>  I had zero confidence level. Thanks to rigorous mock interview sessions I was able to crack all the interview rounds and today my dream to work in an MNC came true..." </p>
							<ul>
								<li>I had zero confidence level. Thanks to rigorous mock interview sessions</li>
								<li>I had zero confidence level. Thanks to rigorous mock interview sessions</li>
							</ul>
							<p>  I had zero confidence level. Thanks to rigorous mock interview sessions I was able to crack all the interview rounds and today my dream to work in an MNC came true..." </p>
							<p>  I had zero confidence level. Thanks to rigorous mock interview sessions I was able to crack all the interview rounds and today my dream to work in an MNC came true..." </p>
						</div>
						<div class="col-md-4" >
							<img src="{{ getSizedImage('',61) }}" >
							<div class="course-side-bar-widget">
								<div class="genius-btn gradient-bg text-center text-uppercase float-left bold-font">
									<a onclick="lead_capture_form_btn(1,'')" href="javascript:void(0)">  Apply Certificate <i class="fas fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End  of testimonial secound section
	============================================= -->

	<!-- Start of testimonial secound section
	============================================= -->
	<section id="alumni" class="testimonial_2_section">
		<div class="container">
			<div class="testimonial-slide">
				<div class="section-title mb20 headline text-center">
					<span class="subtitle text-uppercase">About This Course </span>
					<h3>Student<span> Speaks.</span></h3>
				</div>
				<div  id="testimonial-slide-item" class="testimonial-slide-area">
					@foreach(getTestimonials() as $testimonial)						
					<div class="student-qoute">
						<div class="course-pic relative-position text-center">
							<div class="circle-img">
								<img src="{{ (isset($testimonial->featured_image))?getSizedImage('',$testimonial->featured_image):'https://dummyimage.com/140x140' }}" alt="">	
							</div>					
						</div>
						{!! $testimonial->comment !!}
						<div class="student-name-designation">
							<span class="st-name bold-font">{{ $testimonial->name }}</span>
							<span class="st-designation">{{ $testimonial->dasignation }}</span>
						</div>
						<div class="alumni-placed-at text-center">
							<img src="{{ isset(getRecruterById($testimonial->placed_at)->featured_image)?getSizedImage('',getRecruterById($testimonial->placed_at)->featured_image):'https://dummyimage.com/32' }}" >
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- End  of testimonial secound section
	============================================= -->

	<section id="faq" class="teacher-details-area">
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
									@foreach(getFaqs("University") as $key => $value)
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