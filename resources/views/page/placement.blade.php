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
									<span class="counter-count bold-font">30</span><span>+</span>
									<p>Placement Offices</p>
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
									<img src="{{ url('assets/img/icons/education.png') }}" >
								</div>
								<div class="category-title">
									<h4>Training Completion</h4>
								</div>
								<div class="category-description">
									
								</div>
							</div>

							<div class="four-grid-box text-center">
								<div class="circle-icon">
									<img src="{{ url('assets/img/icons/cv.png') }}" >
								</div>
								<div class="category-title">
									<h4>CV Preparation</h4>									
								</div>
								<div class="category-description">
									
								</div>
							</div>

							<div class="four-grid-box text-center">
								<div class="circle-icon">
									<img src="{{ url('assets/img/icons/job-interview.png') }}" >
								</div>
								<div class="category-title">
									<h4>Mock Interviews</h4>
								</div>
							</div>

							<div class="four-grid-box text-center">
								<div class="circle-icon">
									<img src="{{ url('assets/img/icons/interview.png') }}" >
								</div>
								<div class="category-title">
									<h4>Student Interviews</h4>
								</div>
								<div class="category-description">
									
								</div>
							</div>

							<div class="four-grid-box text-center">
								<div class="circle-icon">
									<img src="{{ url('assets/img/icons/appointment.png') }}" >
								</div>
								<div class="category-title">
									<h4>Appointment Letter</h4>
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
				<div class="row">
					<div class="col-md-6">
						<div class="section-title mb35 headline text-center">
							<span class="subtitle text-uppercase">Student Placement</span>
							<h3>Why ICA Leading the <span>Job Market?</span></h3>
							<!-- <p> With Any Time Job (ATJ) Card, students who enrolled in Job Guaranteed Courses get additional placement support even after they leave the institution. </p> -->
						</div>
						<div class="row" >
							<div class="col-md-12" >
								<div class="">
									<img src="{{ url('assets/img/atj-front.png') }}">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="section-title mb35 headline text-center">
							<span class="subtitle text-uppercase">Student Placement</span>
							<h3>Our Alumni <span>Worked At.</span></h3>
						</div>
						<div class="row" >
							@foreach(getRecruiters() as $value)
								<div class="col-md-3 col-lg-3 col-6 mt10 mb20" >
									<div class="placement-grid" >
										<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'https://dummyimage.com/140x140' }}" alt="">		
									</div>
								</div>
							@endforeach
						</div>
					</div>
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
								<img src="{{ url('assets/img/placements/'.strtolower(str_replace(' ','-',$value->name)).'.png') }}" alt="Student {{ $value->name }} placement in {{getCourseById($value->course_id)->name}} in {{ getCenterById($value->center_id)->name }}" style="height: 100%;">
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
					<div class="col-md-12 mt10" >
						<div class="genius-btn mb20 gradient-bg text-center text-uppercase ul-li-block bold-font" style="margin: auto;">
							<a href="javascript:void(0)"> <i class="fas fa-avator" style="color: #fff;"></i> View All Students</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End secound testimonial section
		============================================= -->

		<section id="sponsor" class="best-course-section">
			<div class="container">
				
			</div>
		</section>

		<section id="sponsor" class="best-course-section">
			<div class="container">
				<div class="section-title mb35 headline text-center">
					<span class="subtitle text-uppercase">Student Placement</span>
					<h3>How are <span> ICA Students</span> always ahead of the competitions?</h3>
					<p> We know what employers want. With our unique and innovative Personality Development Programs like mock sessions, gamifications we make you industry-ready. </p>
				</div>
				<div class="row ">
					<div class="col-md-7 text-right p30">
						<div class="custom-bg-light timeline-content">
							<h3 class="primary-color">Monthly Mock Interviews</h3>
							<p> We provide practice and preparation for our students who are seeking employment or aiming to improve their interview skills and increase their chances of securing job offers. Here are some advantages of engaging in monthly mock interviews:. </p>
							<ul>
								<li>Practicing and Preparation</li>
								<li>Identifying Strengths and Weaknesses</li>
								<li>Developing Interview Strategies</li>
								<li>Building Confidence</li>
								<li>Enhancing Communication Skills</li>
								<li>Increasing Interview Success Rate</li>
							</ul>
						</div>
					</div>
					<div class="col-md-5 p30">
						<div class="custom-bg-light-img">
							<img src="{{ url('assets/img/mmi.jpg') }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-right p30">
						<div>
							<img src="{{ url('assets/img/sobo.jpg') }}">
						</div>
					</div>
					<div class="col-md-6 p30">
						<div class="custom-bg-light timeline-content">
							<h3 class="primary-color">GDPI / SOBO </h3>
							<p>We organize GDPI (Group Discussion & Personal Interview) , also known as SOBO (Speak Out Bowled Out) , which are commonly used as selection tools in various job interviews. They offer several benefits to both candidates and recruiters </p>
							<ul>
								<li>Develop critical thinking and Analytical Skills</li>
								<li>Do effective communication</li>
								<li>Teamwork and collaboration</li>
								<li>Personal Assessment</li>
								<li>Skill Evaluation</li>
								<li>Relationship Building</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-6 text-right p30">
						<div class="custom-bg-light timeline-content">
							<h3 class="primary-color">Excel Ka Don</h3>
							<p> We make our students capable of effectively using the most widely used software tool in the corporate world, Ms Excel  to contribute to increasing efficiency, data management, analysis, and decision-making. Here are some key advantages: </p>
							<ul>
								<li>Data Organization and Management</li>
								<li>Data Analysis and Reporting</li>
								<li>Project Management</li>
								<li>Automation and Efficiency</li>
								<li>Data Visualization</li>
								<li>Collaboration and Data Sharing</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 p30">
						<img src="{{ url('assets/img/ekd.jpg')}}">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-right p30">
						<img src="{{ url('assets/img/tkb.png')}}">
					</div>
					<div class="col-md-6 p30">
						<div class="custom-bg-light timeline-content">
							<h3 class="primary-color">Tally Ka Boss </h3>
							<p> We make our students fit for the corporate world by excelling in TallyPrime for streamlining financial management, enhancing productivity, and facilitating accurate reporting. Here are some key advantages of using TallyPrime: </p>
							<ul>
								<li>Efficient Accounting and Financial Management</li>
								<li>Seamless GST Compliance</li>
								<li>Real-time Financial Reporting</li>
								<li>Inventory Management</li>
								<li>Payroll Management</li>
								<li>Bank Integration and Reconciliation</li>
							</ul>
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