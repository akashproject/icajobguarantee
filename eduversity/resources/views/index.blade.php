@extends('layouts.main')
    @section('content')
	<section class="header-devider"></section>
	<section class="header-margin"></section>
    <!-- Start of breadcrumb section
		============================================= -->
		<section id="" class="university-inner-page-banner">
			<div class="container-fluid">
				<div class="">
					<video playsinline="" autoplay="" muted="" loop="" poster="polina.jpg" id="bgvid" style="width: 100%;">
						<source src="https://university.icajobguarantee.com/wp-content/uploads/2023/02/ICA-UA-video-banner-2-1.m4v" type="video/mp4">
					</video>
				</div>
			</div>
		</section>

		<section id="search-course" class="search-course-section search-course-secound">
			<div class="container">
				<div class="search-counter-up">
					<div class="row">
						<div class="col-md-3">
							<div class="counter-icon-number ">
								<div class="counter-icon">
									<i class="text-gradiant flaticon-graduation-hat"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">5</span><span>000+</span>
									<p>Students Trained</p>
								</div>
							</div>
						</div>
						<!-- /counter -->

						<div class="col-md-3">
							<div class="counter-icon-number ">
								<div class="counter-icon">
									<i class="text-gradiant flaticon-book"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">70</span><span>,000+</span>
									<p>Registered Employers</p>
								</div>
							</div>
						</div>
						<!-- /counter -->

						<div class="col-md-3">
							<div class="counter-icon-number ">
								<div class="counter-icon">
									<i class="text-gradiant flaticon-favorites-button"></i>
								</div>
								<div class="counter-number">
									<span class="counter-count bold-font">24</span><span>+</span>
									<p>Years of Excellence</p>
								</div>
							</div>
						</div>
						<!-- /counter -->

						<div class="col-md-3">
							<div class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a data-toggle="modal" data-target="#lead-generation-form" href="#"><i class="fas fa-phone"></i> Talk To Experts</a>
							</div>
						</div>
						<!-- /counter -->
					</div>
				</div>
			</div>
		</section>
		
		<!-- Start popular course
		============================================= -->
		<section id="popular-course" class="popular-course-section popular-three">
			<div class="container">
				<div class="section-title mb20 headline text-left">
					<span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
					<h3><span>Univercity</span> Programms.</h3>
				</div>
				<div id="course-slide-item" class="course-slide">
					@if(getUniversities())
						@foreach (getUniversities() as $value)
							<div class="course-item-pic-text">
								<div class="course-pic relative-position mb25">
									<a href="{{ url('universities/'.$value->slug)}}" >
										<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'assets/img/course/c-1.jpg' }}" alt="">	
									</a>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
								</div>
								<div class="university-item-text">
									<div class="course-meta university-meta">
										<span class="course-author university-author bold-font gradient-bg"><a href="#">UGC recognised</a></span>
										<div class="course-rate ul-li">
											<ul>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											</ul>
										</div>
									</div>
									<div class="course-title mt10 headline pb10 relative-position">
										<h3><a href="{{ url('universities/'.$value->slug)}}">{{ $value->name }}</a> </h3>
										<p>
											{{ $value->excerpt }}
										</p>
									</div>
									<div class="course-viewer ul-li">
										<ul>
											<li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
											<li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
											<li><a href="">125k Unrolled</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /item -->
					@endforeach	
						@endif
				</div>
			</div>
		</section>
	<!-- End popular course
		============================================= -->


	<!-- Start why choose section
		============================================= -->
		<section id="why-choose" class="why-choose-section version-four backgroud-style">
			<div class="container">
				<div class="section-title mb20 headline text-center">
					<span class="subtitle text-uppercase">ICA ADVANTAGES</span>
					<h2>Reason <span>Why Choose Us</span></h2>
				</div>
				<div class="extra-features-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="extra-left">
								<div class="extra-left-content">
									<div class="extra-icon-text text-left">
										<div class="features-icon gradient-bg text-center">
											<i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
											<div class="feat-tag">
												<span>01</span>
											</div>
										</div>
										<div class="features-text">
											<div class="features-text-title">
												<h3>Practical Training</h3>
											</div>
											<div class="features-text-dec">
												<span>The technology enabled course curriculum consists of 60% practical &amp; 40% theoretical classes.</span>
											</div>
										</div>
									</div>
								</div>
								<!-- // extra-left-content --> 

								<div class="extra-left-content">
									<div class="extra-icon-text">
										<div class="features-icon gradient-bg text-center">
											<i class=" flaticon-clipboard-with-pencil"></i>
											<div class="feat-tag">
												<span>02</span>
											</div>
										</div>
										<div class="features-text pt25">
											<div class="features-text-title">
												<h3>Industry Exposure</h3>
											</div>
											<div class="features-text-dec">
												<span>Regular industry visits are an essential part of the course to provide first hand industry exposures.</span>
											</div>
										</div>
									</div>
								</div>
								<!-- // extra-left-content -->

								<div class="extra-left-content">
									<div class="extra-icon-text">
										<div class="features-icon gradient-bg text-center">
											<i class="flaticon-list"></i>
											<div class="feat-tag">
												<span>03</span>
											</div>
										</div>
										<div class="features-text pt25">
											<div class="features-text-title">
												<h3>Case Study Based Modules</h3>
											</div>
											<div class="features-text-dec">
												<span>Curriculums are designed with real life case studies, instead of regular theoretical approach.</span>
											</div>
										</div>
									</div>
								</div>
								<!-- // extra-left-content -->
							</div><!-- /extra-left -->
						</div>
						<!-- /col-sm-3 -->

						<div class="col-sm-4">
							<div class="extra-pic text-center">
								<img src="https://university.icajobguarantee.com/wp-content/themes/scriptcrown/img/banner/wc-2.png" alt="img">
							</div>
						</div>
						<!-- /col-sm-6 -->

						<div class="col-md-4 col-sm-6">
							<div class="extra-right">
								<div class="extra-left-content">
									<div class="extra-icon-text text-right">
										<div class="features-icon gradient-bg text-center">
											<i class="flaticon-ruler-and-pencil"></i>
											<div class="feat-tag">
												<span>04</span>
											</div>
										</div>
										<div class="features-text pt25">
											<div class="features-text-title text-right pb10">
												<h3>Paid Internship</h3>
											</div>
											<div class="features-text-dec text-right">
												<span>The curriculum contains 2 years of fulltime classroom training &amp; 1 year paid internship.</span>
											</div>
										</div>
									</div>
								</div>
								<!-- // extra-left-content -->

								<div class="extra-left-content">
									<div class="extra-icon-text text-right">
										<div class="features-icon gradient-bg text-center">
											<i class="flaticon-clipboards"></i>
											<div class="feat-tag">
												<span>05</span>
											</div>
										</div>
										<div class="features-text pt25">
											<div class="features-text-title text-right pb10">
												<h3>Job Guarantee</h3>
											</div>
											<div class="features-text-dec text-right">
												<span>All the students will get guaranteed placement after the course completion.</span>
											</div>
										</div>
									</div>
								</div>
								<!-- // extra-left-content -->

								<div class="extra-left-content">
									<div class="extra-icon-text text-right">
										<div class="features-icon gradient-bg text-center">
											<i class="flaticon-pie-chart"></i>
											<div class="feat-tag">
												<span>06</span>
											</div>
										</div>
										<div class="features-text pt25">
											<div class="features-text-title text-right pb10">
												<h3>Grooming Sessions</h3>
											</div>
											<div class="features-text-dec text-right">
												<span>Rigorous grooming &amp; mock sessions are included in the program to make the students job ready. </span>
											</div>
										</div>
									</div>
								</div>
								<!-- // extra-left-content -->
							</div><!-- /extra-left -->
						</div>
						<!-- /col-sm-3 -->
					</div><!-- /row -->
				</div>
			</div>
		</section>
	<!-- End why choose section
		============================================= -->


	<!-- Start of sponsor section
		============================================= -->
		<section id="sponsor" class="sponsor-section">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left "  >
					<h2>Our Alumni <span>Worked At.</span></h2>
				</div>
				<div class="sponsor-item sponsor-1 " >
					@foreach(getRecruiters() as $value)
					<div class="sponsor-pic text-center">
						<img src="{{ getSizedImage('',$value->featured_image) }}" alt="">
					</div>
					@endforeach						
				</div>
			</div>
		</section>
	<!-- End of sponsor section
		============================================= -->	

	<!-- Start of best course
	============================================= -->
	<section id="best-course" class="best-course-section">
		<div class="container">
			<div class="section-title mb45 headline text-center">
				<span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
				<h3>Browse Our<span> Best Course.</span></h3>
			</div>
			<div class="faq-tab mb65">
				<div class="faq-tab-ques  ul-li">
					<div class="tab-button text-center ">
						<ul class="product-tab index-category-tab">
							@foreach(getUniversities() as $key => $value)
							<li rel="tab{{$key}}"> {{ $value->name }} </li>
							@endforeach
						</ul>
					</div>
					<!-- /tab-head -->

					<!-- tab content -->
					<div class="tab-container">
						@foreach(getUniversities() as $key => $value)
							<!-- 1st tab -->
							<div id="tab{{$key}}" class="tab-content-1 pt35" style="display: block;">
								<div class="row">
								@foreach(getCourses() as $course)
									<div class="col-md-3">
										<div class="best-course-pic-text relative-position">
											<div class="best-course-pic relative-position">
												<img src="{{ (isset($course->featured_image))?getSizedImage('',$course->featured_image):'assets/img/course/c-1.jpg' }}" alt="">
												<div class="trend-badge-2 text-center text-uppercase">
													<i class="fas fa-bolt"></i>
													<span>Trending</span>
												</div>
												
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
													<a href="courses/{{ $course->slug }}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
												</div>
												<div class="blakish-overlay"></div>
											</div>
											<div class="best-course-text">
												<div class="course-title mb20 headline relative-position height-60">
													<h3><a href="courses/{{ $course->slug }}"> {{ $course->name }} </a> 
													 <span class="trend-bestseller text-uppercase bold-font">
														<i class="fas fa-bolt"></i> Bestseller</span> 
													</h3>
												</div>
												<div class="course-meta">
													<span class="course-category"><i class="fas fa-clock"></i> {{ $course->duration }}</span>
													<span class="course-author"><i class="fas fa-book"></i> {{ $course->no_of_module }} Modules</span>
												</div>
											</div>
											<div class="more-btn text-center" >
												<div class="course-type-list">	
													<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $course->brochure_id }},'')"><i class="fas fa-download"></i> Brochure</a>
												</div>
												<div class="course-type-list">														
													<a class="btn-outline" href="{{ URL::to('/courses') }}/{{ $course->slug }}" >View More <i class="fas fa-caret-right"></i></a>
												</div>														
											</div>
										</div>
									</div>
									<!-- /course -->
								@endforeach
								</div>
							</div>   
							<!-- #tab1 -->
						@endforeach						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /course-categori -->


	<!-- Start FAQ section
	============================================= -->
		<section id="faq" class="faq-section faq-secound-home-version backgroud-style">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Univercities</span>
					<h2>We are present in<span> UG and PG </span> colleges near you</h2>
				</div>

				<div class="faq-tab mb45">
					<div class="faq-tab-ques  ul-li">
						<div class="tab-button text-center mb45">
							<ul class="product-tab">

								<li class="active" rel="tab1">All Courses </li>
								@foreach(getCourses() as $key => $course)
									<li rel="tab{{$key}}"> {{ $course->name }} </li>
								@endforeach
							</ul>
						</div>
						<!-- /tab-head -->

						<!-- tab content -->
						<div class="tab-container">
						@foreach(getCourses() as $key => $value)
							<!-- 1st tab -->
							<div id="tab{{$key}}" class="tab-content-1 pt35" style="display: block;">
								<div class="row">
								@foreach(getUniversities() as $university)
									<div class="col-md-4">
										<div class="course-item-pic-text">
											<div class="course-pic relative-position mb25">
												<a href="/universities/techno-india" >
													<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'assets/img/course/c-1.jpg' }}" alt="">	
												</a>
												<div class="course-details-btn">
													<a href="#">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
												</div>
											</div>
											<div class="university-item-text">
												<div class="course-meta university-meta">
													<span class="course-author university-author bold-font gradient-bg"><a href="#">UGC recognised</a></span>
													<div class="course-rate ul-li">
														<ul>
															<li><i class="fas fa-star"></i></li>
															<li><i class="fas fa-star"></i></li>
															<li><i class="fas fa-star"></i></li>
															<li><i class="fas fa-star"></i></li>
															<li><i class="fas fa-star"></i></li>
														</ul>
													</div>
												</div>
												<div class="course-title mt10 headline pb10 relative-position">
													<h3><a href="">{{ $value->name }}</a> </h3>
													<p>
														{{ $value->excerpt }}
													</p>
												</div>
												<div class="course-viewer ul-li">
													<ul>
														<li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
														<li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
														<li><a href="">125k Unrolled</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- /course -->
								@endforeach
								</div>
							</div>   
							<!-- #tab1 -->
						@endforeach						
					</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End FAQ section
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