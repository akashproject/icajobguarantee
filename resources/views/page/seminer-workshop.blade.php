@extends('layouts.ad-main')
    @section('content')
    {{$contentMain->sendBrochure = null}}
	<style>
		.sticky-footer{
			display:none;
		}
	</style>
<!-- Start of Header section
	============================================= -->
	<header>
		<div id="main-menu"  class="main-menu-container header-style-2">
			
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
<!-- Start of Header section
	============================================= -->
    <section id="breadcrumb" class="ad-page-banner relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});" >
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="ad-banner-content">
						<div class="ad-banner-title">
							<h1>Go Straight To Success, Your Stairway To A Job Begins Here</h1>
						</div>
						<div class="ad-banner-sub-title">
							<h2>Ensure Your Career With India’s 1st & Only 100 % Job Guarantee Courses in Accounts, Finance, Banking & Taxation</h2>
						</div>
						<div class="ad-banner-description">
							{!!(isset($contentMain))?$contentMain->description:"Course description" !!}
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="highlighted-content-wrapper text-center">
						<div class="ad_banner_form_wrapeer" >
							<div class="register-fomr-title text-center">
								<h3 class="bold-font"><span>Know your</span> Career Opportunity.</h3>
							</div>
							<div class="register-form-area text-left" >
							<form id="banner_lead_capture_form" class="lead_form" action="{{ url('capture-lead') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="form_process" >
									<div class="lead_steps step1 active" > 
									@csrf
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
										<input id="formFieldPincode" name="pincode" type="number" placeholder="Enter Your Address Pincode" min="100000" max="999999" autocomplete="off" required>
									</div>
									@if(isset($_GET['city']))
										<select class="center" name="center" required>
											<option value="">Select Center</option>
											@foreach(getCenterByCityId($_GET['city']) as $value)
												<option value="{{$value->name}}" data-id="{{$value->id}}"> {{$value->name}} </option>
											@endforeach
										</select>
									@endif

									@if(isset($_GET['state']))
										<select class="center" name="center" required>
											<option value="">Select Center</option>
											@foreach(getCenterByStateId($_GET['state']) as $value)
												<option value="{{$value->name}}" data-id="{{$value->id}}"> {{$value->name}} </option>
											@endforeach
										</select>
									@endif

									@if(isset($_GET['bucket']))
										<select class="center" name="center" required>
											<option value="">Select Center</option>
											@foreach(getCenterByBucket($_GET['bucket']) as $value)
												<option value="{{$value->name}}" > {{$value->name}} </option>
											@endforeach
										</select>
									@endif

									@if(isset($center))
										<input type="hidden" name="center" value="{{ (isset($center) )?$center:'' }}">
									@endif
									<input type="hidden" name="course_id" value="">
									<input type="hidden" name="brochure_id" value="">
										<div class="contact-info formFieldInstitute">
											<input id="formFieldInstitute" name="institute" type="text" placeholder="Enter your school/college name" autocomplete="off">
										</div>
										<div class="contact-info formFielQualification">
											<select name="qualification" id="formFielQualification" class="form-control">
												<option value="">Hightest Qualification</option>
												<option class="form-select-option" value="Class XI">Class XI</option>
												<option class="form-select-option" value="Class XII">Class XII</option>
												<option class="form-select-option" value="B.Com">B.Com</option>
												<option class="form-select-option" value="B.Sc">B.Sc</option>
												<option class="form-select-option" value="BA">BA</option>
												<option class="form-select-option" value="BBA">BBA</option>
												<option class="form-select-option" value="M.Com">M.Com</option>
												<option class="form-select-option" value="M.Sc">M.Sc</option>
												<option class="form-select-option" value="MA">MA</option>
												<option class="form-select-option" value="MBA">MBA</option>
												<option class="form-select-option" value="Others">Others</option>
											</select>
										</div>
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

	<!-- Start of Search Courses
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
									<span class="counter-count bold-font">53260</span><span>+</span>
									<p>Jobs In Naukri</p>
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
									<span class="counter-count bold-font">37642</span><span>+</span>
									<p>Jobs In Linkedin</p>
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
									<span class="counter-count bold-font">13194</span><span>+</span>
									<p>Jobs In Timejobs</p>
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
									<span class="counter-count bold-font">20000</span><span>/mo</span>
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
									<img src="{{ url('assets/img/icons/tick.png')}}" >
									<h6> 100% Job Guarantee </h6>
								</div>
							</div>
							<div class="col-md-4 col-6"> 
								<div class="key-highlights" >
									<img src="{{ url('assets/img/icons/tick.png')}}" >
									<h6> Triple Certification </h6>
								</div>
							</div>
							<div class="col-md-4 col-6"> 
								<div class="key-highlights" >
									<img src="{{ url('assets/img/icons/tick.png')}}" >
									<h6> Interactive E-Classes </h6>
								</div>
							</div>
							<div class="col-md-4 col-6"> 
								<div class="key-highlights" >
									<img src="{{ url('assets/img/icons/tick.png')}}" >
									<h6> Any Time Job Card Facility </h6>
								</div>
							</div>
							<div class="col-md-4 col-6"> 
								<div class="key-highlights" >
									<img src="{{ url('assets/img/icons/tick.png')}}" >
									<h6> Mock Interviews </h6>
								</div>
							</div>
							<div class="col-md-4 col-6"> 
								<div class="key-highlights" >
									<img src="{{ url('assets/img/icons/tick.png')}}" >
									<h6> 90% Practical + 10% Theory </h6>
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

	<!-- Start of testimonial secound section
	============================================= -->
	<section id="certificate" class="certification-section">
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
	</section>
	<!-- End  of testimonial secound section
	============================================= -->

	<!-- Start of testimonial secound section
	============================================= -->
	<section id="galleries" class="galleries-section">
		<div class="container">
			<div class="testimonial-slide">
				<div class="section-title mb20 headline text-center">
					<span class="subtitle text-uppercase">galleries</span>
					<h3>Classroom<span> Views.</span></h3>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="photo-list ul-li">
							<ul>
							@foreach(getGallery() as $key => $gallery)
								<li>
									<img src="{{ getSizedImage('',$gallery->image_id) }}" alt="">
									<div class="blakish-overlay"></div>
									<div class="pop-up-icon">
										<a href="{{ getSizedImage('',$gallery->image_id) }}" data-lightbox="roadtrip">
											<i class="fas fa-search"></i>
										</a>
									</div>
								</li>
							@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
								<img src="{{ (($testimonial->featured_image))?getSizedImage('',$testimonial->featured_image):'https://dummyimage.com/140x140' }}" alt="">	
							</div>					
						</div>
						{!! $testimonial->comment !!}
						<div class="student-name-designation">
							<span class="st-name bold-font">{{ $testimonial->name }}</span>
							<span class="st-designation">{{ $testimonial->dasignation }}</span>
						</div>
						<div class="alumni-placed-at text-center">
							<img src="{{ isset(getRecruterById($testimonial->placed_at)->featured_image)?getSizedImage('',getRecruterById($testimonial->placed_at)->featured_image):'' }}"  Alt="">
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
										@foreach(getFaqs("Course") as $key => $value)
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