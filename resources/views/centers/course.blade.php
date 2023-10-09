@extends('layouts.main')
    @section('content')
    <div class="page-inside-menu header-fixed" style="display:none">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <nav class="navbar-menu inside-navbar">
                        <div class="nav-menu ul-li">
                            <ul class="courseMenu">                         
                                <li class="" rel="tab3">
                                    <a href="#tab3">Highlights</a>
                                </li>                        
                                <li class="" rel="tab4">
                                    <a href="#tab4">Syllabus</a>
                                </li>                               
                                <li class="" rel="">
                                    <a href="#career">Careers</a>
                                </li>                              
                                <li class="" rel="">
                                    <a href="#alumni">Alumni</a>
                                </li>
                                <li class="" rel="">
                                    <a href="#courses">Related Courses</a>
                                </li>
                                <li class="" rel="">
                                    <a href="#review">Reviews</a>
                                </li>
                                <li class="" rel="">
                                    <a href="#faq">FAQs</a>
                                </li>
                            </ul>
                        </div>
                    </nav>						
                </div>
                <div class="col-md-3 text-center">
                    <div class="enroll-btn header-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                        <a onclick="lead_capture_form_btn('',{{ $centerMain->id }})" href="javascript:void(0)"> Apply Now </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="breadcrumb" class="inner-banner relative-position backgroud-style" style="background-image: url(https://www.icajobguarantee.com/public/upload/2023-06-28/tinywow_mis-banner_27889381.webp);">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ol class="inner-banner-breadcrumb">
                        <li class="breadcrumbElement">
                            <a href="{{ route('index') }}">Home</a>
                            <span> 
                                <i class="fas fa-chevron-right"> </i>
                            </span> 
                        </li>
                        <li class="breadcrumbElement">
                            <a href="{{ url('/centers') }}">Centers</a>
                            <span class="breadcrumbElement"> 
                                <i class="fas fa-chevron-right"> </i>
                            </span> 
                        </li>
                        <li class="breadcrumbElement">
                            <a href="{{ url('/centers/'.$centerMain->slug) }}"> {{ $centerMain->name }}</a>
                            <span> 
                                <i class="fas fa-chevron-right"> </i>
                            </span> 
                        </li>
                        <li class="breadcrumbElement">
                            <a href="{{ url('/centers/'.$contentMain->slug) }}"> {{ $contentMain->name }}</a>
                        </li>
                    </ol>
                    
                    <div class="inner-banner-content">
                        <div class="inner-banner-title">
                            <h1>{{$contentMain->name}} in {{ $centerMain->name }}</h1>
                        </div>
                        <div class="inner-banner-description">
                            <div class="mb10">
                                {!! $contentMain->excerpt !!}
                            </div>
                            <ul>
                                <li style="text-align: left;">Eligibility: 12+/Graduate</li>
                                <li style="text-align: left;">Total Duration: 4 Months</li>
                                <li style="text-align: left;">Course Type: Short Term</li>
                                <li style="text-align: left;">Certified By : ICA EDU Skills, NSDC</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
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
                                <span class="counter-count bold-font">24</span><span>+</span>
                                <p>Years of Excellence</p>
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
                                <span class="counter-count bold-font">90</span><span>%</span>
                                <p>Practical Training</p>
                            </div>
                        </div>
                    </div>
                    <!-- /counter -->

                    <div class="col-md-3">
                        <div class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                            <a onclick="lead_capture_form_btn('',{{ $centerMain->id }})" href="javascript:void(0)"> Connect To Center </i></a>
                        </div>
                    </div>
                    <!-- /counter -->
                </div>
            </div>
        </div>
    </section>

   <!-- Start of course details section
		============================================= -->
		<section id="course-details" class="course-details-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="course-details-item">
							<div class="course-single-text">
								{!! $contentMain->description !!}
							</div>
						</div>
						<!-- /course-details -->
					</div>

					<div class="col-md-4">
						<div class="side-bar">													
							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Contact </span>Us.</h2>
								<div class="latest-news-posts">
									<ul class="side-bar-widget-contact-info" >
										<li>
											<div class="mail-phone">
												<div class="info-icon">
													<i class="text-gradiant fas fa-envelope"></i>
												</div>
												<div class="info-content">
													<a href="mailto:{{ $centerMain->email }}" class="info-id">{{ $centerMain->email }}</a>
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
													<a href="tel:{{ $centerMain->mobile }}" class="info-id">{{ $centerMain->mobile }}</a>
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
													<span class="info-id">ICA Edu Skills | {{ $centerMain->name }}</span>
													<span class="info-text">
														<a href="javascript:void(0)" > {{ $centerMain->address }} </a>
														<br>
														<a href="#"  class="info-id"> Get Direction </a>
													</span>
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
	<!-- End of course details section
		============================================= -->	
    

    <section id="courses" class="best-course-section">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">Featured Courses</span>
                <h3>Explore The Best <span> {{ $contentMain->name }} in {{ $centerMain->name }}</span></h3>
            </div>
            <div class="best-course-area mb10">
                <div class="row justify-content-center">
                @if($courses)
                    @foreach($courses as $value)
                    <div class="col-md-3">
                        <div class="best-course-pic-text relative-position">
                            <div class="best-course-pic relative-position">
                                <img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'assets/img/course/c-1.jpg' }}" alt="">
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
                                    <a href="{{ url('courses/'.$value->slug) }}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="blakish-overlay"></div>
                            </div>
                            <div class="best-course-text">
                                <div class="course-title mb20 headline relative-position height-60">
                                    <h3><a href="{{ url('courses/'.$value->slug) }}"> {{ $value->name }} </a> 
                                        <span class="trend-bestseller text-uppercase bold-font">
                                        <i class="fas fa-bolt"></i> Bestseller</span> 
                                    </h3>
                                </div>
                                <div class="course-meta">
                                    <span class="course-category"><i class="fas fa-clock"></i> {{ $value->duration }}</span>
                                    <span class="course-author"><i class="fas fa-book"></i> {{ $value->no_of_module }} Modules</span>
                                </div>
                            </div>
                            <div class="more-btn text-center" >
                                <div class="course-type-list">	
                                    <a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn('',{{ $centerMain->id }})"><i class="fas fa-download"></i> Brochure</a>
                                </div>
                                <div class="course-type-list">														
                                    <a class="btn-outline" href="{{ url('courses/'.$value->slug) }}" >View More <i class="fas fa-caret-right"></i></a>
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
    </section>

    @if(count(getJoinees('',$centerMain->id)) > 0)
	<section id="placements" class="testimonial_2_section">
		<div class="container">
			<!--div class="testimonial-slide"-->
				<div class="section-title mb20 headline text-center">
					<span class="subtitle text-uppercase"> Student Placement </span>
					<h3>Connecting Talent with <span>Job Opportunities</span></h3>
				</div>
				<div  id="placement-slide-item" class="placement-slide-area">
					@foreach(getJoinees('',$centerMain->id) as $value)						
					<div class="placement-content">
						<div class="text-center">
							<div class="" style="width: 98px; height: 115px; margin: auto; padding: 2px; border: 1px solid #e3e2e2; border-radius: 6px;">
                                <img src="{{ url('assets/img/placements/'.strtolower(str_replace(' ','-',$value->name)).'.png') }}" alt="Student {{ $value->name }} placement in {{getCourseById($value->course_id)->name}} in {{ getCenterById($value->center_id)->name }}" style="height: 100%;">
							</div>					
						</div>

						<div class="text-center my-2">
							<a href="javascript:void()" style="font-weight: 600;color: #362a7e;">{{ $value->name }}</a>
						</div>

						<div class="">
							<!--p class="st-name"><strong>Salary:</strong> {{ $value->joining_salary }}</p-->
							<p class="st-designation"><strong>Designation:</strong> {{ $value->dasignation }}</p>
							<p class="st-designation"><strong>Company:</strong> {{ $value->placed_at }}</p>
						</div>
					</div>
					@endforeach
				</div>
			<!--/div-->
		</div>
	</section>
	@endif

    <!-- Start of sponsor section
        ============================================= -->
    <section id="career" class="sponsor-section">
        <div class="container">
            <div class="section-title-2 mb65 headline text-left">
                <h2>Top<span> Recruiters</span> List</h2>
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
    @if(count($galleryImg) > 0)
	<section id="placements" class="testimonial_2_section">
		<div class="container">
			<!--div class="testimonial-slide"-->
				<div class="section-title mb20 headline text-center">
					<span class="subtitle text-uppercase"> Student Placement </span>
					<h3>Connecting Talent with <span>Job Opportunities</span></h3>
				</div>
				<div class="row">
                    @foreach($galleryImg as $value )
                        <div class="col-md-2 photo-list" >
                            <img src="{{url('/public/gallery/'.$value)}}" alt="">
                            <div class="blakish-overlay"></div>
                            <div class="pop-up-icon">
                                <a href="/public/gallery/{{ $value }}" data-lightbox="roadtrip">
                                    <i class="fas fa-search"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
			<!--/div-->
		</div>
	</section>
	@endif

    @php
        $reviewRatings = get_reviews_ratings("CenterCourse",$contentMain->id);
    @endphp
    <section id="review" class="teacher-details-area" >
        <div class="container"> 
            <div class="row" >
                <div class="col-md-9" >
                    @if($reviewRatings)
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
                                        <input type="hidden" name="model" id="model" value="CenterCourse">
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

    <!-- Start of Faqs
	============================================= -->
	<section id="faqs" class="teacher-details-area">
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
									@foreach(getFaqs("CenterCourse",$contentMain->id) as $key => $value)
									<div class="panel">
										<div class="panel-title" id="heading_{{$key}}">
											<h3 class="mb-2">
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
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of Faqs
	============================================= -->
    @endsection
@section('script')
@endsection