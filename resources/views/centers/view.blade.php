@extends('layouts.main')

    @section('content')
		<div class="page-inside-menu header-fixed" style="display:none">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<nav class="navbar-menu inside-navbar">
							<div class="nav-menu ul-li">
								<ul class="centerMenu" >
									@foreach ($centerMenu as $key => $menuItem)
										<li class="" rel="{{$menuItem['rel']}}">
											<a href="{{ url($key) }}">{{$menuItem['value']}}</a>
										</li>
									@endforeach
								</ul>
							</div>
						</nav>						
					</div>
					<div class="col-md-3 text-center" >
						<div class="enroll-btn header-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
							<a href="#"> Apply Now </a>
						</div>
					</div>
				</div>
			</div>
		</div>
    <!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">{{$center->name}}</h2>
					</div>
					<div class="">
						{!! $center->excerpt !!}
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

		<section id="search-center" class="search-center-section search-center-secound">
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
								<a href="#"> Enroll This center </i></a>
							</div>
						</div>
						<!-- /counter -->
					</div>
				</div>
			</div>
		</section>

		<!-- Start of center details section
		============================================= -->
		<section id="center-details" class="center-details-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="center-details-item">
							<!-- <div class="center-single-pic mb30">
								<img src="{{ url('assets/img/center/cs-1.jpg') }}" alt="">
							</div> -->
							<div class="faq-tab mb65">
								<div class="faq-tab-ques  ul-li">
									<div class="center-details-category ul-li tab-button text-left mb25 tab-button text-left mb25">
										<span>center <b>Section:</b></span>
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
											<div class="center-details-content">
												<div class="center-single-text">
													<div class="center-details-content">
														{!! $center->description !!}
													</div>
												</div>
											</div>
										</div>
										<!-- #tab1 -->

										<div id="tab2" class="tab-content-1 pt35">
											<div class="center-details-content criteria">
												{!! $center->criteria !!}
											</div>
										</div>
										<!-- #tab2 -->

										<div id="tab3" class="tab-content-1 pt35">
											<div class="center-details-content highlights">
												<div class="affiliate-market-guide mb65">
													<div class="section-title-2 mb20 headline text-left">
														<h2><span>Affiliate Marketing</span> A Begginer's Guide</h2>
													</div>
													{!! $center->highlights !!}
												</div>
											</div>
										</div>
										<!-- #tab3 -->

										<div id="tab4" class="tab-content-1 pt35">
											<div class="center-details-content">
												<div class="affiliate-market-guide mb65">
													<div class="section-title-2 mb20 headline text-left">
														<h2><span>Affiliate Marketing</span> A Begginer's Guide</h2>
													</div>

													<div class="affiliate-market-accordion">
														<div id="accordion" class="panel-group">
															
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
					</div>

					<div class="col-md-3">
						<div class="side-bar">
							<div class="latest-area-content " >
								<div class="latest-video-poster relative-position mb20">
									<img src="{{ url('assets/img/center/bc-1.jpg') }}" alt="">
									<div class="video-play-btn text-center gradient-bg">
										<a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=-g4TnixUdSc"><i class="fas fa-play"></i></a>
									</div>
								</div>
								<div class="vidoe-text text-center">
									<h3 class="latest-title bold-font"><a href="#">Learning IOS Apps in Amsterdam.</a></h3>
								</div>
								
							</div>
							<div class="enrolled-student mt15">								
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
									{{ thousandsCurrencyFormat($center->number_of_enrolled) }} Enrolled
								</div>
							</div>
							<div class="couse-feature ul-li-block">
								<ul>
									<li>Modules <span>{{ $center->no_of_module }} Modules</span></li>
									<li>Language  <span>English, France</span></li>
									<li>Video  <span>8 Hours</span></li>
									<li>Duration <span>{{ $center->duration }}</span></li>
									<li>Call  <a href="tel:{{ get_theme_setting('mobile') }}" ><span>+91 {{ get_theme_setting('mobile') }}</span></a> </li>
								</ul>
							</div>
							<div class="center-side-bar-widget">
								<div class="genius-btn gradient-bg text-center text-uppercase float-left bold-font">
									<a href="#"> <i class="fas fa-download"></i> Download Syllabus</a>
								</div>
								<div class="like-center">
									<a href="#"><i class="fas fa-heart"></i></a>
								</div>
							</div>
							<!-- <div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Related </span>News.</h2>
								<div class="latest-news-posts">
									<div class="latest-news-area">
										<div class="latest-news-thumbnile relative-position">
											<img src="{{ url('assets/img/blog/lb-1.jpg') }}" alt="">
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

									<div class="latest-news-posts">
										<div class="latest-news-area">
											<div class="latest-news-thumbnile relative-position">
												<img src="{{ url('assets/img/blog/lb-2.jpg') }}" alt="">
												<div class="hover-search">
													<i class="fas fa-search"></i>
												</div>
												<div class="blakish-overlay"></div>
											</div>
											<div class="date-meta">
												<i class="fas fa-calendar-alt"></i> 26 April 2018
											</div>
											<h3 class="latest-title bold-font"><a href="#">No.1 The Best Online center 2018.</a></h3>
										</div>
									</div>

									<div class="view-all-btn bold-font">
										<a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
									</div>
								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Featured</span> center.</h2>
								<div class="featured-center">
									<div class="best-center-pic-text relative-position">
										<div class="best-center-pic relative-position">
										<img src="{{ url('assets/img/blog/fb-1.jpg') }}" alt="">
											<div class="trend-badge-2 text-center text-uppercase">
												<i class="fas fa-bolt"></i>
												<span>Trending</span>
											</div>
										</div>
										<div class="best-center-text">
											<div class="center-title mb20 headline relative-position">
												<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
											</div>
											<div class="center-meta">
												<span class="center-category"><a href="#">Web Design</a></span>
												<span class="center-author"><a href="#">250 Students</a></span>
											</div>
										</div>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
	    <!-- End of center details section
		============================================= -->	
		<!-- Start of sponsor section
		============================================= -->
		<section id="career" class="sponsor-section">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left">
					<h2>Get placed <span> where you belong.</span></h2>
				</div>
				<div class="sponsor-item sponsor-1">
					<div class="sponsor-pic text-center">
						<img src="{{url('assets/img/sponsor/s-1.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{url('assets/img/sponsor/s-1.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{url('assets/img/sponsor/s-1.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{url('assets/img/sponsor/s-1.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{url('assets/img/sponsor/s-1.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{url('assets/img/sponsor/s-1.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{url('assets/img/sponsor/s-1.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{url('assets/img/sponsor/s-1.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{url('assets/img/sponsor/s-1.jpg')}}" alt="">
					</div>
				</div>
			</div>
		</section>
		<!-- End of sponsor section
		============================================= -->

		<!-- Start of testimonial secound section
		============================================= -->
		<section id="alumni" class="testimonial_2_section">
			<div class="container">
				<div class="testimonial-slide">
					<div class="section-title mb20 headline text-center">
						<span class="subtitle text-uppercase">About This center </span>
						<h3>Student<span> Speaks.</span></h3>
					</div>
					<div  id="testimonial-slide-item" class="testimonial-slide-area">
						@foreach(get_testimonials("center",$center->id) as $value)
						<div class="student-qoute">
							{!! $value->comment !!}
							<div class="student-name-designation">
								<span class="st-name bold-font">{{ $value->name }}</span>
								<span class="st-designation">{{ $value->dasignation }}</span>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<!-- End  of testimonial secound section
		============================================= -->
		<section id="centers" class="best-center-section">
			<div class="container">
				<div class="section-title mb10 headline text-center">
					<span class="subtitle text-uppercase">SEARCH OUR centerS</span>
					<h3>Check<span> Related center.</span></h3>
				</div>
				<div class="best-center-area mb10">
					<div class="row">
					@if($courses)
						@foreach ($courses as $value)
						<div class="col-md-3">
							<div class="best-center-pic-text relative-position">
								<div class="best-center-pic relative-position">
									<img src="{{ URL::to('/') }}/assets/img/center/bc-1.jpg" alt="">
									<div class="trend-badge-2 text-center text-uppercase">
										<i class="fas fa-bolt"></i>
										<span>Trending</span>
									</div>
									<div class="center-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="center-details-btn">
										<a href="{{ URL::to('/courses') }}/{{ $value->slug }}">center DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-center-text">
									<div class="center-title mb20 headline relative-position">
										<h3><a href="{{ URL::to('/courses') }}/{{ $value->slug }}">{{ $value->name }}</a></h3>
									</div>
									<div class="center-meta">
										<span class="center-category"><a href="{{ URL::to('/courses') }}/{{ $value->slug }}">Web Design</a></span>
										<span class="center-author"><a href="{{ URL::to('/courses') }}/{{ $value->slug }}">250 Students</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /center -->
					@endforeach	
						@endif	
						
					</div>
				</div>
			</div>
		</section>
		@php
			$reviewRatings = get_reviews_ratings("center",$center->id);
		@endphp
		<section id="review" class="teacher-details-area" >
			<div class="container"> 
				<div class="row" >
					<div class="col-md-9" >
						<!-- /center-details -->				
						<div class="center-review">
							<div class="section-title-2 mb20 headline text-left">
								<h2>center <span>Reviews:</span></h2>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="ratting-preview">
										<div class="row">
											<div class="col-md-4">
												<div class="avrg-rating ul-li">
													<b>Average Rating</b>													
													<span class="avrg-rate">{{ $reviewRatings['avarageRating'] }}</span>
													<ul>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
													</ul>
													<b>{{ $reviewRatings['reviewCount'] }} Ratings</b>
												</div>
											</div>
											<div class="col-md-8">												
												<div class="avrg-rating ul-li">
													<span>Details</span>
													@foreach($reviewRatings['ratings'] as $key => $value)
													<div class="rating-overview">
														<span class="start-item">{{$key}} Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">{{$value}}</span>
													</div>
													@endforeach
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
									@foreach($reviewRatings['reviews'] as $review)
									<li>
										<div class="author-name-rate">
											<div class="author-name float-left">
												BY: <span>{{$review->reviewer_name}}</span> 
											</div>
											<div class="comment-ratting float-right ul-li">
												<ul>
													@for($i=1; $i<=$review->rating; $i++)
														<li class="active"><i class="fas fa-star"></i></li>
													@endfor
												</ul>
											</div>
											<div class="time-comment float-right">{{ $review->created_at->format('d M, Y') }}</div>
										</div>
										<div class="author-designation-comment">
											<h3>{{$review->title}}</h3>
											<p>
												{{$review->review}}
											</p>
										</div>
									</li>
									@endforeach									
								</ul>

								<div class="reply-comment-box">
									<div class="p-2 mb-2 review-success text-white " style="display:none">
									 Review has been submitted successfully 
									</div>
									<div class="review-option">
										<div class="section-title-2  headline text-left float-left">
											<h2>Add <span>Reviews.</span></h2>
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
										<form id="submit-review" method="POST" action="/no-form" data-lead="Residential">
											<div class="row">
												<div class="col-md-6">
													<label for="name">Your Name</label>
													<input type="text" name="reviewer_name" id="reviewer_name" required="required">
												</div>
												<div class="col-md-6">
													<label for="phone">Email Address</label>
													<input type="email" name="reviewer_email" id="reviewer_email" required="required">
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<label for="name">Summary</label>
													<input type="text" name="title" id="title" required="required">
												</div>
											</div>
											<label for="review">Message</label>
											<textarea name="review" id="review" rows="2" cols="20" required="required"></textarea>
											<div class="nws-button text-center  gradient-bg text-uppercase">
												<button type="button" class="submitReview">Send Message now</button> 
											</div>
											<input type="hidden" name="model" id="model" value="center">
											<input type="hidden" name="model_id" id="model_id" value="{{ $center->id }}">
											<input type="hidden" id="rating" name="rating" value="" />
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" >
					</div>
				</div>
			</div>
		</section>
		
		<section id="faq" class="teacher-details-area">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
                    <div class="about-teacher about-faq faq-secound-home-version">
							<div class="section-title-2  headline text-left">
								<h2>Frequently  <span>Ask &amp; Questions.</span></h2>
							</div>							
							<div class="faq-tab mb35">
								<div class="faq-tab-ques  ul-li">
                                    <div id="accordion3" class="panel-group">
                                        <div class="panel">
                                            <div class="panel-title" id="heading_0">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_0" aria-expanded="true" aria-controls="collapse_0">
                                                        What Is the Eligibility Criteria for The Admission Process?
													</button>
                                                </h3>
                                            </div>
                                            <div id="collapse_0" class="collapse" aria-labelledby="heading_0" data-parent="#accordion3">
                                                <div class="panel-body">
                                                   <p>10+2 Passed or Graduate in Science Or Commerce</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-title" id="heading_1">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                                        What Kind of Academic Support Does the Program Provide?                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="collapse_1" class="collapse" aria-labelledby="heading_1" data-parent="#accordion3">
                                                <div class="panel-body">
                                                   <p>It is a practical oriented program, where students gets hands-on training by the industry expert faculty through case studies &amp; tech applications. Also students will get grooming sessions that makes them job ready.</p>
                                                </div>
                                            </div>
                                        </div>
										<div class="panel">
                                            <div class="panel-title" id="heading_2">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                                                        Do You Provide Placement Support?                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="collapse_2" class="collapse" aria-labelledby="heading_2" data-parent="#accordion3">
                                                <div class="panel-body">
                                                   <p>Obviously! Our 3 years program consists of 2 years classroom training &amp; 1 year paid internship. After completion of the center the student will get guaranteed placement in a renowned company.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-title" id="heading_3">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                                                        What Companies Are Invited for Campus Recruitment?                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="collapse_3" class="collapse" aria-labelledby="heading_3" data-parent="#accordion3">
                                                <div class="panel-body">
                                                   <p>We have tie-ups with 70000+ employers, which contains some of the India’s top companies. After successful completion of the program, students will be placed in those organisations.</p>
                                                </div>
                                            </div>
                                        </div>
									</div>
                                    <!-- end of #accordion -->
								</div>
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
                    </div>
                </div>
            </div>
        </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection