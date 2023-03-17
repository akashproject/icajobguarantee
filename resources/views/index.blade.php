@extends('layouts.main')

    @section('content')

	<!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div  class="slider-area slider-bg-1 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center">
							<div class="layer-1-1">
								<span class="subtitle text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
							</div>
							<div class="layer-1-3">
								<h2><span>Inventive</span> Solution <br> for <span>Education</span></h2>
							</div>
						</div>
						<div class="layer-1-4">
							<div id="course-btn">
								<div class="genius-btn  text-center text-uppercase ul-li-block bold-font">
									<a href="{{url('/courses')}}">Our Courses <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="slider-area slider-bg-2 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center">
							<div class="layer-1-1">
								<span class="subtitle text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
							</div>
							<div class="layer-1-2">
								<h2 class="secoud-title"> Browse The <span>Best Courses.</span></h2>
							</div>
						</div>
						<div class="layer-1-3">
							<div class="search-course mb30 relative-position">
								<form action="{{url('/courses')}}" method="get">
									<input class="course" name="search" type="text" placeholder="Type what do you want to learn today?">
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
										<li> <a target="_blank" href="{{url('/course-category')}}/{{$value->slug}}" > {{$value->name}} </a> </li>
									@endforeach										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slider-area slider-bg-3 relative-position">
					<div class="slider-text">
						<div class="layer-1-2">
							<div class="coming-countdown ul-li">
								<ul>
									<li class="days">
										<span class="number"></span>
										<span class>Days</span>
									</li>

									<li class="hours">
										<span class="number"></span>
										<span class>Hours</span>
									</li>

									<li class="minutes">
										<span class="number"></span>
										<span class>Minutes</span>
									</li>

									<li class="seconds">
										<span class="number"></span>
										<span class>Seconds</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="section-title mb20 headline text-center">
							<div class="layer-1-3">
								<h2 class="third-slide"> Mobile Application Experiences : <br> <span>Mobile App Design.</span></h2>
							</div>
						</div>
						<div class="layer-1-4">
							<div class="about-btn text-center">
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
				<div class="slider-area slider-bg-4 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center">
							<span class="subtitle text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
							<h2><span>Inventive</span> Solution <br> for <span>Education</span></h2>
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
										<span class="counter-count bold-font">5 </span><span>M+</span>
										<p>Students Enrolled</p>
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
										<span class="counter-count bold-font">122</span><span>.500+</span>
										<p>Online Available Courses</p>
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
										<span class="counter-count bold-font">15</span><span>.000+</span>
										<p>Premium Quality Products</p>
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
										<span class="counter-count bold-font">7</span><span>.500+</span>
										<p>Teachers Registered</p>
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
					@if($course->categorySlug == "career-course")
					<div class="course-item-pic-text">
						<div class="course-pic relative-position mb25">
							<img src="{{ (isset($course->featured_image))?getSizedImage('',$course->featured_image):'assets/img/course/c-1.jpg' }}" alt="">
							<div class="trend-badge-2 text-center text-uppercase">
								<i class="fas fa-bolt"></i>
								<span>Career</span>
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
								<span class="btn-outline" onclick="lead_capture_form_btn({{ $course->category_id }},'')"><i class="fas fa-download"></i> Brochure</span>
							</div>
							<div class="course-type-list">														
								<a href="{{ URL::to('/courses') }}/{{ $course->slug }}" >View More <i class="fas fa-caret-right"></i></a>
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
									<h3 class="bold-font"><span>Get a</span> Free Registration.</h3>
									<p>More Than 122K Online Available Courses</p>
								</div>
								<div class="register-form-area">
									<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
										@include('common.leadCaptureFormField')
										<div class="nws-button text-uppercase text-center white text-capitalize">
											<button type="submit" value="Submit">SUBMIT REQUEST </button> 
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
								<span class="subtitle ml42 text-uppercase">SORT ABOUT US</span>
								<h2>We are <span>Genius Course</span>
								work since 1980.</h2>
								<p>We take our mission of increasing global access to quality education seriously. We connect learners to the best universities and institutions from around the world.</p>
							</div>
							<div class="about-content-text">
								<p class=""  >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam. magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
								<div class="about-list mb65 ul-li-block "  >
									<ul>
										<li>Professional And Experienced Since 1980</li>
										<li>We Connect Learners To The Best  Universities From Around The World</li>
										<li>Our Mission Increasing Global Access To Quality Aducation</li>
										<li>100K Online Available Courses</li>
									</ul>
								</div>
								<div class="about-btn "  >
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a href="#">About Us <i class="fas fa-caret-right"></i></a>
									</div>
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a href="#">contact us <i class="fas fa-caret-right"></i></a>
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
						<h2>Reason <span>Why Choose Genius.</span></h2>
					</div>
					<div id="service-slide-item" class="service-slide">
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">The Power Of Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-clipboard-with-pencil"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Best Online Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-list"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Education For All Student.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon "  >
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">The Power Of Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-clipboard-with-pencil"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Best Online Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-list"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Education For All Student.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">The Power Of Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-clipboard-with-pencil"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Best Online Education.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
							</div>
						</div>
						<div class="service-text-icon">
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-list"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font">Education For All Student.</h3>
								<p>Lorem ipsum dolor sit amet consectuerer adipiscing elit set diam nonnumynibh euismod tincidun laoreet.</p>
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
									<p>{!!$value->comment!!}</p>
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
													<span class="btn-outline" onclick="lead_capture_form_btn({{ $course->category_id }},'')"><i class="fas fa-download"></i> Brochure</span>
												</div>
												<div class="course-type-list">		
													<a href="{{ URL::to('/courses') }}/{{ $course->slug }}" >View More <i class="fas fa-caret-right"></i></a>
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
					<span class="subtitle text-uppercase">COURSES CATEGORIES</span>
					<h3>Browse Courses<span> By Category.</span></h3>
				</div>
				<div class="category-item">
					<div class="row">
						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-technology"></i>
								</div>
								<div class="category-title">
									<h4>Responsive Website</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-app-store"></i>
								</div>
								<div class="category-title">
									<h4>IOS Applications</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-artist-tools"></i>
								</div>
								<div class="category-title">
									<h4>Graphic Design</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-business"></i>
								</div>
								<div class="category-title">
									<h4>Marketing</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-dna"></i>
								</div>
								<div class="category-title">
									<h4>Science</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-cogwheel"></i>
								</div>
								<div class="category-title">
									<h4>Enginering</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-technology-1"></i>
								</div>
								<div class="category-title">
									<h4>Photography</h4>
								</div>
							</div>
						</div>
						<!-- /category -->

						<div class="col-md-3">
							<div class="category-icon-title text-center "  >
								<div class="category-icon">
									<i class="text-gradiant flaticon-technology-2"></i>
								</div>
								<div class="category-title">
									<h4>Mobile Application</h4>
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
								<p><a href="#">{{ $testimonial->dasignation }} </a> </p>
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
					@foreach(getPlacements() as $value)
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
								<div class="latest-news-area">
									<div class="latest-news-thumbnile relative-position">
										<img src="assets/img/blog/lb-1.jpg" alt="">
										<div class="hover-search">
											<i class="fas fa-search"></i>
										</div>
										<div class="blakish-overlay"></div>
									</div>
									<div class="date-meta">
										<i class="fas fa-calendar-alt"></i> 26 April 2018
									</div>
									<h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
									<div class="course-viewer ul-li">
										<ul>
											<li><span><i class="fas fa-user"></i> 1.220</span></li>
											<li><span><i class="fas fa-comment-dots"></i> 1.015</span></li>
										</ul>
									</div>
								</div>
								<!-- /post -->

								<div class="latest-news-posts">
									<div class="latest-news-area">
										<div class="latest-news-thumbnile relative-position">
											<img src="assets/img/blog/lb-2.jpg" alt="">
											<div class="hover-search">
												<i class="fas fa-search"></i>
											</div>
											<div class="blakish-overlay"></div>
										</div>
										<div class="date-meta">
											<i class="fas fa-calendar-alt"></i> 26 April 2018
										</div>
										<h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course 2018.</a></h3>
										<div class="course-viewer ul-li">
											<ul>
												<li><span><i class="fas fa-user"></i> 1.220</span></li>
												<li><span><i class="fas fa-comment-dots"></i> 1.015</span></li>
											</ul>
										</div>
									</div>
									<!-- /post -->
								</div>

								<div class="view-all-btn bold-font">
									<a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
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
										<h3 class="latest-title bold-font"><a href="#">Fully Responsive Web Design & Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
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
										<h3 class="latest-title bold-font"><a href="#">Introduction to Mobile Application Development.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Web Design</a></span>
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
											<span class="course-category"><a href="#">Web Design</a></span>
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
								<img src="assets/img/banner/v-1.jpg" alt="">
								<div class="video-play-btn text-center gradient-bg">
									<a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=-g4TnixUdSc"><i class="fas fa-play"></i></a>
								</div>
							</div>
							<div class="vidoe-text">
								<h3 class="latest-title bold-font"><a href="#">Learning IOS Apps in Amsterdam.</a></h3>
								<p class="mb25">Lorem ipsum dolor sit amet, consectetuer delacosta adipiscing elit, sed diam nonummy.</p>
							</div>
							<div class="view-all-btn bold-font">
								<a href="#">View All Videos <i class="fas fa-chevron-circle-right"></i></a>
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
						<a href="#">Make Question <i class="fas fa-caret-right"></i></a>
					</div>
					<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
						<a href="#">contact us <i class="fas fa-caret-right"></i></a>
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