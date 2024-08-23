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



    <section id="breadcrumb" class="ad-page-banner relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});" >



		<div class="container">



			<div class="row">



				<div class="col-md-7">



					<div class="ad-banner-content">



						<div class="ad-banner-title">



							<h1 class="text-center">Learn TallyPrime @ 2500/-</h1>



						</div>



						<div class="ad-banner-sub-title">



							<h3 class="text-center" style="font-size: 1.2rem!important;"> Elevate your career with essential Tally skills - boost job opportunities and efficiency. </h3>



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



                                        <li><strong>No. of Lectures:</strong> 24 Lectures</li>



                                        <li><strong>Duration:</strong> 36 Hours</li>



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



                                        <a href="javascript:void(0)" class="text-white" style="cursor: auto;margin: 0 6px;"> (1928 Reviews )</a> <span class="text-white total-enroll" > 2367 students </span>



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



								<h3 class="bold-font" style="font-size: 23px!important;"><span> Become a </span><br /> Certified Tally Professional </h3>



								<p style="color: #222!important;" class="bold-font">Our experts will guide you through the right Tally Training process for a lucrative career ahead of you.</p>



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



									<span class="counter-count bold-font">Live</span>



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



							<h3> Tally Course <span>  Highlights </span></h3>



						</div>



						<div class="row text-center">



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



									<h6> Competition On TallyPrime </h6>



								</div>



							</div>

							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> NSDC Certification </h6>



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



					<h3> TallyPrime <span> Training </span> Syllabus </h3>



				</div>



				<div class="row">



					<div class="col-md-12">



						<div class="row text-center">



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 1 <br /> Company Creation </h6>



									<p> Understand the process and significance of establishing a new company </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 2 <br /> Cost Centre & Cost Category </h6>



									<p> Grasp expense categorization techniques for effective financial analysis </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 3 <br /> Accounting </h6>



									<p> Gain foundational knowledge of double-entry bookkeeping and financial statements </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 4 <br /> Inventory </h6>



									<p> Learn inventory management methods and accurate record-keeping </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 5 <br /> Bill of Materials (BOM) </h6>



									<p> Understand product assembly structures and component relationships </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 6 <br /> Purchase & Sales Cycle </h6>



									<p> Explore end-to-end trade processes and associated documentation </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 7 <br /> Basic Concepts of GST </h6>



									<p> Acquire fundamental understanding of Goods and Services Tax </p>



								</div>



							</div>



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 8 <br /> GST using TallyPrime </h6>



									<p> Manage GST tasks through TallyPrime software </p>



								</div>



							</div>



							



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 9 <br /> Generation of Returns </h6>



									<p> Learn to generate and file various tax returns </p>



								</div>



							</div>							



							



							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 10 <br /> TDS </h6>



									<p> Familiarize with Tax Deducted at Source, its calculation, and roles </p>



								</div>



							</div>							







							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 11 <br /> PF </h6>



									<p> Manage GST tasks through TallyPrime software </p>



								</div>



							</div>							







							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 12 <br /> Backup and Restore </h6>



									<p> Grasp data backup's importance and restoration procedures </p>



								</div>



							</div>							







							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 13 <br /> ESI </h6>



									<p> Learn about Employee State Insurance, contributions, and employee welfare </p>



								</div>



							</div>							







							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 14 <br /> Payroll </h6>



									<p> Comprehend salary calculations, deductions, and payroll management </p>



								</div>



							</div>							







							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 15 <br /> Security </h6>



									<p> Explore data protection, access control, and security best practices </p>



								</div>



							</div>							







							<div class="col-md-3 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Lecture 16 <br /> Reports </h6>



									<p> Understand the generation and utilization of financial and management reports </p>



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







	<!-- /course-categori -->



	<!-- End of best course



	============================================= -->



	



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



					  <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/md-naved.jpg" alt="md-naved">



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



					<h3> Tally <span> Classroom </span> Views </h3>



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



					<h3> How <span> Tally Training Classes </span> Works? </h3>



				</div>



				<div class="row">



					<div class="col-md-12">



						<div class="row text-center">



							<div class="col-md-4 col-6"> 



								<div class="key-highlights" >



									<img src="{{ url('assets/img/icons/tick.png')}}" >



									<h6> Up-to-Date Tally Syllabus </h6>



									<p> Ammended Tally course modules to keep you on track with the industry </p>



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



									<p> You will be certified in Certified Tally Professional by ICA Edu Skills and NSDC.  </p>



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



				<h3> Tally <span> Training </span> Certification </h3>



			</div>



	       <div class="row">



				<div class="col-md-6 mt10 text-center">



					 <h3>About ICA Edu Skills</h3>



					 <p style="text-align: left;">We are ICA Edu Skills, India’s No. 1 Training & Skill development institute specialising in job-oriented courses to make you industry-ready. We insure the careers of the Indian Youth by combining learning with the best-in-class training and placement services at the most affordable fees possible. The courses are jointly certified with National Skill Development Corporation (NSDC).</p>



			    </div>



					



				<div class="col-md-6 mt10 text-center">



                    <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/TallyPrime-Certificate.webp">



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



					<span class="subtitle text-uppercase">About This Course</span>



					<h3> Student <span> Speaks </span></h3>



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



							<img src="{{ (getRecruterById($testimonial->placed_at)->featured_image)?getSizedImage('',getRecruterById($testimonial->placed_at)->featured_image):'https://dummyimage.com/32' }}" >



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



	    



        <!-- End of Placament process



	============================================= -->	







        <!-- End of Placament process



	============================================= -->



      



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