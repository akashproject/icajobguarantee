@extends('layouts.main')

    @section('content')
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
								<a href="{{ url('/courses' ) }}" > Explore Courses </i></a>
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
					<h3>Connecting Talent with <span>Job Opportunities</span></h3>
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

	<!-- Start secound testimonial section
		============================================= -->
		<section id="sponsor" class="best-course-section">
			<div class="container">
				<div class="section-title mb35 headline text-center">
					<span class="subtitle text-uppercase">Student Placement</span>
					<h3>Our Alumni <span>Worked At.</span></h3>
				</div>
				<div class="row" >
					<div class="col-md-12" >
						@foreach(getJoinees() as $value)
						<div class="placed-grid-box">
							<div class="image-box">
								<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'https://dummyimage.com/140x140' }}">
							</div>
							<div class="box-content">
								<div class="box-title mt10">
									<h4>{{ $value->name }}</h4>
								</div>
								<p> Studied From : <strong ><a class="primary-color" target="_blank" href="/centers/{{getCenterById($value->center_id)->slug }}"> {{ getCenterById($value->center_id)->name }}</a> </strong> </p>
								<p> Placed At: <strong >{{ $value->placed_at }} </strong> </p>
								<p> Joining Salary: <strong >{{ number_format($value->joining_salary) }} </strong ></p>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	<!-- End secound testimonial section
		============================================= -->

		<section id="sponsor" class="best-course-section">
			<div class="container">
				<div class="section-title mb35 headline text-center">
					<span class="subtitle text-uppercase">Student Placement</span>
					<h3>What Makes ICA the Leader in the <span>Job Market?</span></h3>
					<p> With Any Time Job (ATJ) Card, students who enrolled in Job Guaranteed Courses get additional placement support even after they leave the institution. </p>
				</div>
				<div class="row" >
					<div class="col-md-6" >
						<img src="{{ url('assets/img/atj-front.jpg') }}">
					</div>
					<div class="col-md-6" >
					<img src="{{ url('assets/img/atj-back.jpg') }}">
					</div>
				</div>
			</div>
		</section>


		<section id="sponsor" class="best-course-section">
			<div class="container">
				<div class="section-title mb35 headline text-center">
					<span class="subtitle text-uppercase">Student Placement</span>
					<h3>How are <span> ICA Students</span> always ahead of the competitions?</h3>
					<p> We know what employers want. With our unique and innovative Personality Development Programs like mock sessions, gamifications we make you industry-ready. </p>
				</div>
				<div class="row">
					<div class="col-md-6 text-right border-timeline p30">
						<h3 class="primary-color">Monthly Mock Interviews</h3>
						<p> We provide practice and preparation for our students who are seeking employment or aiming to improve their interview skills. </p>
					</div>
					<div class="col-md-6 p30">
						<img src="{{ url('assets/img/mi.png') }}">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-right border-timeline p30">
						<img src="{{ url('assets/img/mi.png') }}">
					</div>
					<div class="col-md-6 p30">
						<h3 class="primary-color">GDPI / SOBO </h3>
						<p> We organize GDPI (Group Discussion &amp; Personal Interview) , also known as SOBO (Speak Out Bowled Out) to help students develop critical thinking skills, effective communication, confidence building, teamwork and collaboration and much more. </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-right border-timeline p30">
						<h3 class="primary-color">Excel Ka Don</h3>
						<p> Using Ms Excel, we make our students capable in data analysis and management, reporting and visualization, financial analysis and modeling, project management as per industry demand. </p>
					</div>
					<div class="col-md-6 p30">
						<img src="{{ url('assets/img/mi.png')}}">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-right border-timeline p30">
						<img src="{{ url('assets/img/mi.png')}}">
					</div>
					<div class="col-md-6 p30">
						<h3 class="primary-color">Tally Ka Boss </h3>
						<p> We help you make fit for the corporates by excelling on TallyPrime for accounting and bookkeeping, GST compliance features, financial reporting and analysis, inventory management, payroll management and much more. </p>
					</div>
				</div>
			</div>
		</section>
		
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection