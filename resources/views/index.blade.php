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
									<a href="#">Our Courses <i class="fas fa-caret-right"></i></a>
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
								<form action="#" method="post">
									<input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
									<div class="nws-button text-center  gradient-bg text-capitalize">
										<button type="submit" value="Submit">Search Course</button> 
									</div>
								</form>
							</div>
							<div class="layer-1-4">
								<div class="slider-course-category ul-li text-center">
									<span class="float-left">BY CATEGORY:</span>
									<ul>
										<li>Graphics Design</li>
										<li>Web Design</li>
										<li>Mobile Application</li>
										<li>Enginering</li>
										<li>Science</li>
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
					<h2><span>Popular</span> Courses.</h2>
				</div>
				<div class="mb150">
					<div class="search-course mb30 relative-position">
						<form action="#" method="post">
							<input class="course" name="course" type="text" placeholder="Type what do you want to learn today?">
							<div class="nws-button text-center  gradient-bg text-capitalize">
								<button type="submit" value="Submit">Search Course</button> 
							</div>
						</form>
					</div>
				</div>
				<div id="course-slide-item" class="course-slide">
					@foreach($courses as $course)
					@if($course->categorySlug == "job-guarantee")
					<div class="course-item-pic-text">
						<div class="course-pic relative-position mb25">
							<img src="{{ (isset($course->featured_image))?getSizedImage('',$course->featured_image):'assets/img/course/c-1.jpg' }}" alt="">
							<div class="trend-badge-2 text-center text-uppercase">
								<i class="fas fa-bolt"></i>
								<span>Trending</span>
							</div>
							<div class="course-details-btn">
								<a href="courses/{{ $course->slug }}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						<div class="course-item-text">
							<div class="course-meta">
								<span class="course-category bold-font"><a href="#">Web Design</a></span>
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
							<div class="course-title mt10 headline relative-position">
								<h3><a href="courses/{{ $course->slug }}">{{ $course->name }}</a> </h3>
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
										<div class="contact-info">
											<input class="name" name="name" type="text" placeholder="Your Name.">
										</div>
										<div class="contact-info">
											<input class="nbm" name="nbm" type="number" placeholder="Your Number">
										</div>
										<div class="contact-info">
											<input class="email" name="email" type="email" placeholder="Email Address.">
										</div>
										<select>
											<option value="9" selected="">Select Course.</option>
											<option value="10">Web Design</option>
											<option value="11">Web Development</option>
											<option value="12">Php Core</option>
										</select>
										<div class="contact-info">
											<input type="text" id="datepicker" placeholder="Date.">
										</div>
										<textarea  placeholder="Message."></textarea>
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
							<div class="student-qoute "  >
								<p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>

							<div class="student-qoute "  >
								<p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>

							<div class="student-qoute "  >
								<p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>

							<div class="student-qoute">
								<p>“This was our first time lorem ipsum and we <b> were very pleased with the whole experience</b>. Your price was lower than other companies. Our experience was good from start to finish, so we’ll be back in the future lorem ipsum diamet.”</p>
								<div class="student-name-designation">
									<span class="st-name bold-font">Robertho Garcia </span>
									<span class="st-designation">Graphic Designer</span>
								</div>
							</div>
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
						<ul class="product-tab">
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
												<div class="course-title mb20 headline relative-position">
													<h3><a href="courses/{{ $course->slug }}"> {{ $course->name }} </a>
													 <span class="trend-bestseller text-uppercase bold-font">
														<i class="fas fa-bolt"></i> Bestseller</span> 
													</h3>
												</div>
												<div class="course-meta">
													<span class="course-category"><a href="#">Web Design</a></span>
													<span class="course-author"><a href="#">250 Students</a></span>
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

	<!-- Start of sponsor section
		============================================= -->
		<section id="sponsor" class="sponsor-section">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left "  >
					<h2>Genius <span>Sponsors.</span></h2>
				</div>
				<div class="sponsor-item sponsor-1 " >
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-1.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-2.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-3.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-4.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-5.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-6.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-6.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-6.jpg" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="assets/img/sponsor/s-6.jpg" alt="">
					</div>
				</div>
			</div>
		</section>
	<!-- End of sponsor section
		============================================= -->	

	<!-- Start FAQ section
		============================================= -->
		<section id="faq" class="faq-section">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">GENIUS COURSE FAQ</span>
					<h2>Frequently<span> Ask & Questions</span></h2>
				</div>
				<div id="accordion" class="panel-group">
					<div class="row">
						<div class="col-md-6">
							<div class="panel">
								<div class="panel-title" id="headingOne">
									<h3 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											How to Register or Make An Account in Genius?
										</button>
									</h3>
								</div>
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title" id="headingTwo">
									<h3 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
											What is Genius Courses?
										</button>
									</h3>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title" id="headingThree">
									<h3 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
											What Lorem Ipsum Dolor Sit Amet Consectuerer?
										</button>
									</h3>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title" id="heading65">
									<h3 class="mb-0">
										<button class="btn btn-link  collapsed" data-toggle="collapse" data-target="#collapse65" aria-expanded="true" aria-controls="collapse65">
											How to Register or Make An Account in Genius?
										</button>
									</h3>
								</div>
								<div id="collapse65" class="collapse" aria-labelledby="heading65" data-parent="#accordion">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title" id="heading78">
									<h3 class="mb-0">
										<button class="btn btn-link  collapsed" data-toggle="collapse" data-target="#collapse78" aria-expanded="true" aria-controls="collapse78">
											How to Register or Make An Account in Genius?
										</button>
									</h3>
								</div>
								<div id="collapse78" class="collapse" aria-labelledby="heading78" data-parent="#accordion">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="panel">
								<div class="panel-title" id="heading22">
									<h3 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapse22" aria-expanded="true" aria-controls="collapse22">
											How to Register or Make An Account in Genius?
										</button>
									</h3>
								</div>
								<div id="collapse22" class="collapse show" aria-labelledby="heading22" data-parent="#accordion">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title" id="headingFoure">
									<h3 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="true" aria-controls="collapseFoure">
											Adipiscing Diamet Nonnumy Nibh Euismod?
										</button>
									</h3>
								</div>
								<div id="collapseFoure" class="collapse"  data-parent="#accordion">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title" id="heading33">
									<h3 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse33" aria-expanded="true" aria-controls="collapse33">
											What is Genius Courses?
										</button>
									</h3>
								</div>
								<div id="collapse33" class="collapse" aria-labelledby="heading33" data-parent="#accordion">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title" id="heading36">
									<h3 class="mb-0">
										<button class="btn btn-link  collapsed" data-toggle="collapse" data-target="#collapse36" aria-expanded="true" aria-controls="collapse36">
											How to Register or Make An Account in Genius?
										</button>
									</h3>
								</div>
								<div id="collapse36" class="collapse" aria-labelledby="heading36" data-parent="#accordion">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-title" id="heading998">
									<h3 class="mb-0">
										<button class="btn btn-link  collapsed" data-toggle="collapse" data-target="#collapse998" aria-expanded="true" aria-controls="collapse998">
											How to Register or Make An Account in Genius?
										</button>
									</h3>
								</div>
								<div id="collapse998" class="collapse" aria-labelledby="heading998" data-parent="#accordion">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end of #accordion -->
				</div>
			</div>
		</section>
	<!-- End FAQ section
		============================================= -->


	<!-- Start Course category
		============================================= -->
		<section id="course-category" class="course-category-section">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">COURSES CATEGORIES</span>
					<h2>Browse Courses<span> By Category.</span></h2>
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
											<li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
											<li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
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
												<li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
												<li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
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
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection