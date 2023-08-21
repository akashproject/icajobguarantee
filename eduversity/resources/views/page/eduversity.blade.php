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

	<!-- Start of course section
		============================================= -->
		<section id="course-page" class="course-page-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="side-bar">
							<div class="side-bar-widget  first-widget">
								<h2 class="widget-title text-capitalize"><span>Find </span>University.</h2>
								<div class="listing-filter-form pb30">
									<form action="#" method="get">
										<div class="filter-select mb20">
											<label>Find By States</label>
											<select class="gotoCourseCategory">
												<option value="" selected="">All States </option>
												@if(getStates())
													@foreach (getStates() as $value)
													<option value="{{ URL::to('/state') }}/{{ $value->slug }}" {{ (isset($state->slug) && ($value->slug == $state->slug)) ?"selected":"" }}> {{ $value->name }} </option>
													@endforeach	
												@endif		
											</select>
										</div>

										<div class="filter-select mb20">
											<label>Find By City</label>
											<select class="gotoCourseCategory">
												<option value="9" selected="">All Cities</option>						
											</select>
										</div>
										<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
											<a href="#">FIND COURSES <i class="fas fa-caret-right"></i></a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="genius-post-item">
							<div class="tab-container">
								<div class="course-list-view">
									<div>
										<div class="list-head">
											<h6>Best Engineering Colleges in India 2023:</h6>
										</div>
										@foreach(getUniversities() as $value)
										<div class="university_wrapper mt10 mb20" style="">
											<div class="university_content_section">
												<div class="course-list-img-text">
													<div class="course-list-img">
														<img src="{{url('assets/images/'.str_replace(' ','-',strtolower($value->name).'-logo.png'))}}" alt="">
													</div>
													<div class="course-list-text">
														<h3><a href="/universities/{{ $value->slug }}">{{ $value->name }}</a></h3>
														<div class="course-meta">
															<span class="course-category bold-font">	
																<a href="" > <i class="fa fa-map-marker" > </i> {{ getCityById($value->city_id)->name }}, {{ getStateById(getCityById($value->city_id)->state_id)->name }} </a>
															</span>
														</div>
													</div>
												</div>
												<hr>
												<div class="university_content_wrap" >
													<div class="row mb10">
														<div class="col-6" >
															<span> <b>Courses Offered</b> </span>
															<a href="" >18 Courses</a>
														</div>
														<div class="col-6" >
															<span> <b>Exams Accepted</b> </span>
															<a href="" >JEE Main +4</a>
														</div>
													</div>
													<div class="row mt10">
														<div class="col-6" >
															<span> <b>Total Fees Range</b> </span>
															<a href="" >₹3 L - 6.4 L</a>
														</div>
														<div class="col-6" >
															<span> <b>Average Package</b> </span>
															<a href="" >₹13 LPA</a>
														</div>
													</div>
												</div>
											</div>
											<div class="university_btn_section" >
												<div class="course-type-list mb10" style="width:auto">	
													<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn(1,'')"><i class="fas fa-download"></i> Brochure</a>
												</div>
												<div class="course-type-list" style="width:auto">
													<a class="btn-outline" href="/universities/{{ $value->slug }}">View More <i class="fas fa-caret-right"></i></a>
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
		</section>
	<!-- End of course section
		============================================= -->

	<!-- Start of testimonial secound section
		============================================= -->
		<section id="testimonial_2" class="testimonial_2_section">
			<div class="container">
				<div class="testimonial-slide">
					<div class="section-title-2 mb65 headline text-left">
						<h2>Students <span>Testimonial.</span></h2>
					</div>

					<div id="testimonial-slide-item" class="testimonial-slide-area">
						<div class="student-qoute">
							<p>“Sharda University is an amazing place where the students get enormous knowledge and skills to learn and experience in their practical life. It has the best faculty with the industry ready curriculum to enhance each and every student to their full Potential. My mentor and all the faculty has helped me a lot to brush up my personality to grab all the opportunities of the upcoming future.”</p>
							<div class="student-name-designation">
								<span class="st-name bold-font">Gayatri Sharma</span>
								<span class="st-designation">B.Com (Finance &amp; Accounts)</span>
							</div>
						</div>

						<div class="student-qoute">
							<p>“I am Saurav Sarkar, of Batch 2020-22, B.SC (Data Science). I consider myself a lucky student, to explore the privileges of the Techno India University. The curriculum of the TIU is a unique program focusing on the practical aspects and the applications of the concepts. I thank TIU for such an innovative and practical approach to learning..”</p>
							<div class="student-name-designation">
								<span class="st-name bold-font">Saurav Sarkar</span>
								<span class="st-designation">B.Sc (Data Science)</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End  of testimonial secound section
		============================================= -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection