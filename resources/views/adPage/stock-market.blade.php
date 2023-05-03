@extends('layouts.ad-main')
    @section('content')
    <section id="breadcrumb" class="ad-page-banner breadcrumb-section relative-position backgroud-style" style="background-image: url({{ (isset($category->banner_image))?getSizedImage('',$category->banner_image):url('assets/img/banner/brt-1.jpg') }});">
		<div class="blakish-overlay"></div>
		<div class="container">
			<div class="page-breadcrumb-content">
				<div class="page-breadcrumb-title">
                    <h1>Advanced Certification in Data Science and AI</h1>
				</div>
                <div class="job-opportunity-text">
                    <h2> Learn from IIT Madras Faculty &amp; Industry Experts with Campus Immersion at IIT Madras <h2>
                </div>
				<div class="page-breadcrumb-description">
					{!!(isset($contentMain))?$contentMain->description:"Courses" !!}
				</div>
				<div class="page-breadcrumb-option">
                    <a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn('',3)"><i class="fas fa-download"></i> Brochure</a>
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

	<!-- Start latest section
		============================================= -->
		<section id="latest-area" class="latest-area-section home-page-three">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left "  >
								<h2>Latest <span>News.</span></h2>
							</div>
							<div class="latest-news-posts">
								<div class="latest-news-area "  >
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

								<div class="latest-news-posts "  >
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

								<div class="view-all-btn bold-font "  >
									<a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /latest-news -->
					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left "  >
								<h2>Upcoming <span>Events.</span></h2>
							</div>
							<div class="latest-events "  >
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

							<div class="latest-events "  >
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

							<div class="latest-events "  >
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

							<div class="view-all-btn bold-font "  >
								<a  href="#">Check Calendar   <i class="fas fa-calendar-alt"></i></a>
							</div>
						</div>
					</div>
					<!-- /events -->

					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left "  >
								<h2>Latest <span>Video.</span></h2>
							</div>
							<div class="latest-video-poster relative-position mb20 "  >
								<img src="{{url('assets/img/banner/v-1.jpg')}}" alt="">
								<div class="video-play-btn text-center gradient-bg">
									<a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=-g4TnixUdSc"><i class="fas fa-play"></i></a>
								</div>
							</div>
							<h3 class="latest-title bold-font "  ><a href="#">Learning IOS Apps in Amsterdam.</a></h3>
							<p class="mb25 "  >Lorem ipsum dolor sit amet, consectetuer delacosta adipiscing elit, sed diam nonummy.</p>
							<div class="view-all-btn bold-font "  >
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