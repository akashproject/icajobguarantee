@extends('layouts.main')

    @section('content')
    <!-- Start of breadcrumb section
		============================================= -->
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});">
		<div class="container">
			<div class="page-breadcrumb-content">
				<div class="page-breadcrumb-title">
					<h1 class="page-heading bold">
						Career Growth Begins With
					</h1>
				</div>
				<div class="page-subheading">
					<h2> Right Placement. </h2>
					<h3> Gain the upper hand through our extensive network of world-renowned industry and placement partners. </h3>
				</div>
				<div class="page-description mt10">
					
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
									<p>Daily Placement</p>
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
									<p>All India Vacency</p>
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
									<span class="counter-count bold-font">25</span><span>k +</span>
									<p>Monthly Income</p>
								</div>
							</div>
						</div>
						<!-- /counter -->

						<div class="col-md-3">
							<div class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a data-toggle="modal" data-target="#job-application-form" href="javascript:void(0)" > Apply For Placement </i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of Search Courses
	============================================= -->

	<!-- End of course details section
		============================================= -->	
		<section id="courses" class="best-course-section">
			<div class="container">
				<div class="section-title mb35 headline text-center">
					<span class="subtitle text-uppercase">Five Steps</span>
					<h3>ICA<span> 100% job guarantee.</span></h3>
				</div>
				<div class="best-course-area mb35">
					<div class="row">
						<div class="four-grid-slide text-center">
							<div class="four-grid-box text-center">
								<div class="circle-icon">
									<img src="https://dummyimage.com/99x99" >
								</div>
								<div class="category-title">
									<h4>Complete the training</h4>
								</div>
								<div class="category-description">
									
								</div>
							</div>

							<div class="four-grid-box text-center">
								<div class="circle-icon">
									<img src="https://dummyimage.com/99x99" >
								</div>
								<div class="category-title">
									<h4>Biodata preparation</h4>									
								</div>
								<div class="category-description">
									
								</div>
							</div>

							<div class="four-grid-box text-center">
								<div class="circle-icon">
									<img src="https://dummyimage.com/99x99" >
								</div>
								<div class="category-title">
									<h4>Biodata preparation</h4>
								</div>
							</div>

							<div class="four-grid-box text-center">
								<div class="circle-icon">
									<img src="https://dummyimage.com/99x99" >
								</div>
								<div class="category-title">
									<h4>Biodata preparation</h4>
								</div>
								<div class="category-description">
									
								</div>
							</div>

							<div class="four-grid-box text-center">
								<div class="circle-icon">
									<img src="https://dummyimage.com/99x99" >
								</div>
								<div class="category-title">
									<h4>Biodata preparation</h4>
								</div>
								<div class="category-description">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<!-- Start secound testimonial section
		============================================= -->
		<section id="sponsor" class="sponsor-section">
			<div class="container">
				<div class="section-title mb35 headline text-center">
					<span class="subtitle text-uppercase">Student Placement</span>
					<h3>Our Alumni <span>Worked At.</span></h3>
				</div>
				<div class="row" >
					@foreach(getPlacements() as $value)
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
	<!-- Start secound testimonial section
		============================================= -->
		<section id="sponsor" class="best-course-section student_benefits">
			<div class="container">
				<div class="section-title mb35 headline text-center">
					<span class="subtitle text-uppercase">Student benefits</span>
					<h3>Right from your professional <span>Growth and Development.</span></h3>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="items mt60">
							<ul>
								<li>
									<img src="https://jetking.com/assets/img/practical-learning.svg">
									<div class="name"> Learn practically </div>
								</li>
								<li class="line_seperator"></li>
								<li>
									<img src="https://jetking.com/assets/img/english.svg">
									<div class="name"> Learn practically </div>
								</li>
								<li class="line_seperator"></li>
								<li>
									<img src="https://jetking.com/assets/img/interview.svg">
									<div class="name"> Learn practically </div>
								</li>
								<li class="line_seperator"></li>
								<li>
									<img src="https://jetking.com/assets/img/get-jobs.svg">
									<div class="name"> Learn practically </div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End secound testimonial section
		============================================= -->
	<!-- Start of sponsor section
	============================================= -->
	<section id="sponsor" class="sponsor-section">
		<div class="container">
			<div class="section-title-2 mb65 headline text-left "  >
				<h2>Five steps towards <span>100% job guarantee.</span></h2>
				<p>Explore placement opportunities and find the right one for you with our complete support. </p>
			</div>
			
			<div class="text-center">
				<img src="{{url('assets/img/career-growth.svg')}}" >
			</div>
		</div>
	</section>

	
	<!-- Start secound testimonial section
		============================================= -->
		<section id="testimonial-secound" class="secound-testimoinial-section">
			<div class="container">
				<div class="testimonial-slide">
					<div class="section-title mb35 headline text-center">
						<span class="subtitle text-uppercase">Student Testimoinial</span>
						<h3>What are they <span>saying about us.</span></h3>
					</div>

					<div class="testimonial-secound-slide-area">
						@foreach(getTestimonials() as $value)
						<div class="student-qoute text-center">
							<div class="circle-img">
								<img src="{{ (isset($value->featured_image))?getSizedImage('',	$value->featured_image):'https://dummyimage.com/140x140' }}" alt="">	
							</div>
							<p>{!!$value->comment!!}</p>
							<div class="student-name-designation">
								<span class="st-name bold-font">{{$value->name}}</span>
								<span class="st-designation"> {{ $value->dasignation }}</span>
							</div>
						</div>
						@endforeach
					</div>
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