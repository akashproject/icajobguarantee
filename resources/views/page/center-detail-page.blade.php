@extends('layouts.main')
    @section('content')
    <!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div  class="slider-area slider-bg-5 relative-position" style="background-image: url({{url('assets/img/banner/banner-classroom.webp')}});">
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
									<input class="course" name="search" type="text" placeholder="Type what do you want to learn today?">
									<div class="nws-button text-center  gradient-bg text-capitalize">
										<button type="submit" value="Submit">Search Course</button> 
									</div>
								</form>
							</div>
							<div class="layer-1-4">
								<div class="slider-course-category ul-li text-center">
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
				<div class="slider-area slider-bg-5 relative-position" style="background-image: url({{url('assets/img/banner/banner-partner.webp')}});">
 					<div class="slider-text">
 						<div class="section-title mb20 headline text-left ">
							<div class="layer-1-3">
							 	<h2 class="third-slide" style="font-size: 34px;padding: 8px;"> Empower Your Learning Journey with Us</h2>
 							</div>
							<div class="layer-1-3">
							 	<h2 class="third-slide" style="font-size: 27px;padding: 8px;"><span>Authorized Training Partner of</span></h2>
 							</div>
 						</div>
 					</div>
 				</div>		
				<div class="slider-area slider-bg-5 relative-position" style="background-image: url({{url('assets/img/banner/banner-university.webp')}});">
 					<div class="slider-text">
 						<div class="section-title mb20 headline text-left ">
 							<div class="layer-1-1">
 								<span class="subtitle ml42 text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
 							</div>
 							<div class="layer-1-3">
								 <h3>Top <span>Bachelor Programs</span> from reputed <br> <span> universities</span></h3>
 							</div>
 						</div>
 						<div class="layer-1-4">
							<div class="about-btn text-left">
								<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
									<a target="_blank" href="https://www.icacourse.in/online-accounting-courses/"> Online Courses <i class="fas fa-caret-right"></i></a>
								</div>
								<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
									<a target="_blank" href="https://eduversity.icajobguarantee.com/"> Eduversity <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
						</div>
 					</div>
 				</div>		
				<div  class="slider-area slider-bg-5 relative-position" style="background-image: url({{url('assets/img/banner/banner-franchise.webp')}});">
 					<div class="slider-text">
 						<div class="section-title mb20 headline text-left ">
 							<div class="layer-1-1">
 								<span class="subtitle ml42 text-uppercase">Discover Limitless Growth Opportunities with Us</span>
 							</div>
 							<div class="layer-1-3">
							 	<h2 class="third-slide"> Discover Limitless Growth <br> <span>Opportunities with Us.</span></h2>
 							</div>
 						</div>
 						<div class="layer-1-4">
							<div class="about-btn text-left">
								<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
									<a target="_blank" href="{{ url('franchise-opportunity')}}">Learn more <i class="fas fa-caret-right"></i></a>
								</div>
								<div class="genius-btn text-center text-uppercase ul-li-block bold-font">
									<a target="_blank" href="{{ url('contact-us')}}">Contact Us <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
						</div>
 					</div>
 				</div>	
			</div>
		</section>
	    <!-- End of slider section
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
									<span class="counter-count bold-font">25</span><span>+</span>
									<p>Years of Excellence</p>
								</div>
							</div>
						</div>
						<!-- /counter -->

						<div class="col-md-3">
							<div class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a onclick="lead_capture_form_btn('',5)" href="javascript:void(0)"> Connect To Center </a>
							</div>
						</div>
						<!-- /counter -->
					</div>
				</div>
			</div>
		</section>
        <!-- Start popular course
		============================================= -->
		<section id="popular-course" class="popular-course-section popular-three" style="background:#d0cfda">
			<div class="container">
				<div class="section-title mb20 headline text-left">
					<span class="subtitle text-uppercase">LEARN NEW SKILLS</span>
					<h2><span>Popular </span> Courses.</h2>
				</div>
				
				<div class="course-slide row">
					@foreach(getCourses() as $course)
                        <div class="mb-3 col-md-4" >
                            <div class="course-item-pic-text">
                                <div class="course-pic relative-position mb25">
                                    <img src="{{ (isset($course->featured_image))?getSizedImage('',$course->featured_image):'assets/img/course/c-1.jpg' }}" class="width-100" alt="">
                                    
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
                                        <a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $course->brochure_id }},'')"><i class="fas fa-download"></i> Brochure</a>
                                    </div>
                                    <div class="course-type-list">														
                                        <a class="btn-outline" href="{{ URL::to('/courses') }}/{{ $course->slug }}" >View More <i class="fas fa-caret-right"></i></a>
                                    </div>														
                                </div>
                            </div>
						</div>
						<!-- /item -->
					@endforeach
				</div>
			</div>
		</section>
	    <!-- End popular course
		============================================= -->
        <!-- Start of contact area
        ============================================= -->
        <section id="contact-area" class="contact-area-section backgroud-style">
            <div class="container">
                <div class="contact-area-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-left-content">
                                <div class="section-title  mb45 headline text-left">
                                    <span class="subtitle ml42  text-uppercase">CONTACT US</span>
                                    <h2><span>Get in Touch</span></h2>
                                    <p> We value your feedback and inquiries. Please feel free to get in touch with us. We are here to assist you in any way we can. </p>
                                </div>

                                <div class="contact-address">
                                    <div class="contact-address-details">
                                        <div class="address-icon relative-position text-center float-left">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="address-details ul-li-block">
                                            <ul>
                                                <li><span>Head Office: </span>{!! get_theme_setting('address') !!}</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="contact-address-details">
                                        <div class="address-icon relative-position text-center float-left">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="address-details ul-li-block">
                                            <ul>
                                                <li><span>Call: </span> <a  target="_blank" href="tel:{{get_theme_setting('mobile')}}" > {{ get_theme_setting('mobile') }} </a> </li>
                                                <li><span>Whatsapp : </span> <a target="_blank" href="https://api.whatsapp.com/send?phone={{get_theme_setting('whatsapp')}}" >{{get_theme_setting('whatsapp')}}</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="contact-address-details">
                                        <div class="address-icon relative-position text-center float-left">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="address-details ul-li-block">
                                            <ul>
                                                <li><span>Primary: </span><a  target="_blank" href="mailto:{{get_theme_setting('email')}}" >{{ get_theme_setting('email') }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="contact-map" class="contact-map-section">
                                <div id="google-map">
                                    <div id="googleMaps" class="google-map-container">
                                        {!! get_theme_setting('gmap') !!}
                                    </div>
                                </div><!-- /#google-map-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of contact area
		============================================= -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection