@extends('layouts.main')

    @section('content')

	<!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div class="slider-area slider-bg-5 relative-position" style="background-image: url({{url('assets/img/banner/banner-classroom.jpg')}});">
 					<div class="slider-text">
 						<div class="section-title mb20 headline text-left ">
 							<div class="layer-1-1">
 								<span class="subtitle ml42 text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
 							</div>
 							<div class="layer-1-3">
							 	<h2 class="secoud-title"> Browse The <span>Best Courses</span></h2>
 							</div>
 						</div>
 						<div class="layer-1-4">
						 	<div class="search-course mb30 relative-position">
								<form action="{{url('/courses')}}" method="get">
									<input class="course" name="search" type="text" placeholder="Search Your Skill ?">
									<div class="nws-button text-center  gradient-bg text-capitalize">
										<button type="submit" value="Submit">Search Course</button> 
									</div>
								</form>
							</div>
							<div class="layer-1-4">
								<div class="slider-course-category ul-li text-center">
									<span class="float-left">BY CATEGORY:</span>
									<ul>
									@foreach(getCourseTypes() as $key => $value)
										<li> <a target="_blank" href="{{url('/category')}}/{{$value->slug}}" > {{$value->name}} </a> </li>
									@endforeach										
									</ul>
								</div>
							</div>
 						</div>
 					</div>
 				</div>
				<div class="slider-area slider-bg-5 relative-position" style="background-image: url({{url('assets/img/banner/banner-university.jpg')}});">
 					<div class="slider-text">
 						<div class="section-title mb20 headline text-left ">
 							<div class="layer-1-1">
 								<span class="subtitle ml42 text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
 							</div>
 							<div class="layer-1-3">
								 <h2><span>Learn</span> In <br> Demand <span> Skills</span></h2>
 							</div>
 						</div>
 						<div class="layer-1-4">
 							<div class="genius-btn  text-center text-uppercase ul-li-block bold-font">
								 <a href="{{url('/courses')}}">Our Courses <i class="fas fa-caret-right"></i></a>
 							</div>
 						</div>
 					</div>
 				</div>		
				<div class="slider-area slider-bg-5 relative-position" style="background-image: url({{url('assets/img/banner/banner-franchise.jpg')}});">
 					<div class="slider-text">
 						<div class="section-title mb20 headline text-left ">
 							<div class="layer-1-1">
 								<span class="subtitle ml42 text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
 							</div>
 							<div class="layer-1-3">
							 	<h2 class="third-slide"> With India’s #1 <br> <span>Vocational Education.</span></h2>
 							</div>
 						</div>
 						<div class="layer-1-4">
							<div class="about-btn text-left">
								<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
									<a href="#">About Us <i class="fas fa-caret-right"></i></a>
								</div>
								<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
									<a href="#">contact us <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
						</div>
 					</div>
 				</div>	
			</div>
		</section>
	<!-- End of slider section
		============================================= -->

	<!-- Start of Search Courses
		============================================= -->
		<section id="search-course" class="search-course-section search-course-third">
			<div class="container">
				<div class="search-counter-up">
					<div class="version-four">
						<div class="row">
							<div class="col-md-3">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<i class="text-gradiant flaticon-graduation-hat"></i>
									</div>
									<div class="counter-number">
										<span class="counter-count bold-font">500</span><span>K+</span>
										<p>Satisfied Students</p>
									</div>
								</div>
							</div>
							<!-- /counter -->

							<div class="col-md-3">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<i class="text-gradiant flaticon-book"></i>
									</div>
									<div class="counter-number">
										<span class="counter-count bold-font">30</span><span>K+</span>
										<p>Placement Offices</p>
									</div>
								</div>
							</div>
							<!-- /counter -->

							<div class="col-md-3">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<i class="text-gradiant flaticon-favorites-button"></i>
									</div>
									<div class="counter-number">
										<span class="counter-count bold-font">70</span><span>K+</span>
										<p>Registered Employers</p>
									</div>
								</div>
							</div>
							<!-- /counter -->

							<div class="col-md-3">
								<div class="counter-icon-number">
									<div class="counter-icon">
										<i class="text-gradiant flaticon-group"></i>
									</div>
									<div class="counter-number">
										<span class="counter-count bold-font">10</span><span>K+</span>
										<p>Campus Interviews</p>
									</div>
								</div>
							</div>
							<!-- /counter -->
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of Search Courses
		============================================= -->


	<!-- Start popular course
		============================================= -->
		<section id="popular-course" class="popular-course-section popular-three" style="background:#d0cfda">
			<div class="container">
				<div class="section-title mb20 headline text-left">
					<span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
					<h2><span>Popular </span> Courses.</h2>
				</div>
				<div class="mb150">
					<div class="search-course mb30 relative-position">
						<form action="{{ url('/courses') }}" method="get">
							<input class="course" name="search" type="text" placeholder="Type what do you want to learn today?">
							<div class="nws-button text-center  gradient-bg text-capitalize">
								<button type="submit" value="Submit">Search Course</button> 
							</div>
						</form>
					</div>
				</div>
				<div id="course-slide-item" class="course-slide">
					@foreach($courses as $course)
					@if($course->category_id == "1")
					<div class="course-item-pic-text">
						<div class="course-pic relative-position mb25">
							<img src="{{ (isset($course->featured_image))?getSizedImage('',$course->featured_image):'assets/img/course/c-1.jpg' }}" alt="">
							<div class="trend-badge-3 text-center text-uppercase">
								<img src="{{url('assets/img/jg-logo.webp')}}" >
							</div>
							<div class="course-details-btn">
								<a href="courses/{{ $course->slug }}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text mb-20">
							<div class="course-meta">
								<span class="course-category bold-font"><i class="fas fa-user"></i> {{thousandsCurrencyFormat($course->number_of_enrolled)}} Students</span>
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
							<div class="course-title mt10 headline relative-position height-60">
								<h3><a href="courses/{{ $course->slug }}">{{ $course->name }}</a> </h3>
							</div>
							<div class="course-meta mt10 ">
								<span class="course-category"><a href="#"><i class="fas fa-clock"></i> {{ $course->duration }}</a></span>
								<span class="course-author"><a href="#"><i class="fas fa-book"></i> {{ $course->no_of_module }} Modules</a></span>
							</div>
						</div>
						<div class="more-btn text-center" >
							<div class="course-type-list">	
								<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $course->category_id }},'')"><i class="fas fa-download"></i> Brochure</a>
							</div>
							<div class="course-type-list">														
								<a class="btn-outline" href="{{ URL::to('/courses') }}/{{ $course->slug }}" >View More <i class="fas fa-caret-right"></i></a>
							</div>														
						</div>
					</div>
					<!-- /item -->
					@endif
					@endforeach
				</div>
			</div>
		</section>
	<!-- End popular course
		============================================= -->


	<!-- Start of about us section
		============================================= -->
		<section id="about-us" class="about-us-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="about-resigter-form backgroud-style relative-position">
							<div class="register-content">
								<div class="register-fomr-title text-center">
									<h3 class="bold-font"><span>Know your</span> Career Opportunity.</h3>
								</div>
								<div class="register-form-area">
									<form id="index_lead_capture_form" class="contact_form lead_capture_form" action="{{ url('capture-lead') }}" method="POST">
										@csrf
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
						<div class="bg-mockup">
							<img src="assets/img/about/phone.png" alt="">
						</div>
					</div>
					<!-- /form -->

					<div class="col-md-7">
						<div class="about-us-text">
							<div class="section-title relative-position mb20 headline text-left "  >
								<span class="subtitle ml42 text-uppercase">ABOUT US</span>
								<h2><span>Revolutionizing</span> skill development, one person at a time.</h2>
								<p>India’s Leading Vocational Training Institute providing job-oriented courses in GST, Tally, Finance.</p>
							</div>
							<div class="about-content-text">
								<p class=""  >Bringing change in education by making youth employable. What makes us the Industry Leader in the Job Market?</p>
								<div class="about-list mb65 ul-li-block "  >
									<ul>
										<li>Hands on Experience with 7 Simulation Softwares</li>
										<li>100% Job Guarantee</li>
										<li>AnyTime Job Card- Anytime, Anywhere</li>
										<li>120 + Centres Pan-India and 30 Placement Offices</li>
										<li>70, 000 Registered Employers</li>
										<li>Cutting-Edge Curriculum</li>
									</ul>
								</div>
								<div class="about-btn "  >
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a href="{{ url('about-us')}}">About Us <i class="fas fa-caret-right"></i></a>
									</div>
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a href="{{ url('contact-us')}}">contact us <i class="fas fa-caret-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of about us section
		============================================= -->

	<!-- Start of why choose us section
		============================================= -->
		<section id="why-choose-us" class="why-choose-us-section">
			<div class="jarallax  backgroud-style">
				<div class="container">
					<div class="section-title mb20 headline text-center "  >
						<span class="subtitle text-uppercase">GENIUS ADVANTAGES</span>
						<h2><span>Why Choose ICA.</span></h2>
					</div>
					<div id="service-slide-item" class="service-slide">
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">The Power Of Education.</h3>
								<p>ICA Edu Skills was established in 1999 with the aim of making the youth employable by providing them with vocational courses at affordable prices</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-clipboard-with-pencil"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Best Online Education.</h3>
								<p>With the industry demanding skilled manpower, we realized our work must not stop at training the youth but also supporting them with placement at top MNCS.</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-list"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Education For All Student.</h3>
								<p>In the end, we believe that having job-ready skills is the need of the hour. These years of hard work and dedication have established us as the leader in vocational education and the best training institute Pan-India.</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">The Power Of Education.</h3>
								<p>With more than 120+ centers across the country, we take pride in contributing to India’s skill development initiatives and making youth job-ready with our industry-recognized certifications.</p>
							</div>
						</div>
					</div>
					<!-- /service-slide -->
					<div  class="testimonial-slide">
						<div class="section-title-2 mb65 headline text-left "  >
							<h2>Students <span>Testimonial.</span></h2>
						</div>

						<div id="testimonial-slide-item" class="testimonial-slide-area">
							@foreach(getTestimonials() as $value)
								<div class="student-qoute "  >
									<div class="course-pic relative-position text-center">
										<div class="circle-img">
											<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'https://dummyimage.com/140x140' }}" alt="">	
										</div>					
									</div>
									{!!$value->comment!!}
									<div class="student-name-designation">
										<span class="st-name bold-font text-white">{{$value->name}}</span>
										<span class="st-designation text-white">{{ $value->dasignation }}</span>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of why choose us section
		============================================= -->

	<!-- Start of best course
	============================================= -->
	<section id="best-course" class="best-course-section">
		<div class="container">
			<div class="section-title mb45 headline text-center">
				<span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
				<h2>Browse Our<span> Best Course.</span></h2>
			</div>
			<div class="faq-tab mb65">
				<div class="faq-tab-ques  ul-li">
					<div class="tab-button text-center ">
						<ul class="product-tab index-category-tab">
							@foreach($courseTypes as $key => $value)
							<li rel="tab{{$key}}"> {{ $value->name }} </li>
							@endforeach
						</ul>
					</div>
					<!-- /tab-head -->

					<!-- tab content -->
					<div class="tab-container">
						@foreach($courseTypes as $key => $value)
							<!-- 1st tab -->
							<div id="tab{{$key}}" class="tab-content-1 pt35" style="display: block;">
								<div class="row">
								@foreach($courses as $course)
									@if($course->categorySlug == $value->slug)
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
													<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $course->category_id }},'')"><i class="fas fa-download"></i> Brochure</a>
												</div>
												<div class="course-type-list">														
													<a class="btn-outline" href="{{ URL::to('/courses') }}/{{ $course->slug }}" >View More <i class="fas fa-caret-right"></i></a>
												</div>														
											</div>
										</div>
									</div>
									<!-- /course -->
									@endif
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
	<!-- End of best course
	============================================= -->

	<!-- Start of course teacher
		============================================= -->
	
	<!-- End of course teacher
		============================================= -->

	<!-- Start Course category
		============================================= -->
		<section id="course-category" class="course-category-section" style="background:#d0cfda">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">Our Usps</span>
					<h3>What <span> Makes us</span> the Best</h3>
				</div>
				<div class="category-item">
					<div class="row">
						<div class="col-6">
							<div class="category-icon-title text-center ">
								<div class="category-icon">
									<i class="text-gradiant fa fa-briefcase"></i>
								</div>
								<div class="category-title">
									<h4><span>100%</span> Job Guarantee</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-6">
							<div class="category-icon-title text-center ">
								<div class="category-icon">
									<i class="text-gradiant fa fa-map-marker-alt"></i>
								</div>
								<div class="category-title">
									<h4><span>120+</span> Centers across Pan India</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-6">
							<div class="category-icon-title text-center ">
								<div class="category-icon">
									<i class="text-gradiant fas fa-user-circle"></i>
								</div>
								<div class="category-title">
									<h4><span>70000+</span> Registered Employers</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-6">
							<div class="category-icon-title text-center ">
								<div class="category-icon">
									<i class="text-gradiant fa fa-graduation-cap"></i>
								</div>
								<div class="category-title">
									<h4><span>No.1+</span> Accounts &amp; Finance Institute</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-6">
							<div class="category-icon-title text-center ">
								<div class="category-icon">
									<i class="text-gradiant flaticon-dna"></i>
								</div>
								<div class="category-title">
									<h4>Interactive Classes</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-6">
							<div class="category-icon-title text-center ">
								<div class="category-icon">
									<i class="text-gradiant fa fa-laptop"></i>
								</div>
								<div class="category-title">
									<h4>Practical Training</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-6">
							<div class="category-icon-title text-center ">
								<div class="category-icon">
									<i class="text-gradiant fas fa-trophy"></i>
								</div>
								<div class="category-title">
									<h4>Award Winning</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-6">
							<div class="category-icon-title text-center ">
								<div class="category-icon">
									<i class="text-gradiant fa fa-tv"></i>
								</div>
								<div class="category-title">
									<h4>Up-to-date</h4>
								</div>
							</div>
						</div>
						<!-- /category -->
					</div>
				</div>
			</div>
		</section>
	<!-- End Course category
		============================================= -->
	<!-- Start of alumni section
		============================================= -->
		<section id="sponsor" class="sponsor-section">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left "  >
					<h2>Our Alumni <span>Speaks</span></h2>
				</div>
				<div id="alumni-slide-item" class="four-grid-slide">
					@foreach(getTestimonials() as $testimonial)
					<div class="course-item-pic-text">
						<div class="course-pic relative-position text-center">
							<div class="circle-img">
								<img src="{{ (isset($testimonial->featured_image))?getSizedImage('',$testimonial->featured_image):'https://dummyimage.com/140x140' }}" alt="">		
							</div>					
						</div>
						<div class="alumni-item-text ">
							<div class="alumni-name text-center">
								<h3><a href="#">{{ $testimonial->name }}</a> </h3>
							</div>	
							<div class="alumni-content text-center">
								<p><a href="#">{{ $testimonial->dasignation }} At</a> </p>
							</div>	
							<div class="alumni-placed-at text-center">
								<img src="{{ ($testimonial->placed_at)?getSizedImage('',getRecruterById($testimonial->placed_at)->featured_image):'https://dummyimage.com/32' }}" >
							</div>	
						</div>
					</div>
					<!-- /item -->
					@endforeach
				</div>
			</div>
		</section>
	<!-- End of alumni section
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
	<!-- Start latest section
		============================================= -->
		<section id="latest-area" class="latest-area-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="latest-area-content  " >
							<div class="section-title-2 mb65 headline text-left">
								<h2>Latest <span>News.</span></h2>
							</div>
							<div class="latest-news-posts">
								@foreach(getBlogs() as $value)
								<div class="latest-news-area">
									<div class="latest-news-thumbnile relative-position">
										<img src="{{ $value->source_url }}" alt="{{ $value->title->rendered }}">
										<div class="hover-search">
											<i class="fas fa-search"></i>
										</div>
										<div class="blakish-overlay"></div>
									</div>
									<div class="date-meta">
										<i class="fas fa-calendar-alt"></i> {{ date("d M Y",strtotime($value->date))}}
									</div>
									<h3 class="latest-title bold-font"><a target="_blank" href="{{ $value->link }}">{{ $value->title->rendered }}</a></h3>
									<div class="course-viewer ul-li">
										<ul>
											<li><span><i class="fas fa-user"></i> 1.220</span></li>
											<li><span><i class="fas fa-comment-dots"></i> 1.015</span></li>
										</ul>
									</div>
								</div>
								<!-- /post -->
								@endforeach
								
								<div class="view-all-btn bold-font">
									<a target="_blank" href="/blog">View All News <i class="fas fa-chevron-circle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /latest-news -->
					<div class="col-md-4">
						<div class="latest-area-content " >
							<div class="section-title-2 mb65 headline text-left">
								<h2>Upcoming <span>Events.</span></h2>
							</div>
							<div class="latest-events">
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">22</span>
										April 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">Job Fair Program</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Salt Lake</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="latest-events">
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">07</span>
										August 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">University Seminar Program </a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Dalhousi</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="latest-events">
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">30</span>
										Sept 2018
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">IOS Apps Programming & Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Chowringhee</a></span>
											<span class="course-author"><a href="#">Koke</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="view-all-btn bold-font">
								<a  href="#">Check Calendar   <i class="fas fa-calendar-alt"></i></a>
							</div>
						</div>
					</div>
					<!-- /events -->

					<div class="col-md-4">
						<div class="latest-area-content " >
							<div class="section-title-2 mb65 headline text-left">
								<h2>Latest <span>Video.</span></h2>
							</div>
							<div class="latest-video-poster relative-position mb20">
								<img src="{{url('assets/img/letest-video.webp')}}" alt="">
								<div class="video-play-btn text-center gradient-bg">
									<a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=vV1urFhrijY"><i class="fas fa-play"></i></a>
								</div>
							</div>
							<div class="vidoe-text">
								<h3 class="latest-title bold-font"><a href="#">Learning With ICA Edu Skills.</a></h3>
								<p class="mb25">Certified Industrial Accountant | Accounts Training Institute | Placement Support | ICA Edu Skills.</p>
							</div>
							<div class="view-all-btn bold-font">
								<a href="https://www.youtube.com/@ICAEduSkills">View All Videos <i class="fas fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /. -->
				</div>
			</div>
		</section>
	<!-- End latest section
		============================================= -->
	<!-- Start FAQ section
		============================================= -->
		<section id="faq" class="faq-section">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">GENIUS COURSE FAQ</span>
					<h3>Frequently<span> Ask & Questions</span></h3>
				</div>
				<div id="accordion" class="panel-group">
					<div class="row">
						<div class="col-md-6">
						@foreach(getFaqs() as $key => $value)
							@if($key < 5)
							<div class="panel">
								<div class="panel-title" id="heading_{{$key}}">
									<h3 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapse_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$key}}">
											{{$value->question}}
										</button>
									</h3>
								</div>
								<div id="collapse_{{$key}}" class="collapse" aria-labelledby="heading_{{$key}}" data-parent="#accordion">
									<div class="panel-body">
									{!!$value->answer!!}
									</div>
								</div>
							</div>
							@endif
						@endforeach
						</div>

						<div class="col-md-6">
						@foreach(getFaqs() as $key => $value)
							@if($key >= 5)
							<div class="panel">
								<div class="panel-title" id="heading_{{$key}}">
									<h3 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapse_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$key}}">
										{{$value->question}}
										</button>
									</h3>
								</div>
								<div id="collapse_{{$key}}" class="collapse" aria-labelledby="heading_{{$key}}" data-parent="#accordion">
									<div class="panel-body">
									{!!$value->answer!!}
									</div>
								</div>
							</div>
							@endif
						@endforeach
						</div>

					</div>
					<!-- end of #accordion -->
					
				</div>
				<div class="about-btn">
					<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
						<a href="{{ url('contact-us')}}">Make Question <i class="fas fa-caret-right"></i></a>
					</div>
					<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
						<a href="{{ url('contact-us')}}">contact us <i class="fas fa-caret-right"></i></a>
					</div>
				</div>
			</div>
		</section>
	<!-- End FAQ section
		============================================= -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection