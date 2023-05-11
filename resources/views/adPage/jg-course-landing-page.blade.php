@extends('layouts.ad-main')
    @section('content')
    <section id="breadcrumb" class="ad-page-banner relative-position backgroud-style">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="ad-banner-content">
						<div class="ad-banner-title">
							<h1>Advanced Certification in Data Science and AI</h1>
						</div>
						<div class="ad-banner-sub-title">
							<h2> Learn from IIT Madras Faculty &amp; Industry Experts with Campus Immersion at IIT Madras </h2>
						</div>
						<div class="ad-banner-description">
							{!!(isset($contentMain))?$contentMain->description:"Course description" !!}
						</div>
						<div class="ad-banner-option">
							<span class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>
							</span>

							<span class="apply-now">
								<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Apply Now </a>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="highlighted-content-wrapper text-center">
						<img src="https://www.icajobguarantee.com/wp-content/uploads/2021/12/features-3.png">
					</div>
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

	<!-- Hightlists section
		============================================= -->
		<section id="key-highlights" class="highlights-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<img src="https://dummyimage.com/465">
					</div>
					<div class="col-md-7">
						<div class="section-title mb20 headline text-center">
							<span class="subtitle text-uppercase">Key Highlights </span>
							<h3>Best Prefferd<span> Modules.</span></h3>
						</div>
						<div class="row text-center">
							<div class="col-md-4"> 
								<div class="key-highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> 100% Job Assurance Courses </h6>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="key-highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> 200+ Tools </h6>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="key-highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> 9 Super Specializations </h6>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="key-highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> Industry Case Study </h6>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="key-highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> 160 Hrs Assignments </h6>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="key-highlights" >
									<img src="https://dummyimage.com/65" >
									<h6> 100% Placement Support </h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<!-- End Hightlists section
	============================================= -->
	<!-- Start secound testimonial section
		============================================= -->
		<section id="sponsor" class="sponsor-section">
			<div class="container">
				<div class="section-title mb35 headline text-center">
					<span class="subtitle text-uppercase">Student Placement</span>
					<h3>Our Alumni <span>Worked At.</span></h3>
				</div>
				<div class="row" >
					@foreach(getPlacements() as $value)
						<div class="col-md-2 col-lg-2 col-6 mt10 mb20" >
							<div class="placement-grid" >
								<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'https://dummyimage.com/140x140' }}" alt="">		
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section>
	<!-- End secound testimonial section
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
				<div class="faq-tab-ques ul-li">
					<div class="tab-button text-center ">
						<ul class="course-tab index-category-tab">
							@foreach($courseType as $key => $value)
							<li rel="course{{$key}}"> {{ $value->name }} </li>
							@endforeach
						</ul>
					</div>
					<!-- /tab-head -->

					<!-- tab content -->
					<div class="tab-container">
						@foreach($courseType as $key => $value)
							<!-- 1st tab -->
							<div id="course{{$key}}" class="course-tab-content-1 pt35" style="display:{{ ($key == 0)?'block':'none' }}">
								<div class="row justify-content-center">
								@foreach($courses as $course)
									@if($course->categorySlug == $value->slug)
									<div class="col-md-3">
										<div class="best-course-pic-text relative-position">
											<div class="best-course-pic relative-position">
												<img src="{{ (isset($course->featured_image))?getSizedImage('',$course->featured_image):url('assets/img/course/c-1.jpg') }}" alt="">
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
													<a href="{{ URL::to('/courses') }}/{{ $course->slug }}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
												</div>
												<div class="blakish-overlay"></div>
											</div>
											<div class="best-course-text">
												<div class="course-title mb20 headline relative-position height-60">
													<h3><a target="_blank" href="{{ URL::to('/courses') }}/{{ $course->slug }}"> {{ $course->name }} </a> 
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
													<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn('',{{ $contentMain->id }})"><i class="fas fa-download"></i> Brochure</a>
												</div>
												<div class="course-type-list">														
													<a class="btn-outline course-detail-tab-btn" data-id="course-view-{{$course->id}}" href="#detail-course" >View More <i class="fas fa-caret-right"></i></a>
												</div>														
											</div>
										</div>
									</div>
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
	<section id="detail-course" class="course-detail-section">
		<div class="container">
			@foreach($courses as $key => $course)
				<div id="course-view-{{$course->id}}" class="course-view-content {{ ($key == 0)?'active':'' }}">
					<div class="section-title mb45 headline text-center">
						<span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
						<h3><span>  {{ $course->name }}.</span></h3>
					</div>
					<div class="row" >
						<div class="col-md-9">
							<div class="course-details-item">
								
								<div class="faq-tab mb65">
									<div class="faq-tab-ques  ul-li">
										<div class="course-details-category ul-li tab-button text-left mb25 tab-button text-left mb25">
											<span>Course <b>Section:</b></span>
											<ul class="product-tab ">
												<li class="active" rel="{{$course->slug}}1"> Summary </li>
												<li rel="{{$course->slug}}2"> Features </li>
												<li rel="{{$course->slug}}3"> Highlights </li>
												<li rel="{{$course->slug}}4">  Curriculum  </li>
											</ul>
										</div>
										<!-- /tab-head -->

										<!-- tab content -->
										<div class="tab-container">
											<!-- 1st tab -->
											<div id="{{$course->slug}}1" class="tab-content-1 pt35" style="display:block">
												<div class="course-details-content">
													{!! $course->description !!}
												</div>
											</div>
											<!-- #tab1 -->

											<div id="{{$course->slug}}2" class="tab-content-1 pt35">
												<div class="course-details-content criteria">
													{!! $course->criteria !!}
												</div>
											</div>
											<!-- #tab2 -->

											<div id="{{$course->slug}}3" class="tab-content-1 pt35">
												<div class="course-details-content highlights">
													<div class="affiliate-market-guide mb65">
														{!! $course->highlights !!}
													</div>
												</div>
											</div>
											<!-- #tab3 -->

											<div id="{{$course->slug}}4" class="tab-content-1 pt35">
												<div class="course-details-content">
													<div class="affiliate-market-guide mb65">
														<div class="affiliate-market-accordion">
															<div id="accordion" class="panel-group">
																@foreach(getCourseCarriculams($course->id) as $key => $carriculam)
																@if($carriculam->name)
																	<div class="panel">
																		<div class="panel-title" id="heading_{{$course->slug}}_{{$key}}">
																			<div class="ac-head">												
																				<button class="btn btn-link {{ (count(getCourseCarriculams($course->id)) > 1)?'collapsed':'' ; }}" data-toggle="collapse" data-target="#collapse_{{$course->slug}}_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$course->slug}}_{{$key}}">
																					<span>{{ ($key < "9" )?"0":""}}{{$key + 1}}</span> {{$carriculam->name}}
																				</button>
																				<!-- <div class="course-by">
																					BY: <b>TONI KROSS</b> 
																				</div> -->
																				<div class="leanth-course">
																					<span>{{ $carriculam->duration }} Hours</span>
																					<span> {{ count(json_decode($carriculam->lecture)) }} Lecture</span>
																				</div>
																			</div>
																		</div>
																		<div id="collapse_{{$course->slug}}_{{$key}}" class="collapse {{ (count(getCourseCarriculams($course->id)) > 1)?'':'show' ; }}" aria-labelledby="heading_{{$course->slug}}_{{$key}}" data-parent="#accordion">
																			<div class="panel-body">
																				@foreach(json_decode($carriculam->lecture) as $key => $lecture)
																					<div class="" >
																						<strong> Lecture {{$key + 1}} : </strong> {!! $lecture !!}
																					</div>
																				@endforeach
																				<div>
																					@if($carriculam->benefits)
																					<h4 class="benefit-title"> Module Benefit </h4>
																					<div class="benefit-content" >
																					{!! $carriculam->benefits !!}
																					</div>
																					@endif
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
						</div>

						<div class="col-md-3">
							<div class="side-bar">
								@if(isset($course->course_video_image) || $course->course_video_image > 0)
								<div class="latest-area-content " >
									<div class="latest-video-poster relative-position mb20">
										<img src="{{ getSizedImage('mobile',$course->course_video_image) }}" alt="">
										<div class="video-play-btn text-center gradient-bg">
											<a class="popup-with-zoom-anim" href="{{$course->course_video_link}}"><i class="fas fa-play"></i></a>
										</div>
									</div>
									<div class="vidoe-text text-center">
										<h3 class="latest-title bold-font"><a href="#">{{$course->course_video_title}}</a></h3>
									</div>
								</div>
								@endif
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
										{{ thousandsCurrencyFormat($course->number_of_rating) }} Rating
									</div>
								</div>
								<div class="couse-feature ul-li-block">
									<ul>
										<li>Enrolled <span>{{ thousandsCurrencyFormat($course->number_of_enrolled) }} Enrolled </span></li>
										<li>Modules <span>{{ $course->no_of_module }} Modules</span></li>
										<li>Duration <span>{{ $course->duration }}</span></li>
										<li>Call  <a href="tel:{{ get_theme_setting('mobile') }}" ><span>+91 {{ get_theme_setting('mobile') }}</span></a> </li>
									</ul>
								</div>
								<div class="course-side-bar-widget">
									<div class="genius-btn gradient-bg text-center text-uppercase float-left bold-font">
										<a onclick="lead_capture_form_btn({{ $course->type_id }},'')" href="javascript:void(0)"> <i class="fas fa-download"></i> Download Syllabus</a>
									</div>
									<div class="like-course">
										<a href="#"><i class="fas fa-heart"></i></a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</section>

	<!-- Start of testimonial secound section
	============================================= -->
	<section id="alumni" class="testimonial_2_section">
		<div class="container">
			<div class="testimonial-slide">
				<div class="section-title mb20 headline text-center">
					<span class="subtitle text-uppercase">About This Course </span>
					<h3>Student<span> Speaks.</span></h3>
				</div>
				<div  id="testimonial-slide-item" class="testimonial-slide-area">
					@foreach(getTestimonials() as $value)						
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
										@foreach(getFaqs("Course") as $key => $value)
                                        <div class="panel">
                                            <div class="panel-title" id="heading_{{$key}}">
                                                <h3 class="mb-{{$key}}">
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
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection