@extends('layouts.main')

    @section('content')

    <!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">{{$course->name}}</h2>
					</div>
					<div class="">
						{!! $course->description !!}
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


		<!-- Start of course details section
		============================================= -->
		<section id="course-details" class="course-details-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="course-details-item">
							<div class="course-single-pic mb30">
								<img src="{{ url('assets/img/course/cs-1.jpg') }}" alt="">
							</div>
							<div class="faq-tab mb65">
								<div class="faq-tab-ques  ul-li">
									<div class="course-details-category ul-li tab-button text-left mb25 tab-button text-left mb25">
										<span>Course <b>Section:</b></span>
										<ul class="product-tab ">
											<li class="active" rel="tab1">Summary</li>
											<li rel="tab2"> Criteria </li>
											<li rel="tab3"> Highlights </li>
											<li rel="tab4">  Curriculum  </li>
										</ul>
									</div>
									<!-- /tab-head -->

									<!-- tab content -->
									<div class="tab-container">
										<!-- 1st tab -->
										<div id="tab1" class="tab-content-1 pt35">
											<div class="course-details-content">
												<div class="course-single-text">
													<div class="course-details-content">
														{!! $course->description !!}
													</div>
												</div>
											</div>
										</div>
										<!-- #tab1 -->

										<div id="tab2" class="tab-content-1 pt35">
											<div class="course-details-content">
												
											</div>
										</div>
										<!-- #tab2 -->

										<div id="tab3" class="tab-content-1 pt35">
											<div class="course-details-content">
												
											</div>
										</div>
										<!-- #tab3 -->

										<div id="tab4" class="tab-content-1 pt35">
											<div class="course-details-content">
												<div class="affiliate-market-guide mb65">
													<div class="section-title-2 mb20 headline text-left">
														<h2><span>Affiliate Marketing</span> A Begginer's Guide</h2>
													</div>

													<div class="affiliate-market-accordion">
														<div id="accordion" class="panel-group">
															@foreach($carriculams as $key => $carriculam)
															@if($carriculam->name)
															<div class="panel">
																<div class="panel-title" id="heading{{$key}}">
																	<div class="ac-head">												
																		<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
																			<span>0{{$key + 1}}</span> {{$carriculam->name}}
																		</button>
																		<div class="course-by">
																			BY: <b>TONI KROSS</b> 
																		</div>
																		<div class="leanth-course">
																			<span>{{ $carriculam->duration }} Hours</span>
																			<span>Adobe photoshop</span>
																		</div>
																	</div>
																</div>
																<div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordion">
																	<div class="panel-body">
																		@foreach(json_decode($carriculam->lecture) as $key => $lecture)
																			<div class="" >
																				<strong> Lecture {{$key + 1}} : </strong> {!! $lecture !!}
																			</div>
																		@endforeach
																		<h4 > Module Benefit </h4>
																		<div class="benefit-content" >
																		{!! $carriculam->benefits !!}
																		</div>
																	</div>
																</div>
															</div>
															@endif
															@endforeach
														</div>
													</div>
												</div>
												<!-- /market guide -->
											</div>
										</div>
										<!-- #tab3 -->
									</div>
								</div>
							</div>		
							
						</div>
						<!-- /course-details -->				
						<div class="course-review">
							<div class="section-title-2 mb20 headline text-left">
								<h2>Course <span>Reviews:</span></h2>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="ratting-preview">
										<div class="row">
											<div class="col-md-4">
												<div class="avrg-rating ul-li">
													<b>Average Rating</b>
													<span class="avrg-rate">5.0</span>
													<ul>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
													</ul>
													<b>1.225 Ratings</b>
												</div>
											</div>
											<div class="col-md-8">
												<div class="avrg-rating ul-li">
													<span>Details</span>
													<div class="rating-overview">
														<span class="start-item">5 Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">1.225</span>
													</div>
													<div class="rating-overview">
														<span class="start-item">4 Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">0</span>
													</div>
													<div class="rating-overview">
														<span class="start-item">3 Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">0</span>
													</div>
													<div class="rating-overview">
														<span class="start-item">2 Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">0</span>
													</div>
													<div class="rating-overview">
														<span class="start-item">1 Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">0</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /review overview -->

						<div class="couse-comment">
							<div class="blog-comment-area ul-li about-teacher-2">
								<ul class="comment-list">
									<li>
										<div class=" comment-avater">
											<img src="assets/img/blog/ath-2.jpg" alt="">
										</div>

										<div class="author-name-rate">
											<div class="author-name float-left">
												BY: <span>FRANK LAMPARD</span> 
											</div>
											<div class="comment-ratting float-right ul-li">
												<ul>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
											</div>
											<div class="time-comment float-right">3 Days ago</div>
										</div>
										<div class="author-designation-comment">
											<h3>Great Course!! Recommended for Everyone</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
											</p>
										</div>
									</li>

									<li>
										<div class=" comment-avater">
											<img src="assets/img/blog/ath.jpg" alt="">
										</div>

										<div class="author-name-rate">
											<div class="author-name float-left">
												BY: <span>FRANK LAMPARD</span> 
											</div>
											<div class="comment-ratting float-right ul-li">
												<ul>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
											</div>
											<div class="time-comment float-right">3 Days ago</div>
										</div>
										<div class="author-designation-comment">
											<h3>Great Course!! Recommended for Everyone</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
											</p>
										</div>
									</li>
								</ul>

								<div class="reply-comment-box">
									<div class="review-option">
										<div class="section-title-2  headline text-left float-left">
											<h2>Add  <span>Reviews.</span></h2>
										</div>
										<div class="review-stars-item float-right mt15">
											<span>Your Rating: </span>
											<form class="rating">
												<label>
													<input type="radio" name="stars" value="1" />
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="stars" value="2" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="stars" value="3" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>   
												</label>
												<label>
													<input type="radio" name="stars" value="4" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="stars" value="5" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
											</form>
										</div>
									</div>
									<div class="teacher-faq-form">
										<form method="POST" action="/no-form" data-lead="Residential">
											<div class="row">
												<div class="col-md-6">
													<label for="name">Your Name</label>
													<input type="text" name="name" id="name" required="required">
												</div>
												<div class="col-md-6">
													<label for="phone">Email Address</label>
													<input type="tel" name="phone" id="phone" required="required">
												</div>
											</div>
											<label for="comments">Message</label>
											<textarea name="comments" id="comments" rows="2" cols="20" required="required"></textarea>
											<div class="nws-button text-center  gradient-bg text-uppercase">
												<button type="submit" value="Submit">Send Message now</button> 
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="side-bar">
							<div class="course-side-bar-widget">
								<div class="genius-btn gradient-bg text-center text-uppercase float-left bold-font">
									<a href="#">Enroll THis course <i class="fas fa-caret-right"></i></a>
								</div>
								<div class="like-course">
									<a href="#"><i class="fas fa-heart"></i></a>
								</div>
							</div>
							<div class="enrolled-student">
								<div class="comment-ratting float-left ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
								</div>
								<div class="student-number bold-font">
									250 Enrolled
								</div>
							</div>
							<div class="couse-feature ul-li-block">
								<ul>
									<li>Lectures <span>20 Lectures</span></li>
									<li>Language  <span>English, France</span></li>
									<li>Video  <span>8 Hours</span></li>
									<li>Duration <span>30 Days</span></li>
									<li>Includes  <span>Breakfast</span></li>
								</ul>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Related </span>News.</h2>
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
										</div>
										<!-- /post -->
									</div>

									<div class="view-all-btn bold-font">
										<a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
									</div>
								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Featured</span> Course.</h2>
								<div class="featured-course">
									<div class="best-course-pic-text relative-position">
										<div class="best-course-pic relative-position">
											<img src="assets/img/blog/fb-1.jpg" alt="">
											<div class="trend-badge-2 text-center text-uppercase">
												<i class="fas fa-bolt"></i>
												<span>Trending</span>
											</div>
										</div>
										<div class="best-course-text">
											<div class="course-title mb20 headline relative-position">
												<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
											</div>
											<div class="course-meta">
												<span class="course-category"><a href="#">Web Design</a></span>
												<span class="course-author"><a href="#">250 Students</a></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	    <!-- End of course details section
		============================================= -->	

    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection