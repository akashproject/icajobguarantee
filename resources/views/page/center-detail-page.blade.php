@extends('layouts.main')

    @section('content')

    <!-- Start of slider section

		============================================= -->
		@if(check_device('desktop'))
		<section id="slide" class="slider-section">
			<div id="slider-item" class="slider-item-details">
				<div  class="slider-area slider-bg-5 relative-position" style="background-image: url({{url('assets/img/banner/banner-classroom.webp')}});">
 					<div class="slider-text">
 						<div class="section-title mb20 headline text-left ">
 							<div class="layer-1-3">
							 	<h1 style="font-size:42px!important; color:#3e4095;" class="secoud-title"> <span>ICA Edu Skills | 														Ahmedabad</span></h1>
 							</div>
 							<div class="row">
					<p class="col-md-6"style="font-size:18px!important;">Best Training Institute In Ahmedabad for Accounts, GST, Tally Prime, SAP FICO courses. It is one of the pioneers in the retail education sector in India providing Job Guarantee Courses.</p>
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
								<h1 style="font-size:25px!important; color:#3e4095;" class="secoud-title pb-2"> <span>ICA Edu Skills | Ahmedabad</span></h1>
							</div>
							<div class="contact">
							<p> <a href="https://www.icajobguarantee.com/state/gujarat"><i class="fas fa-map-marker"></i> Gujarat</a>, <a href="https://www.icajobguarantee.com/city/ahmedabad"> Ahmedabad </a></p>
							</div>
							<div class="row">
					           <p class="col-md-6"style="font-size:18px!important;">Best Training Institute In Ahmedabad for Accounts, GST,Tally Prime,SAP FICO courses.It is one of the pioneers in the retail education sector in India providing Job Guarantee Courses.</p>
							</div>							
							<div class="course-meta" style="font-size: 7px">
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
													</div>
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

		<!-- Child manu section start
		============================= -->

		<div class="page-inside-menu header-fixed" style="display: none;">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<nav class="navbar-menu inside-navbar">
						<div class="nav-menu ul-li">
							<ul class="courseMenu">
									<li class="" rel="tab3"><a href="#popular-course">Courses</a></li>
									<li class="" rel="tab4"><a href="#placement">Placement</a></li>
									<!--<li class="" rel=""><a href="#career">Careers</a></li>-->
									<li class="" rel=""><a href="#alumni">Alumni</a></li>
									<li class="" rel=""><a href="#highlights">Highlights</a></li>
									<li class="" rel=""><a href="#course-details">Course Details</a></li>
									<!--<li class="" rel=""><a href="#faq">FAQs</a></li>-->
								</ul>
						</div>
						</nav>
					</div>
					<div class="col-md-3 text-center">
						<div class="enroll-btn header-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
						<a onclick="lead_capture_form_btn(1,'')" href="javascript:void(0)"> Apply Now </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Child manu end
		============================= -->

    <!-- Start popular course
		============================================= -->
		<section id="popular-course" class="popular-course-section popular-three" style="background:#d0cfda">

			<div class="container">
					<div class="section-title mb20 headline text-center">
						<span class="subtitle text-uppercase">COURSES IN AHMEDABAD</span>
						<h2 style="font-size: 30px!important;">Explore The Best <span>Accounting, Taxation, GST, SAP FICO, TallyPrime</span> Courses</h2>
					</div>				
					<div class="course-slide row">
								
									<div class="mb-3 col-md-4" >
										<div class="shadow-lg bg-black rounded ">
											<div class="course-item-pic-text">
												<div class="course-pic relative-position mb25">
													<img src="https://www.icajobguarantee.com/public/upload/2024-02-05/certified-industrial-accountant.webp" class="width-100" alt=""> 
													<div class="course-details-btn">
														<a href="courses/accounting-course-cia">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
													</div>
												</div>
												<div class="course-item-text mb-20">
													<div class="course-meta" style="font-size: 7px">
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
													</div>
													<div class="course-title mt10 headline relative-position  mb-0">
														<h3 style="font-size: 20px"><a href="courses/accounting-course-cia">Certified Industrial Accountant</a> </h3>
													</div>
													<div class="course_highlights alt-font p-1 "style="color:black;">                     
															<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 100% Placement Assurance </span></p>					
															<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 3 Months Paid Internship</span></p>										
															<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 28 Live Projects</span></p>										
															<p> <span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Learn 40 Digital Automation Tools</span></p>										
															<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 6 Certifications</span></p>										
															<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Mock Interview Sessions</span></p>										
													</div>
													<div class="course-meta mt10 ">
														<span class="course-category"><a href="#"><i class="fas fa-clock"></i> 12 Months</a></span>
														<span class="course-author"><a href="#"><i class="fas fa-book"></i> 7 Modules</a></span>
													</div>
												</div>
												<div class="more-btn text-center" >
													<div class="course-type-list">	
														<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn(1,'')"><i class="fas fa-download"></i> Brochure</a>
													</div>
													<div class="course-type-list">														
														<a class="btn-outline" href="https://www.icajobguarantee.com/courses/accounting-course-cia" >View More <i class="fas fa-caret-right"></i></a>
													</div>														
												</div>
											</div>
										</div>
									</div>

								<div class="mb-3 col-md-4 " >
									<div class="course-item-pic-text">
										<div class="course-pic relative-position mb25">
											<img src="https://www.icajobguarantee.com/public/upload/2024-02-06/advanced-excel-course.webp" class="width-100" alt=""> 
											<div class="course-details-btn">
												<a href="courses/advanced-excel-course">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="course-item-text mb-20">
											<div class="course-meta" style="font-size: 7px">
												<span class="course-category"><i class="fas fa-user"></i> 16.4k &nbsp Students</span>
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
											</div>
											<div class="course-title mt10 headline relative-position  mb-0">
												<h3 style="font-size: 20px"><a href="courses/advanced-excel-course">Advanced Excel Course</a> </h3>
											</div>
											<div class="course_highlights alt-font p-1 "style="color:black;">                     
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 100% Placement Assurance </span></p>					
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 3 Months Paid Internship</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 28 Live Projects</span></p>										
													<p> <span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Learn 40 Digital Automation Tools</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 6 Certifications</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Mock Interview Sessions</span></p>										
											</div>
											<div class="course-meta mt10 ">
												<span class="course-category"><a href="#"><i class="fas fa-clock"></i> 18 Hours</a></span>
												<span class="course-author"><a href="#"><i class="fas fa-book"></i> 12 Modules</a></span>
											</div>
										</div>
										<div class="more-btn text-center" >
											<div class="course-type-list">	
												<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn(1,'')">
													<i class="fas fa-download"></i> Brochure
												</a>
											</div>
											<div class="course-type-list">														
												<a class="btn-outline" href="https://www.icajobguarantee.com/courses/advanced-excel-course" >View More <i class="fas fa-caret-right"></i></a>
											</div>														
										</div>
									</div>
								</div>
								<div class="mb-3 col-md-4" >
									<div class="course-item-pic-text">
										<div class="course-pic relative-position mb25">
											<img src="https://www.icajobguarantee.com/public/upload/2024-02-05/tally-prime-gst-course.webp" class="width-100" alt=""> 
											<div class="course-details-btn">
												<a href="courses/tallyprime-gst-course">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="course-item-text mb-20">
											<div class="course-meta" style="font-size: 7px">
												<span class="course-category"><i class="fas fa-user"></i> 99.5k &nbsp Students</span>
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
											</div>
											<div class="course-title mt10 headline relative-position  mb-0">
												<h3 style="font-size: 20px"><a href="courses/tallyprime-gst-course">Tally Prime + GST Course</a> </h3>
											</div>
											<div class="course_highlights alt-font p-1 "style="color:black;">                     
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 100% Placement Assurance </span></p>					
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 3 Months Paid Internship</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 28 Live Projects</span></p>										
													<p> <span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Learn 40 Digital Automation Tools</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 6 Certifications</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Mock Interview Sessions</span></p>										
											</div>
											<div class="course-meta mt10 ">
												<span class="course-category"><a href="#"><i class="fas fa-clock"></i> 51 Hours</a></span>
												<span class="course-author"><a href="#"><i class="fas fa-book"></i> 16 Modules</a></span>
											</div>
										</div>
										<div class="more-btn text-center" >
											<div class="course-type-list">	
												<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn(1,'')"><i class="fas fa-download"></i> Brochure</a>
											</div>
											<div class="course-type-list">														
												<a class="btn-outline" href="https://www.icajobguarantee.com/courses/tallyprime-gst-course" >View More <i class="fas fa-caret-right"></i></a>
											</div>														
										</div>
									</div>
								</div>
								<div class="mb-3 col-md-4" >
									<div class="course-item-pic-text">
										<div class="course-pic relative-position mb25">
											<img src="https://www.icajobguarantee.com/public/upload/2024-02-15/gst-certification-course.webp" class="width-100" alt=""> 
											<div class="course-details-btn">
												<a href="courses/gst-certification-course">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="course-item-text mb-20">
											<div class="course-meta" style="font-size: 7px">
												<span class="course-category"><i class="fas fa-user"></i> 74.2k &nbsp Students</span>
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
											</div>
											<div class="course-title mt10 headline relative-position  mb-0">
												<h3 style="font-size: 20px"><a href="courses/gst-certification-course">GST Certification Course</a> </h3>
											</div>
											<div class="course_highlights alt-font p-1 "style="color:black;">                     
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 100% Placement Assurance </span></p>					
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 3 Months Paid Internship</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 28 Live Projects</span></p>										
													<p> <span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Learn 40 Digital Automation Tools</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 6 Certifications</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Mock Interview Sessions</span></p>										
											</div>
											<div class="course-meta mt10 ">
												<span class="course-category"><a href="#"><i class="fas fa-clock"></i> 27 Hours</a></span>
												<span class="course-author"><a href="#"><i class="fas fa-book"></i> 10 Modules</a></span>
											</div>
										</div>
										<div class="more-btn text-center" >
											<div class="course-type-list">	
												<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn(1,'')"><i class="fas fa-download"></i> Brochure</a>
											</div>
											<div class="course-type-list">														
												<a class="btn-outline" href="https://www.icajobguarantee.com/courses/gst-certification-course" >View More <i class="fas fa-caret-right"></i></a>
											</div>														
										</div>
									</div>
								</div>
								<div class="mb-3 col-md-4" >
									<div class="course-item-pic-text">
										<div class="course-pic relative-position mb25">
											<img src="https://www.icajobguarantee.com/public/upload/2024-02-15/sap-fico-course-business-user.webp" class="width-100" alt=""> 
											<div class="course-details-btn">
												<a href="courses/sap-fico-course">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="course-item-text mb-20">
											<div class="course-meta" style="font-size: 7px">
												<span class="course-category"><i class="fas fa-user"></i> 60.9k &nbsp Students</span>
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
											</div>
											<div class="course-title mt10 headline relative-position  mb-0">
												<h3 style="font-size: 20px"><a href="courses/sap-fico-course">SAP FICO Course (Business User)</a> </h3>
											</div>
											<div class="course_highlights alt-font p-1 "style="color:black;">                     
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 100% Placement Assurance </span></p>					
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 3 Months Paid Internship</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 28 Live Projects</span></p>										
													<p> <span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Learn 40 Digital Automation Tools</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 6 Certifications</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Mock Interview Sessions</span></p>										
											</div>
											<div class="course-meta mt10 ">
												<span class="course-category"><a href="#"><i class="fas fa-clock"></i> 80 Hours</a></span>
												<span class="course-author"><a href="#"><i class="fas fa-book"></i> 1 Modules</a></span>
											</div>
										</div>
										<div class="more-btn text-center" >
											<div class="course-type-list">	
												<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn(1,'')"><i class="fas fa-download"></i> Brochure</a>
											</div>
											<div class="course-type-list">														
												<a class="btn-outline" href="https://www.icajobguarantee.com/courses/sap-fico-course" >View More <i class="fas fa-caret-right"></i></a>
											</div>														
										</div>
									</div>
								</div>
								<div class="mb-3 col-md-4" >
									<div class="course-item-pic-text">
										<div class="course-pic relative-position mb25">
											<img src="https://www.icajobguarantee.com/public/upload/2024-02-05/mis-analytics.webp" class="width-100" alt=""> 
											<div class="course-details-btn">
												<a href="courses/mis-course">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="course-item-text mb-20">
											<div class="course-meta" style="font-size: 7px">
												<span class="course-category"><i class="fas fa-user"></i> 601 &nbsp Students</span>
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
											</div>
											<div class="course-title mt10 headline relative-position  mb-0">
												<h3 style="font-size: 20px"><a href="courses/mis-course">Certificate in MIS Analytics</a> </h3>
											</div>
											<div class="course_highlights alt-font p-1 "style="color:black;">                     
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 100% Placement Assurance </span></p>					
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 3 Months Paid Internship</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 28 Live Projects</span></p>										
													<p> <span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Learn 40 Digital Automation Tools</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 6 Certifications</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Mock Interview Sessions</span></p>										
											</div>
											<div class="course-meta mt10 ">
												<span class="course-category"><a href="#"><i class="fas fa-clock"></i> 4 Months</a></span>
												<span class="course-author"><a href="#"><i class="fas fa-book"></i> 6 Modules</a></span>
											</div>
										</div>
										<div class="more-btn text-center" >
											<div class="course-type-list">	
												<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn(1,'')"><i class="fas fa-download"></i> Brochure</a>
											</div>
											<div class="course-type-list">														
												<a class="btn-outline" href="https://www.icajobguarantee.com/courses/mis-course" >View More <i class="fas fa-caret-right"></i></a>
											</div>														
										</div>
									</div>
								</div>
								<div class="mb-3 col-md-4" >
									<div class="course-item-pic-text">
										<div class="course-pic relative-position mb25">
											<img src="https://www.icajobguarantee.com/public/upload/2024-02-12/microsoft-certification.webp" class="width-100" alt=""> 
											<div class="course-details-btn">
												<a href="courses/microsoft-office-course">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="course-item-text mb-20">
											<div class="course-meta" style="font-size: 7px">
												<span class="course-category"><i class="fas fa-user"></i> 1.9k &nbsp Students</span>
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
											</div>
											<div class="course-title mt10 headline relative-position  mb-0">
												<h3 style="font-size: 20px"><a href="courses/microsoft-office-course">Microsoft Office Certification</a> </h3>
											</div>
											<div class="course_highlights alt-font p-1 "style="color:black;">                     
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 100% Placement Assurance </span></p>					
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 3 Months Paid Internship</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 28 Live Projects</span></p>										
													<p> <span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Learn 40 Digital Automation Tools</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 6 Certifications</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Mock Interview Sessions</span></p>										
											</div>
											<div class="course-meta mt10 ">
												<span class="course-category"><a href="#"><i class="fas fa-clock"></i> 48 Hours</a></span>
												<span class="course-author"><a href="#"><i class="fas fa-book"></i> 1 Modules</a></span>
											</div>
										</div>
										<div class="more-btn text-center" >
											<div class="course-type-list">	
												<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn(1,'')"><i class="fas fa-download"></i> Brochure</a>
											</div>
											<div class="course-type-list">														
												<a class="btn-outline" href="https://www.icajobguarantee.com/courses/microsoft-office-course" >View More <i class="fas fa-caret-right"></i></a>
											</div>														
										</div>
									</div>
								</div>
								<div class="mb-3 col-md-4" >
									<div class="course-item-pic-text">
										<div class="course-pic relative-position mb25">
											<img src="https://www.icajobguarantee.com/public/upload/2024-02-12/zoho.webp" class="width-100" alt=""> 
											<div class="course-details-btn">
												<a href="courses/zoho-books">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="course-item-text mb-20">
											<div class="course-meta" style="font-size: 7px">
												<span class="course-category"><i class="fas fa-user"></i> 391 &nbsp Students</span>
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
											</div>
											<div class="course-title mt10 headline relative-position  mb-0">
												<h3 style="font-size: 20px"><a href="courses/zoho-books">ZOHO Books</a> </h3>
											</div>
											<div class="course_highlights alt-font p-1 "style="color:black;">                     
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 100% Placement Assurance </span></p>					
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 3 Months Paid Internship</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 28 Live Projects</span></p>										
													<p> <span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Learn 40 Digital Automation Tools</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; 6 Certifications</span></p>										
													<p><span class="course-category"><i class="fas fa-solid fa-check-circle" style="color:#1B007A	;"></i>&nbsp; Mock Interview Sessions</span></p>										
											</div>
											<div class="course-meta mt10 ">
												<span class="course-category"><a href="#"><i class="fas fa-clock"></i> 8 Hours</a></span>
												<span class="course-author"><a href="#"><i class="fas fa-book"></i> 1 Modules</a></span>
											</div>
										</div>
										<div class="more-btn text-center" >
											<div class="course-type-list">	
												<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn(1,'')"><i class="fas fa-download"></i> Brochure</a>
											</div>
											<div class="course-type-list">														
												<a class="btn-outline" href="https://www.icajobguarantee.com/courses/zoho-books" >View More <i class="fas fa-caret-right"></i></a>
											</div>														
										</div>
									</div>
								</div>
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
				.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
				position: relative;
				width: 100%;
				min-height: 1px;
				padding-right: 8px;
				padding-left: 8px;
				padding-bottom: 30px;
			}
		</style>
	<!-- End popular course
		============================================= -->

	<!-- Start Placement Section -->
	<Section  id="placement" class="popular-course-section popular-three" style="background:white">
			<div class="container">
					<div class="section-title mb20 headline text-center">
						<span class="subtitle text-uppercase">STUDENT PLACEMENT</span>
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

	<!-- Start of testimonial secound section
	============================================= -->
	<section id="alumni" class="testimonial_2_section">

		<div class="container">

			<div class="testimonial-slide">

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

					<div class="col-md-5 mb20 text-center">

						<img src="https://www.icajobguarantee.com/assets/img/left-image.png" class="border-10px-radius">

					</div>

					<div class="col-md-7 mt10">

						<div class="section-title mb20 headline text-center">

							<span class="subtitle text-uppercase"> <STROng>Training </STROng></span>

							<h3 style="font-size:26px!important;"><STRONG> Why </STRONG>  <span> ICA Edu Skills Ahmedabad? </span></h3>

						</div>
	
							<div class="row text-center">

								<div class="col-md-4 col-6"> 

									<div class="key-highlights" style="border: 5px solid #ccc; margin: 5px;">

										<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

										<h6> 100% Job Guarantee </h6>
										<p>is simply dummy text of the printing and typesetting industry</p>

									</div>

								</div>

								<div class="col-md-4 col-6"> 

									<div class="key-highlights" style="border: 5px solid #ccc; margin: 5px;">

										<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

										<h6> Any Time Job Card </h6>
										<p>is simply dummy text of the printing and typesetting industry</p>
									</div>

								</div>							

								<div class="col-md-4 col-6"> 

									<div class="key-highlights" style="border: 5px solid #ccc; margin: 5px;">

										<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

										<h6> 9 Simulation Software </h6>
										<p>is simply dummy text of the printing and typesetting industry</p>
									</div>

								</div>

								<div class="col-md-4 col-6"> 

									<div class="key-highlights" style="border: 5px solid #ccc; margin: 5px;">

										<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

										<h6>  Triple Certification </h6>
										<p>is simply dummy text of the printing and typesetting industry</p>
									</div>

								</div>

								<div class="col-md-4 col-6"> 

									<div class="key-highlights" style="border: 5px solid #ccc; margin: 5px;">

										<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

										<h6> Mock Interviews </h6>
										<p>is simply dummy text of the printing and typesetting industry</p>
									</div>

								</div>

								<div class="col-md-4 col-6"> 

									<div class="key-highlights" style="border: 5px solid #ccc; margin: 5px;">

										<img src="https://www.icajobguarantee.com/assets/img/icons/tick.png" >

										<h6> 90% Practical </h6>
										<p>is simply dummy text of the printing and typesetting industry</p>
									</div>
								</div>								
							</div>
					</div>
				</div>
			</div>
		</section>
<style>
		.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 0px;
    padding-left: 0px;
}

</style>

	<!-- End of Course Highlights

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

 	<!-- End of chairman message

	============================================= -->

<!-- Start of Course detail section

	============================================= -->
	<section id="course-details" class="course-details-section py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="course-details-item">
							<!-- <div class="course-single-pic mb30">
								<img src="https://www.icajobguarantee.com/assets/img/course/cs-1.jpg" alt="">
							</div> -->
							<div class="faq-tab mb65">
								<div class="faq-tab-ques  ul-li">
									<div class="text-center color-black">
										 <h2 class="course-detail pb-3" style="color: darkblue;">Our <span>Course Details</span></h2>
									</div>
									<!-- /tab-head -->

									<!-- tab content -->
									<div class="container">
										<!-- 1st tab -->
										<div id="" class="content pt35" style="display: block;">
											<div class="course-details-content">
												<div class="course-single-text">
													<div class="course-details-content">
														<p>Gear up yourself by enrolling with <a href="../../category/accounting-courses" target="_blank" rel="noopener">100% job guarantee courses</a> with our 90% practical sessions.</p>
																<ul>
																	<li>We Focus on practical learning that binds 90% of classes and the remaining 10% aligns students with theory knowledge as per industry standards.</li>
																	<li>Ready to enroll? Choose the mode that suits you either Classroom or Online medium for the Short-term training program on
																	<ul>
																		<li>Industrial Accounting</li>
																		<li>Microsoft Office Suite</li>
																		<li>TallyPrime</li>
																		<li>GST Certification</li>
																		<li>SAP FICO - Business User</li>
																		<li>Advanced Excel</li>
																		<li>and much more</li>
																	</ul>
																	</li>
																	<li>Not limited to academic knowledge, improve your overall performance through 90% practical sessions with sessions on Mock Interviews, Group Discussion &amp; Personal Interviews, "Excel Ka Don" and "Tally Ka Boss" in the workplace. <a href="../../placements" target="_blank" rel="noopener">Know more</a></li>
																</ul>
																<p>So why fear when ICA is there with job-ready short-term courses in your city? Go through complete real-world exposure with 7 latest simulation software (E.S.I, ITR, PF, PAN, Net Banking, GSTN, TDS).</p>
																<p>Unlock Your Job Potential with our Diverse training Options</p>
															<h3><a href="../../category/accounting-courses" target="_blank" rel="noopener">Accounting Courses in Ahmedabad</a></h3>
																<p>The classes is exclusively designed by experts who equip you with practical learning on</p>
															<ul>
																<li>Business Computer Applications</li>
																<li>Business Accounting</li>
																<li><a href="../../blog/tally" target="_blank" rel="noopener">Tally Prime</a></li>
																<li>Business Communication</li>
																<li>Direct Tax</li>
																<li><a href="../../blog/gst" target="_blank" rel="noopener">GST</a></li>
																<li>Advanced Accounts</li>
															</ul>
																<p>The certification covers practical and theoretical knowledge in 12 months tenure as per the latest trends and industry standards with the add-on benefits of placement assistance. Complete support through mock interviews, Group discussion, and much more.</p>
																<p>Grab the opportunity to get a job in the fields of accounts, finance, and taxation. To explore the bunch of courses, <a href="../../category/accounting-courses" target="_blank" rel="noopener">click here</a>.</p>
															<h3><a href="../../courses/tallyprime-gst-course" target="_blank" rel="noopener">Tally Course in Ahmedabad</a></h3>
																<p>Invest in the Tally Prime training which is a combo of Tally and GST horizons. The traning program helps you in practical learning with theoretical knowledge on</p>
															<ul>
																<li>Company Creation</li>
																<li>Cost Centre &amp; Cost Category</li>
																<li>Accounting</li>
																<li>Inventory</li>
																<li>Bill of Material (BOM)</li>
																<li>Purchase &amp; Sales Cycle</li>
																<li>Basic Concepts of GST</li>
																<li>GST Using TallyPrime</li>
																<li>Generation of Returns</li>
																<li>TDS</li>
																<li>PF</li>
																<li>Backup &amp; Restore</li>
																<li>ESI</li>
																<li>Payroll</li>
																<li>Security</li>
																<li><a href="../../blog/gst-return-types" target="_blank" rel="noopener">Returns</a></li>
															</ul>
																<p>Complete the Tally Prime certification in just 51 hours that includes doubt-clearing sessions, mock interviews, and Group Discussions with 100% placement assistance.</p>
																<p>Enroll in the Tally Certification program of ICA Center to become a Tally Expert and take your learning journey to the next level. Check the complete details of the <a href="../../courses/tallyprime-gst-course" target="_blank" rel="noopener">Tally GST Course</a>.</p>
																<h3><a href="../../courses/sap-fico-course" target="_blank" rel="noopener">SAP FICO Course in Ahmedabad</a></h3>
																<p>THE SAP FICO classes of ICA center allows you to learn both SAP financial and Controlling modules that empower you to handle a company's financial system.</p>
																<p>The classes modules are designed for business users and cover every topic like</p>
															<ul>
																<li>Sap Erp Overview &amp; Integration</li>
																<li>Procure To Pay Process</li>
																<li><a href="../../blog/sap-order-to-cash-process" target="_blank" rel="noopener">Order To Cash Process</a></li>
																<li>General Ledger Accounting</li>
																<li>Accounts Payable Business Process</li>
																<li>Daily Posting And Period-End Closings In Management Accounting</li>
																<li>Accruals And Deferrals</li>
																<li>Concept Of Consolidation With A Chart Of Accounts</li>
																<li>Concept Of Multiple Currencies</li>
																<li>Concept Of Trading Partners</li>
																<li>Financial Statements Versions</li>
																<li>Opening And Closing Periods</li>
																<li>Fixed Assets</li>
																<li>Inventory Valuation</li>
																<li>Hire To Retire Process</li>
																<li>Finance Organization Structure And Master Data</li>
																<li><a href="../../blog/sap-supply-chain-modules" target="_blank" rel="noopener">Sap's Controlling Organization</a></li>
															</ul>
																<p>Elevate your skills in just 80 hours by getting practical experience and learning theoretical concepts. Enroll in the SAP FICO taining program of ICA to become</p>
															<ul>
																<li>SAP FICO Consultant</li>
																<li>SAP RAR/FI – Testing Expert</li>
																<li>SAP FICO Consulting</li>
															</ul>
															<p>Get ready and <a href="../../courses/sap-fico-course" target="_blank" rel="noopener">explore the SAP FICO Training Program</a>.</p>
															<h3>GST Course in Ahmedabad</h3>
																<p>Still, facing issues in GST Filing or interested in becoming a GST Expert? Explore the GST institute and unlock your dream job with us.</p>
																<p>The training embarks your journey with practical learning and theoretical concepts in</p>
															<ul>
																<li><a href="../../blog/gst-basic-concepts-ultimate-guide-for-students" target="_blank" rel="noopener">Basics Concepts of GST</a></li>
																<li>Levy and Collection of Tax</li>
																<li>Valuation</li>
																<li>Payment of Tax</li>
																<li>Returns</li>
																<li>GST using Tally</li>
																<li>Practice on GSTN</li>
																<li>Project on GST</li>
															</ul>
																<p>This 27-hour training program will make you ready to become a perfect GST professional and transform your life. No longer wait for the best opportunity because we prepare you for the future through personality development classes, mock interviews, and group discussions and assist you till the placement.</p>
																<p>Choose your perfect educator by exploring</p>
															<h3><a href="../../courses/advanced-excel-course" target="_blank" rel="noopener">Advanced Excel Course in Ahmedabad</a></h3>
																<p>Tired of doing repetitive calculations in Excel or puzzled with data handling in Excel? Companies crave Excel heroes and we are here with an Advanced Excel Certification.</p>
																<p>The class opens the door for endless job opportunities and enhances your Excel skills with practical learning and theoretical concepts for boost. We prepared your learning path in</p>
															<ul>
																<li>Database Design</li>
																<li>Number &amp; Conditional Formatting</li>
																<li>Cell Reference</li>
																<li><a href="../../blog/15-advanced-excel-formulas" target="_blank" rel="noopener">Lookup and Reference Functions</a></li>
																<li>Logical Functions &amp; Formatting Documents</li>
																<li>Financial Functions</li>
																<li>Sort &amp; Filter</li>
																<li><a href="../../blog/data-visualization-in-excel" target="_blank" rel="noopener">Pivot Table &amp; Pivot Chart</a></li>
																<li>Protection</li>
																<li>Project on Excel</li>
																<li>Mail Merge</li>
																<li>Google Drive</li>
															</ul>
																<p>Elevate your skills with our 18-hour classroom training program that is designed with doubt-clearing sessions, group discussions, expert classes, mock interviews, and complete placement assistance.</p>
																<p>Explore the <a href="../../courses/advanced-excel-course" target="_blank" rel="noopener">Advanced Excel Training curriculum</a> for full details.</p>
																<p>Get all the details on training programs, placements, and more to enroll in <a href="../../courses" target="_blank" rel="noopener">short-term courses</a>.</p>
															
																<h2>Placement Information</h2>
																<p>The complete bundle of placement assistance assures jobs for our future gems.</p>
															<div class="container">
															<div class="row">
															<div class="col-sm text-center"><img src="../../assets/img/icons/education.png" alt="Training Completion" width="60%" height="auto">
															<h6>Training Completion</h6>
															</div>
															<div class="col-sm text-center"><img src="../../assets/img/icons/cv.png" alt="CV Preparetion" width="60%" height="auto">
															<h6>CV Preparetion</h6>
															</div>
															<div class="col-sm text-center"><img src="../../assets/img/icons/job-interview.png" alt="Mock Interviews" width="60%" height="auto">
															<h6>Mock Interviews</h6>
															</div>
															<div class="col-sm text-center"><img src="../../assets/img/icons/interview.png" alt="Student Interviews" width="60%" height="auto">
															<h6>Student Interviews</h6>
															</div>
															<div class="col-sm text-center"><img src="../../assets/img/icons/appointment.png" alt="Appointment Letter" width="60%" height="auto">
															<h6>Appointment Letter</h6>
															</div>
															</div>
															</div>
															<h2>Explore the Upcoming opportunities in Ahmedabad</h2>
															<p><a href="../../courses/gst-certification-course" target="_blank" rel="noopener"><img src="../../public/upload/2024-02-06/accounting-jobs-in-ahmedabad.webp" alt="Accounting Jobs in Ahmedabad" width="100%" height="auto"></a></p>
															<h5 class="text-center">Accounting Jobs - 6668 Vacancies</h5>
															<p><a href="../../courses/gst-certification-course" target="_blank" rel="noopener"><img src="../../public/upload/2024-02-06/excel-jobs-in-ahmedabad.webp" alt="Excel Jobs in Ahmedabad" width="100%" height="auto"></a></p>
															<h5 class="text-center">Excel Jobs - 6668 Vacancies</h5>
															<p><a href="../../courses/gst-certification-course" target="_blank" rel="noopener"><img src="../../public/upload/2024-02-06/gst-jobs-in-ahmedabad.webp" alt="GST Jobs in Ahmedabad" width="100%" height="auto"></a></p>
															<h5 class="text-center">GST Jobs - 6668 Vacancies</h5>
															<p><a href="../../courses/gst-certification-course" target="_blank" rel="noopener"><img src="../../public/upload/2024-02-06/tally-jobs-in-ahmedabad.webp" alt="Tally Jobs in Ahmedabad" width="100%" height="auto"></a></p>
															<h5 class="text-center">Tally Jobs - 6668 Vacancies</h5>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	<!-- #tab5 -->
																</div>
															</div>
														</div>															
													</div>						
												</div>
											</div>
										</div>
									</section>


								<!-- Start of contact area

									============================================= -->

				<section id="contact-area" class="contact-area-section backgroud-style">
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
															<li><span><strong>Address: </strong></span> 601 6th floor, Motilal Chamber Beside Sales India, Income Tax Cross Road, Ashram road, Ahmedabad Gujarat -380014</li>
														</ul>
													</div>
												</div>
												<div class="contact-address-details">
													<div class="address-icon relative-position text-center float-left">
														<i class="fas fa-phone"></i>
													</div>
													<div class="address-details ul-li-block">
														<ul>
															<li><span><strong>Phone:</strong> </span> <a  target="_blank" href="tel:{{get_theme_setting('mobile')}}" > +91-8128411776 </a> </li>
														</ul>
													</div>
												</div>
												<div class="contact-address-details">
													<div class="address-icon relative-position text-center float-left">
														<i class="fas fa-envelope"></i>
													</div>
													<div class="address-details ul-li-block">
														<ul>
															<li><span><strong>Email: </strong></span><a  target="_blank" href="mailto:{{get_theme_setting('email')}}" > gj.amd.ashramroad@icagroup.in </a></li>
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
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.6076516088065!2d72.56737917436804!3d23.0381738157476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e845786855555%3A0x35396b647743f77c!2sICA%20Edu%20Skills%20%7C%20Accounting%20and%20Taxation%20Training%20Institute%20%7C%20Ahmedabad!5e0!3m2!1sen!2sin!4v1716969565883!5m2!1sen!2sin" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

<!-- End of Course detail section

	============================================= -->

    <!-- End of contact area

		============================================= -->

    @endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection