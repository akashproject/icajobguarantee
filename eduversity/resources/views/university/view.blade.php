@extends('layouts.main')
    @section('content')
	<!-- Start of breadcrumb section
		============================================= -->
	<section class="header-devider"></section>
	<section class="header-margin"></section>
	<section id="breadcrumb" class="">
		<img src="{{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }}">
		<div class="container-fluid bg-white">
			<div class="container relative-position">
				<div class="text-center center-image bg-gray left-0" style="width: 169px;">
					<img src="{{ (getSizedImage('',$contentMain->featured_image)) ? getSizedImage('',$contentMain->featured_image) : url('assets/img/logo/center-logo.webp') }}" >
				</div>
				<div class="center-info-banner">
					<h2 class="">ICA Edu Skills | {{ $contentMain->name }}</h2>
					<div class="center-info-banner-description" >{!! $contentMain->excerpt !!}</div>
					<p> <a href="{{ url('/state/'.getStateById($contentMain->state_id)->slug) }}"><i class="fas fa-map-marker"></i> {{ getStateById($contentMain->state_id)->name }}</a>, <a href="{{ url('/city/'.getCityById($contentMain->city_id)->slug) }}"> {{ getCityById($contentMain->city_id)->name }} </a></p>
					<div class="display-block">
						<div class="center-banner-comment-ratting ul-li">
							<ul>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
						</div>
						<div class="center-banner-student-enrolled bold-font">
							(768) Rating | 2.5k Enrolled
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of breadcrumb section
		============================================= -->
	<!-- End of breadcrumb section
	============================================= -->
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
								<span class="counter-count bold-font">500</span><span>K+</span>
								<p>Satisfied Students</p>
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
								<span class="counter-count bold-font">70</span><span>K+</span>
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
							<a onclick="lead_capture_form_btn('',{{ $contentMain->id }})" href="javascript:void(0)"> Connect To University </i></a>
						</div>
					</div>
					<!-- /counter -->
				</div>
			</div>
		</div>
	</section>

	<section id="course-details" class="course-details-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="course-details-item">
						<!-- <div class="course-single-pic mb30">
							<img src="https://www.icajobguarantee.com/assets/img/course/cs-1.jpg" alt="">
						</div> -->
						<div class="faq-tab mb65">
							<div class="faq-tab-ques  ul-li">
								<div class="course-details-category ul-li tab-button text-left mb25 tab-button text-left mb25">
									<ul class="product-tab ">
										<li rel="tab1" class="active">Summary</li>
										<li rel="tab2" class=""> Highlights </li>
										<li rel="tab3" class=""> Courses </li>
										<li rel="tab4" class=""> Placements </li>
										<li rel="tab5" class=""> Gallery  </li>
										<li rel="tab6" class="tab_last"> Map </li>
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
													{!! $contentMain->description !!}
												</div>
											</div>
										</div>
									</div>
									<!-- #tab1 -->

									<div id="tab2" class="tab-content-1 pt35">
										<div class="center-details-content highlights">
											<div class="affiliate-market-guide mb65">
												<div class="section-title-2 mb20 headline text-left">
													<h3><span>ICA Centre</span> Quick Training Highlights</h3>
												</div>
												{!! $contentMain->highlights !!}
											</div>
										</div>
									</div>
									<!-- #tab3 -->
									<div id="tab3" class="tab-content-1 pt35">
										<div class="best-course-area mb10">
											<div class="row">
												@if(getCourses())
													@foreach (getCourses($contentMain->courses) as $value)
													<div class="col-md-4">
														<div class="best-course-pic-text relative-position">
															<div class="best-course-pic relative-position">
																<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):url('/assets/img/course/bc-1.jpg') }}" alt="">
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
																	<a href="{{ URL::to('/courses') }}/{{ $value->slug }}">Know More <i class="fas fa-arrow-right"></i></a>
																</div>
																<div class="blakish-overlay"></div>
															</div>
															<div class="best-course-text">
																<div class="course-title mb10 headline relative-position">
																	<h3><a href="{{ URL::to('/courses') }}/{{ $value->slug }}">{{ $value->name }}</a></h3>
																</div>
																<div class="course-short-description mb10" >
																	{!! substr($value->excerpt,0,100); !!}...
																</div>
															</div>
															<div class="more-btn text-center" >
																<div class="course-type-list">	
																	<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $value->id }},'')"><i class="fas fa-download"></i> Brochure</a>
																</div>
																<div class="course-type-list">														
																	<a class="btn-outline" href="{{ URL::to('/courses') }}/{{ $value->slug }}" >View More <i class="fas fa-caret-right"></i></a>
																</div>														
															</div>
														</div>
													</div>
													<!-- /course -->
													@endforeach	
												@endif	
												
											</div>
										</div>
									</div>
									<!-- #tab3 -->
									<div id="tab4" class="tab-content-1 pt35">
										<div class="placed-grid-box">
											
										</div>
										<div class="placed-grid-box">
											
										</div>
									</div>
									<div id="tab5" class="tab-content-1 pt35">
										<div class="course-details-content">
											<div class="affiliate-market-guide mb65">
												<div class="row">
													
												</div>
											</div>
											<!-- /market guide -->
										</div>
									</div>
									<!-- #tab4 -->
									<div id="tab6" class="tab-content-1 pt35">
										<div class="course-details-content">
											<div class="affiliate-market-guide mb65">
												<div class="affiliate-market-accordion">
												
												</div>
											</div>
											<!-- /market guide -->
										</div>
									</div>
									<!-- #tab5 -->
								</div>
							</div>
						</div>		
						
					</div>						
				</div>

				<div class="col-md-4">
					<div class="side-bar">													
						<div class="side-bar-widget">
							<h2 class="widget-title text-capitalize"><span>Contact </span>Us.</h2>
							<div class="latest-news-posts">
								<ul class="side-bar-widget-contact-info">
									<li>
										<div class="mail-phone">
											<div class="info-icon">
												<i class="text-gradiant fas fa-envelope"></i>
											</div>
											<div class="info-content">
												<a href="mailto:eduversity@icajobguarantee.com" class="info-id">eduversity@icajobguarantee.com</a>
												<span class="info-text">Connect Via Email</span>
											</div>
										</div>
									</li>
									<li>
										<div class="mail-phone">
											<div class="info-icon">
												<i class="text-gradiant fas fa-phone-square"></i>
											</div>
											<div class="info-content">
												<a href="tel:9330904657" class="info-id">8100917985</a>
												<span class="info-text">Connect Via Call</span>
											</div>
										</div>
									</li>
									<li>
										<div class="mail-phone">
											<div class="info-icon">
												<i class="text-gradiant fas fa-map-marker-alt"></i>
											</div>
											<div class="info-content">
												<span class="info-id">{{$contentMain->name}}</span>
												<!-- <span class="info-text">
													<a href="javascript:void(0)"> ICA Edu Skills Dalhousie
														2nd Floor, 4, Brabourne Rd,
														Radha Bazar, Lal Bazar,
														Dalhousie, Kolkata, West Bengal – 700001 </a>
													<br>
													<a href="#" class="info-id"> Get Direction </a>
												</span> -->
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>			
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sponsor-section">
		<div class="container">
			<div class="course-teacher about-teacher-2">
				<div class="course-advantage about-teacher-2">
					<div class="section-title mb20 headline text-center">
						<span class="subtitle text-uppercase">WE ARE UNIQUE</span>
						<h3>What are Our <span> Specialities</span></h3>
					</div>
					<div class="service-slide_4 row">
						<div class="col-md-4 mb20">
							<div class="service-text-icon">
								<div class="service-icon float-left">
									<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
								</div>
								<div class="service-text">
									<h3 class="bold-font">Practical Training</h3>
									<p class="text-black" >The technology enabled course curriculum consists of 60% practical &amp; 40% theoretical classes.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb20">
							<div class="service-text-icon">
								<div class="service-icon float-left">
									<i class="text-gradiant flaticon-clipboard-with-pencil"></i>
								</div>
								<div class="service-text">
									<h3 class="bold-font">Industry Exposure</h3>
									<p class="text-black">Regular industry visits are an essential part of the course to provide first hand industry exposures.</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb20">
							<div class="service-text-icon">
								<div class="service-icon float-left">
									<i class="text-gradiant flaticon-list"></i>
								</div>
								<div class="service-text">
									<h3 class="bold-font">Case Study Based Modules</h3>
									<p class="text-black">Curriculums are designed with real life case studies, instead of regular theoretical approach.</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb20">
							<div class="service-text-icon">
								<div class="service-icon float-left">
									<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
								</div>
								<div class="service-text">
									<h3 class="bold-font">Paid Internship</h3>
									<p class="text-black">The curriculum contains 2 years of fulltime classroom training &amp; 1 year paid internship.</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb20">
							<div class="service-text-icon">
								<div class="service-icon float-left">
									<i class="text-gradiant flaticon-clipboard-with-pencil"></i>
								</div>
								<div class="service-text">
									<h3 class="bold-font">Job Guarantee</h3>
									<p class="text-black">All the students will get guaranteed placement after the course completion.</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb20">
							<div class="service-text-icon">
								<div class="service-icon float-left">
									<i class="text-gradiant flaticon-list"></i>
								</div>
								<div class="service-text">
									<h3 class="bold-font">Grooming Sessions</h3>
									<p class="text-black">Rigorous grooming &amp; mock sessions are included in the program to make the students job ready.</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<!-- /course-advantage -->
			</div>
		</div>
	</section>

	<!-- Start of sponsor section
	============================================= -->
	<section id="career" class="sponsor-section">
		<div class="container">
			<div class="section-title-2 mb65 headline text-left">
				<h2>Get placed <span> where you belong.</span></h2>
			</div>
			<div class="sponsor-item sponsor-1">
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

	<!-- Start of faq section
	============================================= -->
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
									@foreach(getFaqs("University") as $key => $value)
									<div class="panel">
										<div class="panel-title" id="heading_{{$key}}">
											<h3>
												<button class="btn btn-link" data-toggle="collapse" data-target="#collapse_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$key}}">
												{{ $value->question }}
												</button>
											</h3>
										</div>
										<div id="collapse_{{$key}}" class="collapse" aria-labelledby="heading_{{$key}}" data-parent="#accordion3">
											<div class="panel-body">
											{!! $value->answer !!}
											</div>
										</div>
									</div>
									@endforeach                                       
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
	<!-- End of faq section
	============================================= -->	
@php
$reviewRatings = get_reviews_ratings("University",$contentMain->id);
	@endphp
	<section id="review" class="teacher-details-area" >
		<div class="container"> 
			
			<div class="row" >
				<div class="col-md-9" >
					@if($reviewRatings)
					<!-- /course-details -->				
					<div class="course-review">
						<div class="section-title-2 mb20 headline text-left">
							<h2>University <span>Reviews:</span></h2>
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
					@else
					<h5> There are no reviews yet. Be the first one to write one. </h4>
					@endif
					<div class="couse-comment">
						<div class="blog-comment-area ul-li about-teacher-2">
							<ul class="comment-list">
								@if($reviewRatings)
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
										<div class="time-comment float-right">{{ date("D m, Y", strtotime($review->created_at)) }}</div>
									</div>
									<div class="author-designation-comment">
										<h3>{{$review->title}}</h3>
										<p>
											{{$review->review}}
										</p>
									</div>
								</li>
								@endforeach		
								@endif
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
												<input type="radio" name="stars" value="1" required/>
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
											<button type="submit" class="submitReview">Send Message now</button> 
										</div>
										<input type="hidden" name="model" id="model" value="Course">
										<input type="hidden" name="model_id" id="model_id" value="{{ $contentMain->id }}">
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
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection