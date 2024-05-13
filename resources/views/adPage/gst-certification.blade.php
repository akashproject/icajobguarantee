@extends('layouts.ad-main')



    @section('content')



	<!-- Start of Header section



	============================================= -->



	<header>



		<div id="main-menu"  class="main-menu-container header-style-2">



			<div class="header-top">



				<div class="container-fluid">



					<div class="row">



						<div class="col-md-7">



							



						</div>



						<div class="col-md-5 top-right-bar">



							<div class="header-top-bar ul-li">



								<ul>



									<li><a href="mailto:{{get_theme_setting('email')}}" ><i class="fas fa-envelope"></i> {{get_theme_setting('email')}}</a></li>



									<li><a href="tel:{{get_theme_setting('mobile')}}" ><i class="fas fa-phone-square"></i> {{get_theme_setting('mobile')}}</a></li>



								</ul>



							</div>



						</div>



					</div>



				</div>



			</div>



			<div class="main-menu">



				<div class="container">



					<div class="navbar-default">



						<div class="navbar-header float-left">



							<a class="navbar-brand text-uppercase" href="javascript:void(0)"><img src="{{ url('assets/images/logo.png') }}" alt="ICA Edu Skills"></a>



								



						</div><!-- /.navbar-header -->						



						



						<!-- Collect the nav links, forms, and other content for toggling -->



						<nav class="navbar-menu float-right">



							<div class="nav-menu ul-li">



								<ul>



								    <li class="">



										<a href="#placements">Placements</a>



									</li>



								    <li class="">



										<a href="#highlights">Highlights</a>



									</li>



									<li class="">



										<a href="#courses">Courses</a>



									</li>



									<li class="">



										<a href="#trainers">Trainers</a>



									</li>									



									<li class="">



										<a href="#classroom">Classroom</a>



									</li>



									<li class="">



										<a href="#certification">Certification</a>



									</li>



									<!--li class="">



										<a href="#testimonials">Testimonials</a>



									</li-->



									<li class="">



										<a href="#faqs">FAQs</a>



									</li>



								</ul>



							</div>



						</nav>







						<div class="mobile-menu">



							<div class="logo"><a href="javascript:void(0)"><img src="{{ url('assets/img/logo/logo.png') }}" alt="Logo"></a></div>



							<nav>



								<ul>



								    <li class="">



										<a href="#placements">Placements</a>



									</li>



								    <li class="">



										<a href="#highlights">Highlights</a>



									</li>



									<li class="">



										<a href="#courses">Courses</a>



									</li>



									<li class="">



										<a href="#trainers">Trainers</a>



									</li>									



									<li class="">



										<a href="#classroom">Classroom</a>



									</li>



									<li class="">



										<a href="#certification">Certification</a>



									</li>



									<!--li class="">



										<a href="#testimonials">Testimonials</a>



									</li-->



									<li class="">



										<a href="#faqs">FAQs</a>



									</li>



								</ul>



							</nav>







						</div>



					</div>



				</div>



			</div>



		</div>



	</header>	



<!-- Start of Header section



	============================================= -->



    <section id="breadcrumb" class="ad-page-banner banner-black-shadow relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});" >



		<div class="container">



			<div class="row">



				<div class="col-md-7">



					<div class="ad-banner-content">



						<div class="ad-banner-title">



							<h1 class="text-center">GST Certification Course</h1>



						</div>



						<div class="ad-banner-sub-title">



							<h3 class="text-center" style="font-size: 1.2rem!important;"> Become a Certified GST Professional in top MNCs. Learn GST return filing, GST using Tally, & practice GSTN with a real-life projects. </h3>



						</div>



						<div class="ad-banner-option">



                            <div class="row">



				                <div class="col-md-6">



                                    <ul>



                                        <li><strong>Eligibility:</strong> 12+/Graduate</li>



                                        <li><strong>Course Type:</strong> Short Term Course</li>



                                        <li><strong>Delivery Mode:</strong> Classroom/Offline</li>



                                        <li><strong>Language:</strong> English/Hindi</li>



                                    </ul>    



                                </div>



                                <div class="col-md-6">



                                    <ul>



                                        <li><strong>Difficulty Level:</strong> Beginner</li>



                                        <li><strong>No. of Lectures:</strong> 8 Lectures</li>



                                        <li><strong>Duration:</strong> 27 Hours</li>



                                        <li><strong>Doubt Clearing Session:</strong> Yes</li>



                                    </ul>



                                </div>    



                            </div> 



                            <div class="row">



                                <div class="col-md-12 text-center bold-font" style=" padding: 5px; background: #0034D7;">



                                    <div class="total-rating text-white">



                                        Rating: <a href="javascript:void(0)" style="color: #fff;" > 4.0 </a>



                                        <div class="ratings " style="display: inline;margin: 0 6px;">



                                            <i class="fas fa-star active"></i>



                                            <i class="fas fa-star active"></i>



                                            <i class="fas fa-star active"></i>



                                            <i class="fas fa-star active"></i>



                                        </div>



                                        <a href="javascript:void(0)" class="text-white" style="cursor: auto;margin: 0 6px;"> (4823 Reviews )</a> <span class="text-white total-enroll" > 9689 students </span>



                                    </div>



                                </div>



                            </div>



						</div>



					</div>



				</div>



				<div class="col-md-5">



					<div class="highlighted-content-wrapper text-center">



						<div class="ad_banner_form_wrapeer" >



							<div class="register-fomr-title text-center">



								<h3 class="bold-font" style="font-size: 23px!important;"><span> Become a </span><br /> Certified GST Professional </h3>



								<p style="color: #222!important;" class="bold-font">Our experts will guide you through the right GST Training process for a lucrative career ahead of you.</p>



							</div>



							<div class="register-form-area text-left" >



								<form id="banner_lead_capture_form" class="lead_form" action="{{ url('capture-lead') }}" method="POST" enctype="multipart/form-data">



									<div class="form_process" >



										<div class="lead_steps step1 active"> 



											@include('common.leadCaptureFormField')



											<div class="form-group disclaimer text-left">



												<p style="margin:0">



													<input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fa fa-whatsapp" style="color: green;"></i> whatsapp. 



												</p>



												<p>



													<input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS. 



												</p>



											</div>



										</div>



										@include('common.leadCaptureFormOtpField')



									</div>



									<div class="form_success" style="display:none">



										<div class="form-success-content">



											<span class="success-icon"> <i class="fas fa-check"></i> </span>



											<h4> Thank You! Your Application Submitted Successfully </h4>



										</div>



									</div>



								</form> 



							</div>



						</div>



					</div>



				</div>



			</div>



		</div>



	</section>







	<!-- Start of Upper Band



		============================================= -->



		<section id="usp" class="search-course-section search-course-secound">



			<div class="container">



				<div class="search-counter-up">



					<div class="row">



						<div class="col-md-3">



							<div class="counter-icon-number "  >



								<div class="counter-icon">



									<i class="text-gradiant flaticon-graduation-hat"></i>



								</div>



								<div class="counter-number">



									<span class="counter-count bold-font">500K</span><span>+</span>



									<p>Satisfied Students</p>



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



									<span class="counter-count bold-font">24</span><span>+</span>



									<p>Years of Excelllence</p>



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



									<span class="counter-count bold-font">90</span><span>%</span>



									<p>Practical Training</p>



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



									<span class="counter-count bold-font">Real Life</span>



									<p>Projects</p>



								</div>



							</div>



						</div>



						<!-- /counter -->



					</div>



				</div>



			</div>



		</section>



	<!-- End of Upper Band



		============================================= -->



		



	<style type="text/css">



	    .testimonial_2_section { padding-top: 50px!important; }



	    .placement-content { height: auto!important; }



	</style> 



	



	<!-- Start of placement section



	============================================= -->



	@if(count(getJoinees('',1)) > 0)



	<section id="placements" class="testimonial_2_section">



		<div class="container">



			<!--div class="testimonial-slide"-->



				<div class="section-title mb20 headline text-center">



					<span class="subtitle text-uppercase"> Student Placement </span>



					<h3>Connecting Talent with <span>Job Opportunities</span></h3>



				</div>



				<div  id="placement-slide-item" class="placement-slide-area">



					@foreach(getJoinees('',1) as $value)						



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



	<!-- End of placement section



	============================================= -->



		







	<!-- Start of Course Hightlights



		============================================= -->



		<section id="highlights" class="highlights-section">



			<div class="container">



				<div class="row">



					<div class="col-md-5 mb20 text-center">



						<img src="{{url('assets/img/left-image.png')}}" class="border-10px-radius">



					</div>



					<div class="col-md-7 mt10">



						<div class="section-title mb20 headline text-center">



							<span class="subtitle text-uppercase"> Info </span>



							<h3> GST Course <span>  Highlights </span></h3>



						</div>



						<div class="row text-center">



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> 100% Job Guarantee </h6>



								</div>



							</div>



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Interactive Classes </h6>



								</div>



							</div>



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> 90% Practical + 10% Theory </h6>



								</div>



							</div>



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Real Life Projects </h6>



								</div>



							</div>



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Mock Interviews </h6>



								</div>



							</div>



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> GST using TallyPrime </h6>



								</div>



							</div>



						</div>



					</div>



				</div>



			</div>



		</section>







	<!-- End of Course Highlights



	============================================= -->







	<!-- Start of Course Syllabus



	============================================= -->



	<section id="course-details" class="galleries-section">



		<div class="container">



			<div class="testimonial-slide">



				<div class="section-title mb20 headline text-center">



					<span class="subtitle text-uppercase">Course Info</span>



					<h3> GST <span> Training </span> Syllabus </h3>



				</div>



				<div class="row">



					<div class="col-md-12">



						<div class="row text-center">



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 1 <br /> Basic concepts of GST </h6>



									<p> Understand fundamental GST principles </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 2 <br /> Levy & Collection of Tax </h6>



									<p> Learn tax levying and collection process in GST </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 3 <br /> Valuation </h6>



									<p> Determine the value of goods and services for GST </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 4 <br /> Payment of Tax </h6>



									<p> Grasp GST payment process and modes </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 5 <br /> Returns </h6>



									<p> Understand GST return filing and types </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 6 <br /> GST using Tally </h6>



									<p> Acquire practical skills in using Tally for GST compliance </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 7 <br /> Practice on GSTN </h6>



									<p> Gain hands-on experience with the GSTN platform </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 8 <br /> Project on GST </h6>



									<p> Apply GST knowledge to real-world projects </p>



								</div>



							</div>							



						</div>



					</div>



				</div>



			</div>



		</section>



	<!-- End of Course Syllabus



	============================================= -->



	



	<!-- Start of Courses Listings



	============================================= -->



	<section id="courses" class="best-course-section">



		<div class="container">



			<div class="section-title mb45 headline text-center">



				<span class="subtitle text-uppercase"> COURSES </span>



				<h3> Browse Our <span> Best GST Certification Courses </span></h3>



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



													<h3> {{ $course->name }}  



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



						<span class="subtitle text-uppercase">COURSES DETAILS</span>



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



    <!-- End of Courses Listings



	============================================= -->







	<!-- Start of our trainer section



	   ============================================= -->



	<section id="trainers" class="testimonial_2_section">



	   <div class="container">



	   <div class="testimonial-slide">



		  <div class="section-title mb20 headline text-center">



			 <span class="subtitle text-uppercase">Our Trainers</span>



			 <h3> Learn from <span> Market Experts </span></h3>



		  </div>



		  <div  id="testimonial-slide-item" class="testimonial-slide-area">



			 <div class="student-qoute">



				<div class="course-pic relative-position text-center">



				   <div class="circle-img">



					  <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/toshali-banerjee.jpg" alt="toshali-banerjee">	



				   </div>



				</div>



				<p><strong>Industry Experience:</strong> B.Sc in Pure Science + 2 yrs exp. as Computer Faculty. Trains students in Business Apps, Excel, Tally for industry-ready skills and improved job placements in a competitive market. </p>



				<div class="student-name-designation">



				   <span class="st-name bold-font">Toshali Banerjee</span>



				</div>



			 </div>



			 <div class="student-qoute">



				<div class="course-pic relative-position text-center">



				   <div class="circle-img">



					  <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/vibhanshu-sarkar.jpg" alt="vibhanshu-sarkar">



				   </div>



				</div>



				<p><strong>Industry Experience:</strong> Semi Qualified cost accountant and Master in Commerce. 8 years experience in academics, Tax Consultant and GST Practitioner . worked with numerous clients to optimize their tax strategies. </p>



				<div class="student-name-designation">



				   <span class="st-name bold-font">Vibhanshu Sarkar</span>



				</div>



			 </div>



			 <div class="student-qoute">



				<div class="course-pic relative-position text-center">



				   <div class="circle-img">



					  <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/debajyoti-kundu.jpg" alt="debajyoti-kundu">



				   </div>



				</div>



				<p><strong>Industry Experience:</strong> M.Com + 10 yrs exp. as faculty and mentor. Microsoft Excel Certified Trainer teaching Tally, Ms. Excel, Advanced Excel, practical MIS Reporting. Enhances skills of young aspirants for industry readiness. </p>



				<div class="student-name-designation">



				   <span class="st-name bold-font">Debajyoti Kundu</span>



				</div>



			 </div>



			 <div class="student-qoute">



				<div class="course-pic relative-position text-center">



				   <div class="circle-img">



					  <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/projata-dey-chatterjee.jpg" alt="projata-dey-chatterjee">



				   </div>



				</div>



				<p><strong>Industry Experience:</strong> 14 yrs exp. in education: English Facilitator, Business Communication Faculty, Mentor, Academic Manager. Sharp skills in identifying potential, teaching, and grooming students for Industry-Readiness. </p>



				<div class="student-name-designation">



				   <span class="st-name bold-font">Projata Dey Chatterjee</span>



				</div>



			 </div>



			 <div class="student-qoute">



				<div class="course-pic relative-position text-center">



				   <div class="circle-img">



					  <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/trainers/md-naved.jpg" alt="md-naved">



				   </div>



				</div>



				<p><strong>Industry Experience:</strong> B. Com (Hons) and Microsoft Certified Trainer with over 14 years of expertise in Software Training like Tally, Excel & Advanced Excel. And also have a loads of Corporate Training Experience. </p>



				<div class="student-name-designation">



				   <span class="st-name bold-font">Md Naved</span>



				</div>



			 </div>



			 <div class="student-qoute">



				<div class="course-pic relative-position text-center">



				   <div class="circle-img">



					  <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/rajat-ghosh.jpg" alt="rajat-ghosh">



				   </div>



				</div>



				<p><strong>Industry Experience:</strong> 25 yrs exp. in Computer Academics. 19 yrs as Sr. Computer Faculty at ICA Edu Skills. Corporate Trainer, Tally Prime, Advanced Excel, MIS expert. Thousands of students succeed in corporate roles. </p>



				<div class="student-name-designation">



				   <span class="st-name bold-font">Rajat Ghosh</span>



				</div>



			 </div>



			 <div class="student-qoute">



				<div class="course-pic relative-position text-center">



				   <div class="circle-img">



					  <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/arith-das.jpg" alt="arith-das">



				   </div>



				</div>



				<p><strong>Industry Experience:</strong> B.Com (H) 1 yr teaching experience. Expertise: Business Computer Apps, Excel, Tally Prime. Equips students for job market success with interactive, hands-on teaching, making them industry-ready. </p>



				<div class="student-name-designation">



				   <span class="st-name bold-font">Arith Das</span>



				</div>



			 </div>		 



		  </div>



	   </div>



	</section>



	<!-- End  of our trainer section



	   ============================================= -->











	<!-- Start of View Classroom



	============================================= -->



	<section id="classroom" class="galleries-section">



		<div class="container">



			<div class="testimonial-slide">



				<div class="section-title mb20 headline text-center">



					<span class="subtitle text-uppercase">gallery</span>



					<h3> GST <span> Classroom </span> Views </h3>



				</div>



				<div class="row">



					<div class="col-md-12">



						<div class="photo-list ul-li">



							<ul>

                     <li>

                        <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/1.jpg" alt="">

                        <div class="blakish-overlay"></div>

                        <div class="pop-up-icon">

                           <a href="https://www.icajobguarantee.com/public/upload/2023-06-12/1.jpg" data-lightbox="roadtrip">

                           <i class="fas fa-search"></i>

                           </a>

                        </div>

                     </li>

                     <li>

                        <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/2.jpg" alt="">

                        <div class="blakish-overlay"></div>

                        <div class="pop-up-icon">

                           <a href="https://www.icajobguarantee.com/public/upload/2023-06-12/2.jpg" data-lightbox="roadtrip">

                           <i class="fas fa-search"></i>

                           </a>

                        </div>

                     </li>

                     <li>

                        <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/3.jpg" alt="">

                        <div class="blakish-overlay"></div>

                        <div class="pop-up-icon">

                           <a href="https://www.icajobguarantee.com/public/upload/2023-06-12/3.jpg" data-lightbox="roadtrip">

                           <i class="fas fa-search"></i>

                           </a>

                        </div>

                     </li>

                     <li>

                        <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/4.jpg" alt="">

                        <div class="blakish-overlay"></div>

                        <div class="pop-up-icon">

                           <a href="https://www.icajobguarantee.com/public/upload/2023-06-12/1.jpg" data-lightbox="roadtrip">

                           <i class="fas fa-search"></i>

                           </a>

                        </div>

                     </li>

                     <li>

                        <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/5.jpg" alt="">

                        <div class="blakish-overlay"></div>

                        <div class="pop-up-icon">

                           <a href="https://www.icajobguarantee.com/public/upload/2023-06-12/2.jpg" data-lightbox="roadtrip">

                           <i class="fas fa-search"></i>

                           </a>

                        </div>

                     </li>

                     <li>

                        <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/6.jpg" alt="">

                        <div class="blakish-overlay"></div>

                        <div class="pop-up-icon">

                           <a href="https://www.icajobguarantee.com/public/upload/2023-06-12/3.jpg" data-lightbox="roadtrip">

                           <i class="fas fa-search"></i>

                           </a>

                        </div>

                     </li>

                  </ul>



						</div>



					</div>



				</div>



			</div>



		</div>



	</section>



	<!-- End  of Classroom View



	============================================= -->







    <style type="">



        .key-highlights { height: auto!important; }



    </style>











	<!-- Start of How Training Works



	============================================= -->



	<section id="training-process" class="galleries-section">



		<div class="container">



			<div class="testimonial-slide">



				<div class="section-title mb20 headline text-center">



					<span class="subtitle text-uppercase">Training Process</span>



					<h3> How <span> GST Training Classes </span> Works? </h3>



				</div>



				<div class="row">



					<div class="col-md-12">



						<div class="row text-center">



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Up-to-Date GST Syllabus </h6>



									<p> Ammended gst course modules to keep you on track with the industry </p>



								</div>



							</div>



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Get Hands on Experience </h6>



									<p> With our real-life project made by industry experts and academia </p>



								</div>



							</div>



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Get Doubts Cleared </h6>



									<p> Our academia & trainers are always here to help you get your doubts solved </p>



								</div>



							</div>



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Test Your Knowledge </h6>



									<p> With our Learnersmall App, you can test your concepts with assignments and quizzes </p>



								</div>



							</div>



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Sit for the Final Exam </h6>



									<p> Your training will be completed once you take the final exam </p>



								</div>



							</div>



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Get Industry Recognized Certification </h6>



									<p> You will be certified in Certified GST Professional by ICA Edu Skills and NSDC.  </p>



								</div>



							</div>



						</div>



					</div>



				</div>



			</div>



		</section>



	<!-- End of How Training Works



	============================================= -->







    <!-- Start  of Certification -->



	<section id="certification" class="sponsor-section">



		<div class="container">



			<div class="section-title mb35 headline text-center">



				<span class="subtitle text-uppercase"> COURSE INFO </span>



				<h3> Training <span> Certification </span></h3>



			</div>



	       <div class="row">



				<div class="col-md-6 mt10 text-center">



					 <h3>About ICA Edu Skills</h3>



					 <p style="text-align: left;">We are ICA Edu Skills, India’s No. 1 Training & Skill development institute specialising in job-oriented courses to make you industry-ready. We insure the careers of the Indian Youth by combining learning with the best-in-class training and placement services at the most affordable fees possible. The courses are jointly certified with National Skill Development Corporation (NSDC).</p>



			    </div>



					



				<div class="col-md-6 mt10 text-center">



                    <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/GST-Certificate.webp">



				</div>



			</div>



		</div>



	</section>	



	<!-- End  of certificate section -->	











	<!-- Start of Testimonials



	============================================= -->



	<!--section id="testimonials" class="testimonial_2_section">



		<div class="container">



			<div class="testimonial-slide">



				<div class="section-title mb20 headline text-center">



					<span class="subtitle text-uppercase">About This Course </span>



					<h3>Student<span> Speaks.</span></h3>



				</div>



				<div  id="testimonial-slide-item" class="testimonial-slide-area">



					@foreach(getTestimonials() as $testimonial)						



					<div class="student-qoute">



						<div class="course-pic relative-position text-center">



							<div class="circle-img">



								<img src="{{ (isset($testimonial->featured_image))?getSizedImage('',$testimonial->featured_image):'https://dummyimage.com/140x140' }}" alt="">	



							</div>					



						</div>



						{!! $testimonial->comment !!}



						<div class="student-name-designation">



							<span class="st-name bold-font">{{ $testimonial->name }}</span>



							<span class="st-designation">{{ $testimonial->dasignation }}</span>



						</div>



						<div class="alumni-placed-at text-center">



							<img src="{{ isset(getRecruterById($testimonial->placed_at)->featured_image)?getSizedImage('',getRecruterById($testimonial->placed_at)->featured_image):'https://dummyimage.com/32' }}" >



						</div>



					</div>



					@endforeach



				</div>



			</div>



		</div>



	</section-->



	<!-- End  of Testimonials



	============================================= -->



	



        <!-- Start of Placament process



	============================================= -->	



	    <section id="courses" class="best-course-section">



           <div class="container">



              <div class="section-title mb35 headline text-center">



                 <span class="subtitle text-uppercase">Five Steps Placement Process</span>					



                 <h3>Connecting Talent with <span>Job Opportunities</span></h3>



              </div>



              <div class="best-course-area mb35">



                 <div class="row">



                    <div class="four-grid-slide text-center">



                       <div class="four-grid-box text-center">



                          <div class="circle-icon">



                              <img src="https://www.icajobguarantee.com/assets/img/icons/education.png">



                          </div>



                          <div class="category-title">



                             <h4>Training Completion</h4>



                          </div>



                          <div class="category-description"></div>



                       </div>



                       <div class="four-grid-box text-center">



                          <div class="circle-icon">



                              <img src="https://www.icajobguarantee.com/assets/img/icons/cv.png">



                          </div>



                          <div class="category-title">



                             <h4>CV Preparation</h4>



                          </div>



                          <div class="category-description"></div>



                       </div>



                       <div class="four-grid-box text-center">



                          <div class="circle-icon">



                              <img src="https://www.icajobguarantee.com/assets/img/icons/job-interview.png">



                          </div>



                          <div class="category-title">



                             <h4>Mock Interviews</h4>



                          </div>



                          <div class="category-description"></div>



                       </div>



                       <div class="four-grid-box text-center">



                          <div class="circle-icon">



                              <img src="https://www.icajobguarantee.com/assets/img/icons/interview.png">



                          </div>



                          <div class="category-title">



                             <h4>Student Interviews</h4>



                          </div>



                          <div class="category-description"></div>



                       </div>



                       <div class="four-grid-box text-center">



                          <div class="circle-icon">



                              <img src="https://www.icajobguarantee.com/assets/img/icons/appointment.png">



                          </div>



                          <div class="category-title">



                             <h4>Appointment Letter</h4>



                          </div>



                          <div class="category-description"></div>



                       </div>



                    </div>



                 </div>



              </div>



            </div>



        </section>



        <!-- End of Placament process



	============================================= -->	







        <!-- End of Placament process



	============================================= -->



        <section id="sponsor" class="sponsor-section">



           <div class="container">



              <div class="row">



                 <div class="col-md-6">



                    <div class="section-title mb35 headline text-center">



                       <span class="subtitle text-uppercase">Student Placement</span>							



                       <h3>Why ICA Leading the <span>Job Market?</span></h3>



                       <!-- <p> With Any Time Job (ATJ) Card, students who enrolled in Job Guaranteed Courses get additional placement support even after they leave the institution. </p> -->						



                    </div>



                    <div class="row">



                       <div class="col-md-12">



                          <div class="">



                              <img src="https://www.icajobguarantee.com/assets/img/atj-front.png">



                          </div>



                       </div>



                    </div>



                 </div>



                 <div class="col-md-6">



                    <div class="section-title mb35 headline text-center">



                       <span class="subtitle text-uppercase">Student Placement</span>							



                       <h3> Among <span> Top Recruiter </span> List </h3>



                    </div>



                    <div class="row" >



                       <div class="col-md-3 col-lg-3 col-6 mt10 mb20" >



                          <div class="placement-grid">



                              <img src="https://www.icajobguarantee.com/public/upload/2023-02-20/vodafone-logo.png" alt="">



                          </div>



                       </div>



                       <div class="col-md-3 col-lg-3 col-6 mt10 mb20" >



                          <div class="placement-grid">



                              <img src="https://www.icajobguarantee.com/public/upload/2023-02-20/pwc-logo.png" alt="">



                          </div>



                       </div>



                       <div class="col-md-3 col-lg-3 col-6 mt10 mb20" >



                          <div class="placement-grid">



                              <img src="https://www.icajobguarantee.com/public/upload/2023-02-20/amazon-logo.png" alt="">



                          </div>



                       </div>



                       <div class="col-md-3 col-lg-3 col-6 mt10 mb20" >



                          <div class="placement-grid">



                              <img src="https://www.icajobguarantee.com/public/upload/2023-02-20/accenture-logo.png" alt="">



                          </div>



                       </div>



                       <div class="col-md-3 col-lg-3 col-6 mt10 mb20" >



                          <div class="placement-grid">



                              <img src="https://www.icajobguarantee.com/public/upload/2023-02-20/capgemini-logo.png" alt="">



                          </div>



                       </div>



                       <div class="col-md-3 col-lg-3 col-6 mt10 mb20" >



                          <div class="placement-grid">



                              <img src="https://www.icajobguarantee.com/public/upload/2023-02-20/itc-logo.png" alt="">



                          </div>



                       </div>



                       <div class="col-md-3 col-lg-3 col-6 mt10 mb20" >



                          <div class="placement-grid">



                              <img src="https://www.icajobguarantee.com/public/upload/2023-02-20/aditya-birla-logo.png" alt="">



                          </div>



                       </div>



                       <div class="col-md-3 col-lg-3 col-6 mt10 mb20" >



                          <div class="placement-grid">



                              <img src="https://www.icajobguarantee.com/public/upload/2023-02-20/bandhan-bank-logo.png" alt="">



                          </div>



                       </div>



                       <div class="col-md-3 col-lg-3 col-6 mt10 mb20" >



                          <div class="placement-grid">



                              <img src="https://www.icajobguarantee.com/public/upload/2023-02-20/tcs-logo.png" alt="">



                          </div>



                       </div>



                    </div>



                 </div>



              </div>



           </div>



        </section>



        <!-- End of Placament process



	============================================= -->



	



	<!-- Start of Faqs



	============================================= -->



	    <section id="faqs" class="teacher-details-area">



			<div class="container">



				<div class="row">



					<div class="col-md-9">



                    	<div class="about-teacher about-faq faq-secound-home-version">



							<div class="section-title-2  headline text-left">



								<h2> Frequently  <span> Asked </span>  Questions </h2>



							</div>							



							<div class="faq-tab mb35">



								<div class="faq-tab-ques  ul-li">



                                    <div id="accordion3" class="panel-group">



										@foreach(getFaqs("Adpage",$contentMain->id) as $key => $value)



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



	



@endsection



@section('script')



<!-- ============================================================== -->



<!-- CHARTS -->



@endsection