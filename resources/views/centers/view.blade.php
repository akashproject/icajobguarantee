@extends('layouts.main')

    @section('content')
	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="center-inner breadcrumb-section backgroud-style">
			<div class="container-fluid bg-white">
				<div class="container relative-position">
					<div class="text-center center-image">
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
								<a onclick="lead_capture_form_btn('',{{ $contentMain->id }})" href="javascript:void(0)"> Connect To Center </i></a>
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
							<div class="faq-tab mb65">
								<div class="faq-tab-ques  ul-li">
									<div class="course-details-category ul-li tab-button text-left mb25 tab-button text-left mb25">
										<ul class="product-tab ">
											<li class="active" rel="tab1">Summary</li>
											<li rel="tab2"> Highlights </li>
											<li rel="tab4"> Placements </li>
											<li rel="tab5"> Gallery  </li>
											<li rel="tab6"> Map </li>
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
										<div id="tab4" class="tab-content-1 pt35">
											@foreach(getJoinees($contentMain->id) as $value)
											<div class="placed-grid-box">
												<div class="image-box">
												<img src="{{ url('assets/img/placements/'.strtolower(str_replace(' ','-',$value->name)).'.png') }}" alt="Student {{ $value->name }} placement in {{getCourseById($value->course_id)->name}} in {{ getCenterById($value->center_id)->name }}" style="height: 100%;">
												</div>
												<div class="box-content">
													<div class="box-title mt10">
														<h4>{{ $value->name }}</h4>
													</div>
													<p> Course : <strong ><a target="_blank" href="/courses/{{getCourseById($value->course_id)->slug }}"> {{ getCourseById($value->course_id)->name }}</a> </strong> </p>
													<p> Placed At: <strong >{{ $value->placed_at }} </strong> </p>
													<p> CTC: Rs. <strong >{{ number_format($value->joining_salary) }}/- </strong> </p>
												</div>
											</div>
											@endforeach
										</div>
										<div id="tab5" class="tab-content-1 pt35">
											<div class="course-details-content">
												<div class="affiliate-market-guide mb65">
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
												</div>
												<!-- /market guide -->
											</div>
										</div>
										<!-- #tab4 -->
										<div id="tab6" class="tab-content-1 pt35">
											<div class="course-details-content">
												<div class="affiliate-market-guide mb65">
													<div class="affiliate-market-accordion">
													{!! $contentMain->gmap_location !!}
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
									<ul class="side-bar-widget-contact-info" >
										<li>
											<div class="mail-phone">
												<div class="info-icon">
													<i class="text-gradiant fas fa-envelope"></i>
												</div>
												<div class="info-content">
													<a href="mailto:{{ $contentMain->email }}" class="info-id">{{ $contentMain->email }}</a>
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
													<a href="tel:{{ $contentMain->mobile }}" class="info-id">{{ $contentMain->mobile }}</a>
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
													<span class="info-id">ICA Edu Skills | {{ $contentMain->name }}</span>
													<span class="info-text">
														<a href="javascript:void(0)" > {{ $contentMain->address }} </a>
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

	<!-- End of sponsor section
	============================================= -->
	<section id="courses" class="best-course-section">
		<div class="container">
			<div class="section-title mb10 headline text-center">
				<span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
				<h3>Check<span> Another Domain.</span></h3>
			</div>
			<div class="best-course-area mb10">
				<div class="row">
					@foreach($centerCourses as $value)
					<div class="col-md-3">
						<div class="best-course-pic-text relative-position">
							<div class="best-course-pic relative-position">
								<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):url('assets/img/course/c-1.jpg') }}" alt="">
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
									<a target="_blank" href="{{ url('centers/'.$contentMain->slug.'/'.$value->slug) }}">Know More <i class="fas fa-arrow-right"></i></a>
								</div>
								<div class="blakish-overlay"></div>
							</div>
							<div class="best-course-text">
								<div class="course-type-title mb10 headline relative-position">
									<h3><a href="{{ url('centers/'.$contentMain->slug.'/'.$value->slug) }}">{{ $value->name }}</a></h3>
								</div>
								<div class="course-short-description mb10">
									{!! substr($value->excerpt,0,100); !!}...
								</div>
								
							</div>
							<div class="more-btn text-center">
								<div class="course-type-list">	
									<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn([&quot;1&quot;],'')"><i class="fas fa-download"></i> Brochure</a>
								</div>
								<div class="course-type-list">														
									<a class="btn-outline" target="_blank" href="{{ url('centers/'.$contentMain->slug.'/'.$value->slug) }}">View More <i class="fas fa-caret-right"></i></a>
								</div>														
							</div>
						</div>
					</div>
					@endforeach	
				</div>
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
							<div class="course-pic relative-position text-center">
								<div class="circle-img">
									<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'https://dummyimage.com/140x140' }}" alt="">	
								</div>					
							</div>
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
	<!-- Start of best course
	============================================= -->
	@if(count(getEvents($contentMain->id)) > 0)
		<section id="best-course" class="best-course-section">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Events & Celebration</span>
					<h3>Perticipates <span> Our Events.</span></h3>
				</div>
				<div class="teachers-archive">
					<div class="row">
						@foreach(getEvents($contentMain->id) as $value)
						<div class="col-md-3 col-sm-6">
							<div class="teacher-pic-content">
								<div class="teacher-img-content relative-position">
									<img src="{{ ($value->featured_image)?getSizedImage('',$value->featured_image):url('assets/img/logo/center-logo.webp') }}" alt="">
									<div class="teacher-hover-item">
										<div class="teacher-social-name ul-li-block">
											<ul>
												<li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('view-event',$value->slug) }}"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="https://wa.me/?text={{ route('view-event',$value->slug) }}"><i class="fab fa-whatsapp"></i></a></li>
												<li><a href="mailto:?subject=Enroll In Event&body=Hello,<br>Please Click on this link<br>{{ route('view-event',$value->slug) }}"><i class="fas fa-envelope"></i></a></li>
											</ul>
										</div>
										<div class="teacher-text">
											{{$value->excerpt}}
										</div>
									</div>
									<div class="teacher-next text-center">
										<a href="{{url('/events/'.$value->slug)}}"><i class="text-gradiant fas fa-arrow-right"></i></a>
									</div>
								</div>
								<div class="teacher-name-designation">
									<a class="teacher-name" href="{{url('/events/'.$value->slug)}}" >{{$value->name}}</a>
									<span class="teacher-designation">{{$value->center}}</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	<!-- End of best course
	============================================= -->
	@endif
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
						<ul class="course-tab index-category-tab">
							@foreach($courseType as $key => $value)
							<li rel="course{{$key}}"> {{ $value->category }} </li>
							@endforeach
						</ul>
					</div>
					<!-- /tab-head -->

					<!-- tab content -->
					<div class="tab-container">
						@foreach($courseType as $key => $value)
							<!-- 1st tab -->
							<div id="course{{$key}}" class="course-tab-content-1 pt35">
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
													<a class="btn-outline" target="_blank" href="{{ URL::to('/courses') }}/{{ $course->slug }}" >View More <i class="fas fa-caret-right"></i></a>
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
									@foreach(getFaqs("Center",$contentMain->id) as $key => $value)
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
	<!-- End of Faqs
	============================================= -->
	<!-- /course-categori -->
	<section id="review" class="teacher-details-area" >
		<div class="container"> 				
			<div class="row" >
				{!! $contentMain->review_widget !!}
			</div>	
		</div>
	</section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection