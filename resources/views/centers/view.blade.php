@extends('layouts.main')
    @section('content')
	<div class="page-inside-menu header-fixed" style="display:none">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<nav class="navbar-menu inside-navbar">
					<div class="nav-menu ul-li">
						<ul class="courseMenu" >
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
					<a onclick="lead_capture_form_btn({{ $contentMain->brochure_id }},'')" href="javascript:void(0)" > Apply Now </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	@if(check_device('desktop'))
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div  class="slider-area slider-bg-5 relative-position" style="background-image: url({{url('assets/img/banner/banner-classroom.webp')}});">
 					<div class="slider-text">
 						<div class="section-title mb20 headline text-left ">
 							<div class="layer-1-3">
							 	<h1 style="font-size:42px!important; color:#3e4095;" class="secoud-title">  ICA Edu Skills |  <span>{{(isset($contentMain))?$contentMain->name:"Default Page" }}</span></h1>
 							</div>
 							<div class="row">
					      <p class="col-md-6"style="font-size:18px!important;">{!! (isset($contentMain))?$contentMain->excerpt:"Default excerpt" !!}</span></p>
 							</div>							
 						</div>
 						<div class="layer-1-4">
						 	
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
			</div>
		</section>
		@else
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">

				<div class="slider-area slider-bg-5 relative-position" style="background-image: url({{ url('assets/img/mobile-banner.webp') }});">
					<div class="slider-text">
						<div class="section-title mb20 headline text-left ">
							<div class="layer-1-3">
								<h1 style="font-size:25px!important; color:#3e4095;" class="secoud-title pb-2"> <span>ICA Edu Skills | <span>{{(isset($contentMain))?$contentMain->name:"Default Page" }}</span></span></h1>
							</div>
							<div class="contact">
							<!--p> <a href="https://www.icajobguarantee.com/state/gujarat"><i class="fas fa-map-marker"></i> Gujarat</a>, <a href="https://www.icajobguarantee.com/city/ahmedabad"> Ahmedabad </a></p-->
							</div>
							<div class="row">
					           <p class="col-md-6"style="font-size:18px!important;">{!! (isset($contentMain))?$contentMain->excerpt:"Default excerpt" !!}</p>
							</div>							
							<!--div class="course-meta" style="font-size: 7px">
								<span class="course-category"><i class="fas fa-user"></i> 109k &nbsp Students</span>
								<div class="course-rate ul-li">
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>											
								</div>
								<span class="course-category">678 Rating</span>
							</div-->
						</div>
					</div>
				</div>

				<div class="slider-area slider-bg-5 relative-position" style="background-image: url({{url('assets/img/mobile-banner.webp')}});">
					<div class="slider-text">
						<div class="section-title mb20 headline text-left ">
							<div class="layer-1-3">
								<h2 class="third-slide" style="font-size: 34px;padding: 8px;"> Empower Your Learning Journey with Us</h2>
							</div>
							<div class="layer-1-3">
								<h2 class="third-slide" style="font-size: 27px;padding: 8px;"><span>Authorized Training Partner of</span></h2>
							</div>
							<div class="layer-1-4">
								<div class="row pt-3">
									<div class="col-4 my-2 text-center">
										<a class="bg-white" style="width: 100%;display: block;margin: auto;padding: 10px 5px;">
											<img src ="{{url('assets/img/zoho.png')}}" />
										</a>
									</div>
									<div class="col-4 my-2 text-center">
										<a class="bg-white" style="width: 100%;display: block;margin: auto;padding: 10px 5px;">
											<img src ="{{url('assets/img/nse.png')}}" />
										</a>
									</div>
									<div class="col-4 my-2 text-center">
										<a class="bg-white" style="width: 100%;display: block;margin: auto;padding: 10px 5px;">
											<img src ="{{url('assets/img/sap.png')}}" />
										</a>
									</div>
								</div>							
							</div>
						</div>
					</div>
				 </div>	
			</div>
		</section>
		<style>
			.slider-bg-1, .slider-bg-2, .slider-bg-3, .slider-bg-4, .slider-bg-5 {
				height: 71vh;
				background-size: cover;
				background-repeat: no-repeat;
				background-position: center center;
			}
		</style>
		@endif
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
									<span class="counter-count bold-font">26</span>
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
		<section id="course" class="popular-course-section popular-three" style="background:#d0cfda">
			<div class="container">
				<div id="courses" class="section-title mb20 headline text-center">
					<span class="subtitle text-uppercase">OUR COURSES</span>
					<h2 style="font-size: 26px!important; font-weight: bold; color: #393185;">Explore The Best Advanced Excel, Accounting, GST, SAP FICO, Tally Prime Courses</h2>
				</div>				
				<div class="course-slide row">
					@foreach($courses as $value)
					<div class="mb-3 col-md-4">
						<div class="shadow-lg bg-black rounded ">
							<div class="course-item-pic-text">
								<div class="course-pic relative-position mb25">
									<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'assets/img/course/c-1.jpg' }}" class="width-100" alt="accounting course in {{(isset($value))?$value->name:'Default Page' }}">
								</div>
								<div class="course-item-text mb-20">
									<div class="course-meta">
										<span class="course-category bold-font" style="font-size: 12px;"><i class="fas fa-user"></i> {{number_format($value->number_of_enrolled)}} Students</span>
										<span class="course-category bold-font" style="font-size: 12px;float: right;">
										<div class="course-rate ul-li">
											<ul style="margin-right: 5px;line-height: 0;">
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											</ul>
											{{ number_format($value->number_of_rating) }} Votes </span>
										</div>
									</div>
									<div class="course-title mt10 headline relative-position">
										<h2 style="font-size: 22px;color: #3e4095;font-weight: 600;"><a target="_blank" href="{{ URL::to('/courses') }}/{{ $value->slug }}"> {{$value->name}}</a> </h2>
									</div>
				
									<div class="course_highlights alt-font p-1" style="color: #444!important;">                     
										{!! $value->criteria !!}													
									</div>
									<div class="course-meta mt10">
										<span class="course-category"><i class="fas fa-clock"></i> {{ $value->duration }}</span>
										<span class="course-author" style="float: right;"><i class="fas fa-book"></i> {{ $value->no_of_module }} Modules</span>
									</div>
								</div>
								<div class="more-btn text-center" >
									<div class="course-type-list">	
										<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn(1,'')"><i class="fas fa-download"></i> Brochure</a>
									</div>
									<div class="course-type-list">														
										<a class="btn-outline" target="_blank" href="{{ URL::to('/courses') }}/{{ $value->slug }}" >View More <i class="fas fa-caret-right"></i></a>
									</div>														
								</div>
							</div>
						</div>
					</div>
					@endforeach	
					
				</div>
			</div>
		</section>

		<style type="text/css">
				p {margin-bottom: 0.5em;  margin-top: 0em;} 
				.course-item-pic-text {
					box-shadow: 2px 2px 5px 1px #9e99bd;
				}
				.course-meta span {
					font-size: 16px;
					margin-right: 6px;
					position: relative;
				}
				
		</style>
		<!-- End popular course
		============================================= -->
		
		<!-- Start of certificate section
		============================================= -->
		<section id="alumni" class="testimonial_2_section">
			<div class="container">
				<div id="testimonials" class="testimonial-slide">
					<div class="section-title mb20 headline text-center">
						<span class="subtitle text-uppercase">Certified Courses</span>
						<h3>Industry <span>Certifications</span></h3>
					</div>
					<div class="row">
						<div class="col-md-3 mt10 mb20 text-center">
							<img src="https://www.icajobguarantee.com/public/upload/2023-08-23/CIA-Plus-Certificate.webp" alt="" />
						</div>
						<div class="col-md-3 mt10 mb20 text-center">
							<img src="https://www.icajobguarantee.com/public/upload/2023-05-12/sap-certificate.png" alt="" />
						</div>
						<div class="col-md-3 mt10 mb20 text-center">
							<img src="https://www.icajobguarantee.com/public/upload/2024-05-24/ms-office-course-certification.webp" alt="" />
						</div>
						<div class="col-md-3 mt10 mb20 text-center">
							<img src="https://www.icajobguarantee.com/public/upload/2024-09-23/zoho-books-certification.webp" alt="" />
						</div>						
					</div>
				</div>
			</div>
		</section>
		<!-- End of certificate section
		============================================= -->		
		
		<!-- Start Centers gallery Section -->
		@if(count($galleryImg) > 0)
		<Section id="gallery" class="popular-course-section popular-three" style="background:white">
			<div class="container">
				<div id="placements" class="section-title mb20 headline text-center">
					<span class="subtitle text-uppercase">Gallery</span>
					<h2 style="font-size: 30px!important;"> <span> ICA Edu Skills | {{(isset($contentMain))?$contentMain->name:"Default Page" }}</span>  Gallery </h2>
				</div>
				<div class="course-details-content">
					<div class="affiliate-market-guide mb65">
						<div class="row">
							@foreach($galleryImg as $value )
								<div class="col-md-2 photo-list center" >
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
		</Section>
		<!-- End PCenters gallery Section -->
		@endif
		<!-- Start Placement Section -->

		@if(count(getJoinees($contentMain->id)) > 0)
		<Section  id="placement" class="popular-course-section popular-three" style="background:white">
				<div class="container">
						<div id="placements" class="section-title mb20 headline text-center">
							<span class="subtitle text-uppercase">STUDENT PLACEMENTS</span>
							<h2 style="font-size: 30px!important;">Connecting Talent with <span> Job Opportunities </span></h2>
						</div>
						<div class="placement-section-row">
							@foreach(getJoinees($contentMain->id) as $value)

							<div class="placed-grid-box m-30px">

								<div class="image-box">

								<img src="{{ url('assets/img/placements/'.strtolower(str_replace(' ','-',$value->name)).'.png') }}" alt="Student {{ $value->name }} placement in {{getCourseById($value->course_id)->name}} in {{ getCenterById($value->center_id)->name }}" style="height: 100%;">

								</div>

								<div class="box-content ">

									<div class="box-title mt10">

										<h4 class="name">{{ $value->name }}</h4>

									</div>

									<p> Course : <a target="_blank" href="/courses/{{getCourseById($value->course_id)->slug }}"> {{ getCourseById($value->course_id)->name }}</a>  </p>

									<p> Placed At: {{ $value->placed_at }}  </p>

									<p> CTC: Rs. {{ number_format($value->joining_salary) }}/-  </p>

								</div>

							</div>

					@endforeach
						</div>


						<style>
							.placed-grid-box {
								border-radius: 7px;
								overflow: hidden;
								padding: 0;
								display: inline-block;
								background: #fff;
								color: #333;
								width: 274px;
								box-shadow: 1px 0px 6px 0px #bfbfbf;
								margin: 7px;
							}
						</style>

		</Section>
		<!-- End Placement Section -->
		
		<div class="col-md-12 mt10" >
			<div class="genius-btn mb20 gradient-bg text-center text-uppercase ul-li-block bold-font" style="margin: auto;">
				<a href="{{ url('all-placement-student') }}" target="_blank"> <i class="fas fa-avator" style="color: #fff;"></i> View All Students</a>
			</div>
		</div>
		@endif
		
		
		<!-- Start of testimonial secound section
		============================================= -->
		<section id="alumni" class="testimonial_2_section">
			<div class="container">
				<div id="testimonials" class="testimonial-slide">
					<div class="section-title mb20 headline text-center">
						<span class="subtitle text-uppercase">About The Courses</span>
						<h3>What <span>Students Say</span></h3>
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
		<style>
			.owl-nav {
				right: 0;
				/* top: -90px; */
				position: absolute;
			}
			.pb-5, .py-5 {
				padding-bottom: 0rem!important;
				padding-top: 1rem!important;
			}
			.popular-three {
				background-color: #f7f7f7;
				padding: 47px 2px 36px;
			}
			.testimonial_2_section {
				padding-top: 19px;
			}
			.testimonial-slide-area .owl-stage-outer {
				padding-bottom: 1px;
			}
			.mt10 {
				margin-top: 5px;
			}
			.contact-area-section, .contact_secound_section {
				background-image: url(../img/banner/contact-b.jpg);
				padding: 118px 0px 70px;
			}
			.mb45 {
				margin-bottom: -53px;
			}
		</style>

	<!-- End  of testimonial secound section
	============================================= -->
	<!-- Start of Course Hightlights

		============================================= -->

	<section id="highlights" class="highlights-section py-5" style="background:#f6f5ff">

		<div class="container">

			<div class="row">

				<div class="col-md-5 mt10 mb20 text-center">

					<img src="https://www.icajobguarantee.com/assets/img/left-image.png" class="border-10px-radius">

				</div>


				<div class="col-md-7 mt10">

					<div id="why-us" class="section-title mb20 headline text-center">

						<span class="subtitle text-uppercase"> <STROng>Training </STROng></span>

						<h3 style="font-size:26px!important;"><STRONG> Why </STRONG>  <span> Us? </span></h3>

					</div>

						<div class="row text-center">

							<div class="col-md-4 col-6"> 

								<div class="key-highlights" style="margin: 3px;">

									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

									<h5 style="color: #393185;"> 100% Job Guarantee </h5>
									<p>We provide skill-based career courses with assured placements.</p>

								</div>

							</div>

							<div class="col-md-4 col-6"> 

								<div class="key-highlights" style="margin: 3px;">

									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

									<h5 style="color: #393185;"> Any Time Job Card </h5>
									<p>We give you an ATJ Card to become a priority student for job openings</p>
								</div>

							</div>							

							<div class="col-md-4 col-6"> 

								<div class="key-highlights" style="margin: 3px;">

									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

									<h5 style="color: #393185;"> 10 Simulation Software </h5>
									<p>We teach you 10 updated software that most companies employ.</p>
								</div>

							</div>

							<div class="col-md-4 col-6"> 

								<div class="key-highlights" style="margin: 3px;">

									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

									<h5 style="color: #393185;"> 4 Certifications </h5>
									<p>We prepare you as a strong contender in the highly competitive job market</p>
								</div>

							</div>

							<div class="col-md-4 col-6"> 

								<div class="key-highlights" style="margin: 3px;">

									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

									<h5 style="color: #393185;"> Mock Interviews </h5>
									<p>We prepare you to crack jobs with proper skill-based corporate training</p>
								</div>

							</div>

							<div class="col-md-4 col-6"> 

								<div class="key-highlights" style="margin: 3px;">

									<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

									<h5 style="color: #393185;"> 90% Practical </h5>
									<p>Our way of teaching is mostly a practical basis you face in real life</p>
								</div>
							</div>								
						</div>
				</div>
			</div>
		</div>
	</section>
		
	<section id="course" class="popular-course-section popular-three" style="background:#fff">
		<div class="container">
		    <div id="placements" class="section-title mb20 headline text-center">
				<span class="subtitle text-uppercase">ABOUT THE COURSES</span>
				<h2 style="font-size: 30px!important;">Learn, Grow and Grab Opportunities with <span>ICA Edu Skills | {{(isset($contentMain))?$contentMain->name:"Default Page" }}</span></h2>
			</div>
			<div class="row blog-description" style="padding: 10px;">
			{!! $contentMain->description !!}
			</div>
	</section>
	<!-- End of Course Description
	============================================= -->
	
	 <!-- Start of chairman message
	 ============================================= -->
		<section id="message ">
			<div class="container py-5">
				<div class="section-title mb10 headline text-center">
					<span class="subtitle text-uppercase"> A Mission and A Message </span>
					<h3>A social message from <span> Chairman </span> </h3>                
				</div>

				<div class="best-course-area mb10">

					<div class="row">

						<div class="col-md-6">

							<div class="teacher-img-text relative-position text-center">

								<div>

									<iframe width="100%" height="282" src="https://www.youtube.com/embed/WkDyzRz9xn8?si=GZUsnhh4ZqIGf8zc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>

								</div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="four-grid-box">   

								<div class="category-title">

									<p>ICA Edu Skills began its journey in 1999 with a vision to train the job-focused youth in India and make them employable at an affordable fee. As the industry demands ‘skilled manpower’, we too, expanded our horizon by providing practical training to our students and support them with placement at top companies and MNCs. As a result, today we are considered as the pioneer in Accounts &amp; Finance training nationwide, with our top-notch training centres across the country offering the widest range of practical skill building training programs. With the experience of having trained and placed over 4 lakh+ students, ICA has been recognized as India's Best Vocational Training Institute.</p>

									<h4 class="text-right">- Dr. Narendra Shyamsukha</h4>

									<p class="text-right">Founder &amp; Chairman,<br>ICA Edu Skills Pvt. Ltd.<br>Largest EdTech Chain in India</p>

								</div>

								<div class="category-description">

									

								</div>

							</div>

						</div>

						

					</div>

				</div>

			</div>

		</section>
	
	<!-- Start of contact area
		============================================= -->

		<section id="contact" class="contact-area-section backgroud-style">
			<div class="container">
				<div class="contact-area-content">
					<div class="row ">
						<div class="col-md-6">
							<div class="contact-left-content">
								<div class="section-title  mb10 headline text-center">
									<span class="subtitle ml42  text-uppercase">CONTACT US</span>
									<h2><span>Get in Touch</span></h2>
									<p> We value your feedback and inquiries. Please feel free to get in touch with us. We are here to assist you in any way we can. </p>
								</div>									
									<div class="container contact-address">
										<div class="contact-address-details">
											<div class="address-icon relative-position text-center float-left">
												<i class="fas fa-map-marker-alt"></i>
											</div>
											<div class="address-details ul-li-block">
												<ul>
													<li><span><strong>Address: </strong></span> <a href="javascript:void(0)" > {{ $contentMain->address }} </a></li>
												</ul>
											</div>
										</div>
										<div class="contact-address-details">
											<div class="address-icon relative-position text-center float-left">
												<i class="fas fa-phone"></i>
											</div>
											<div class="address-details ul-li-block">
												<ul>
													<li><span><strong>Phone:</strong> </span> <a  target="_blank" href="tel:{{ $contentMain->mobile }}" class="info-id">{{ $contentMain->mobile }}</a> </li>
												</ul>
											</div>
										</div>
										<div class="contact-address-details">
											<div class="address-icon relative-position text-center float-left">
												<i class="fas fa-envelope"></i>
											</div>
											<div class="address-details ul-li-block">
												<ul>
													<li><span><strong>Email: </strong></span><a  target="_blank" href="mailto:{{ $contentMain->email }}" class="info-id">{{ $contentMain->email }}</a></li>
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
									{!! $contentMain->gmap_location !!}
									</div>
								</div><!-- /#google-map-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<style>
			.contact-area-section .section-title span, .contact_secound_section .section-title span {
					color: #0a0808;
				}
				.address-details li {
					font-size: 20px;
					font-weight: 500;
					color: #100d0d;
				}
				.address-icon i {
					font-size: 30px;
					color: #121ea5;
				}
				.contact-area-section, .contact_secound_section {
					background-image: url(../img/banner/contact-b.jpg);
					padding: 51px 0px 70px;
				}
				.contact-area-section .section-title p, .contact_secound_section .section-title p {
					color: #070545;
				}
		</style>

    <!-- End of contact area
			============================================= -->
	<!-- Start of Faqs
	============================================= -->
		<section id="faqs" class="teacher-details-area">
			<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="about-teacher about-faq faq-secound-home-version">
					<div class="section-title-2  headline text-left">
						<h2>Frequently <span>Asked Questions</span></h2>
					</div>
					<div class="faq-tab mb35">
						<div class="faq-tab-ques  ul-li">
							<div id="accordion3" class="panel-group">
								@foreach(getFaqs("Center",$contentMain->id) as $key => $value)
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
					</div>
				</div>
			</div>
			</div>
		</section>
	<!-- End of Faqs
	============================================= -->
    @endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection