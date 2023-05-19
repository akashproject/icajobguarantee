@extends('layouts.ad-main')
    @section('content')
    <section id="breadcrumb" class="ad-page-banner relative-position backgroud-style">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="ad-banner-content">
						<div class="ad-banner-title">
							<h1>Advanced Certification in Data Science and AI</h1>
						</div>
						<div class="ad-banner-sub-title">
							<h2> Learn from IIT Madras Faculty &amp; Industry Experts with Campus Immersion at IIT Madras </h2>
						</div>
						<div class="ad-banner-description">
							{!!(isset($contentMain))?$contentMain->description:"Course description" !!}
						</div>
						<div class="ad-banner-option">
							<span class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>
							</span>

							<span class="apply-now">
								<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Apply Now </a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="highlighted-content-wrapper text-center">
						<img src="https://www.icajobguarantee.com/wp-content/uploads/2021/12/features-3.png">
					</div>
				</div>
			</div>
		</div>
	</section>

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
									<span class="counter-count bold-font">5 </span><span>M+</span>
									<p>Students Enrolled</p>
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
									<span class="counter-count bold-font">122</span><span>.500+</span>
									<p>Online Available Courses</p>
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
									<span class="counter-count bold-font">15</span><span>.000+</span>
									<p>Premium Quality Products</p>
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
									<span class="counter-count bold-font">7</span><span>.500+</span>
									<p>Teachers Registered</p>
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
		<section id="key-highlights" class="highlights-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<img src="https://dummyimage.com/465">
					</div>
					<div class="col-md-7">
						<div class="section-title mb20 headline text-center">
							<span class="subtitle text-uppercase">Key Highlights </span>
							<h3>Best Prefferd<span> Modules.</span></h3>
						</div>
						<div class="row text-center">
							<div class="col-md-4"> 
								<div class="highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> 100% Job Assurance Courses </h6>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> 200+ Tools </h6>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> 9 Super Specializations </h6>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> Industry Case Study </h6>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> 160 Hrs Assignments </h6>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> 100% Placement Support </h6>
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
		<section id="sponsor" class="sponsor-section">
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
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection