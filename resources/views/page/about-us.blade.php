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

	<!-- Start secound testimonial section
		============================================= -->
		<section id="testimonial-secound" class="secound-teacher-section">
			<div class="container">
				<div class="testimonial-slide">
					<div class="section-title mb35 headline text-center">
						<span class="subtitle text-uppercase">Success Stories</span>
						<h3>Success <span> Stories.</span></h3>
					</div>

					<div class="testimonial-secound-slide-area">
						@for($i=1; $i<= 8; $i++)
						<div class="text-center">
							<img src="{{ url('/assets/img/award/award-'.$i.'.png')}}" >
						</div>
						@endfor
					</div>
				</div>
			</div>
		</section>
	<!-- End secound testimonial section
		============================================= -->

	<!-- Start of about us content
		============================================= -->
		<section id="about-page" class="about-page-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="about-us-content-item">
							<div class="about-text-item">
								<p> ICA Edu Skills, one of the best training institutes in India began its journey in 1999 with a vision to train the job-focused youth in India and make them employable at affordable fees. As the industry demands ‘skilled manpower’, we too, expanded our horizon to not just provide practical training to our students but also support them with <a href="{{ url('/placements') }}"> placement at top companies and MNCs</a>. </p>
								<p>
									Today ICA is recognized as the best training institute in India to have shaped millions of careers and changed peoples’ perception about Accounts, Finance, and Tax Education.
								</p>
								<p>
									ICA takes pride in contributing to India’s skill development initiatives – not only as an independent set-up but also as a training partner for multiple educational brands and government projects.
								</p>
								<p>
									With over 200 training centers across the country, we are recognised to be the best training institute in India and widely appreciated for our work by many brands and organizations every year.
								</p>

							</div>
							<!-- /about-text -->

							<div class="row">
								<div class="col-md-6 mb10">
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font" style="margin: auto;">
										<a target="_blank" href="{{ url('courses')}}"> Explore Courses <i class="fas fa-caret-right"></i></a>
									</div>
								</div>
								<div class="col-md-6 mb10">
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font" style="margin: auto;">
										<a target="_blank" href="{{ url('franchise-opportunity')}}"> Become ICA Partner <i class="fas fa-caret-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="side-bar-widget first-widget">
							<h2 class="widget-title text-capitalize"><span>Find A Course </span>&amp; Sign up Today.</h2>
							<div class="course-img">
								<img src="assets/img/teacher/ct-1.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of about us content
		============================================= -->
		<section id="about-page" class="best-course-section">
			<div class="container">
				<div class="section-title mb20 headline text-center">
					<span class="subtitle text-uppercase">Awards</span>
					<h3>ICA<span> Awards & Recognition.</span></h3>
				</div>
				<div class="row">
					<div class="col-md-5">
						<img src="{{ url('/assets/img/awards-recognition.png')}}">
					</div>
					<div class="col-md-7 ">
						<div class="text-center mt10">
							<h3 class="awards-recognition " > Awards & Recognition </h3>
						</div>
						<p> When we say ICA is the ‘No.1 Training Institute in Accounts and Finance’, it’s just not us; it’s an array of brands and organisations who have recognised our hard work and accomplishments over the years. </p>
						<p> Every year ICA is conferred with awards and titles which we wear as a badge of honour. </p>
						<p> There’s not enough space to accommodate all of our acknowledgements all at the same time but we can certainly share some of our prized possessions here.. </p>
					</div>
				</div>
			</div>
		</section>
	<!-- Start secound teacher section
		============================================= -->
		<section id="teacher-2" class="secound-teacher-section">
			<div class="container">
				<div class="section-title mb35 headline text-left">
					<span class="subtitle ml42  text-uppercase">GENIUS STAFFS</span>
					<h2>Team <span>Managements.</span></h2>
				</div>
				<div class="teacher-secound-slide">
					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{ url('assets/img/about/nks.png')}}" alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Dr.Narendra Shyamsukha</span>
							<span class="teacher-designation">Chairman</span>
						</div>
					</div>

					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{ url('assets/img/about/ankit.png')}}" alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Ankit Shyamsukha</span>
							<span class="teacher-designation">CEO</span>
						</div>
					</div>

					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{ url('assets/img/about/kanhiya.png')}}" alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Kanhaiya Poddar</span>
							<span class="teacher-designation">CFO</span>
						</div>
					</div>

					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{ url('assets/img/about/tirthankar-sanyal.png')}}" alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Tirthankar Sanyal</span>
							<span class="teacher-designation">CEO - Skill Vertical</span>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End teacher section
		============================================= -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection