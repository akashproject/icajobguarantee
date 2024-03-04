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

                        <li><a href="tel:+919330904617"><i class="fas fa-phone-square"></i> +91-9330904617</a></li>

                        <li><a href="https://wa.me/9330904617?text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20the%20stock%20market%20course.%20Please%20guide%20me."><i class='fas fa-comment-alt'></i> Chat With Us</a></li>

                     </ul>

                  </div>

               </div>

            </div>

         </div>

      </div>

      <div class="main-menu">

         <div class="container">

            <div class="navbar-default">

               <div class="navbar-header float-left" style="left: 20px!important;">

                  <a class="navbar-brand text-uppercase" href="javascript:void(0)"><img src="{{ url('assets/img/nsc-logo.png') }}" alt="NSE Academy Logo" style="width: 111px; height: 51px;">&nbsp;&nbsp;<img src="{{ url('assets/img/logo/ICA-NISM-Logo.png') }}" alt="ICA Edu Skills Logo" style="width: 130px; height: 51px;"></a>								

               </div>

               <!-- /.navbar-header -->

               <nav class="navbar-menu float-right">

                  <div class="nav-menu ul-li">

                     <ul>

                        <li class="">

                           <a href="#enquiryform">Demo Class</a>

                        </li>

                        <li class="">

                           <a href="#course-details">Courses</a>

                        </li>

                        <li class="">

                           <a href="#trainers">Trainers</a>

                        </li>

						<li class="">

                           <a href="#placements">Placements</a>

                        </li>

                        <li class="">  

							<a href="#career">Career</a>

                        </li>

                        <li class="">

                           <a href="#recruiters">Recruiters</a>

                        </li>

                        <li class="">

                           <a href="#faqs">Faqs</a>

                        </li>

                     </ul>

                  </div>

               </nav>

               <div class="mobile-menu">

                  <div class="logo"><a href="javascript:void(0)"><img src="{{ url('assets/img/nsc-logo.png') }}" alt="Logo"></a></div>

                  <nav>

                     <ul>

                        <li class="">

                           <a href="#enquiryform">Demo Class</a>

                        </li>                         

                        <li class="">

                           <a href="#course-details">Courses</a>

                        </li>

                        <li class="">

                           <a href="#alumni">Trainers</a>

                        </li>

						<li class="">

                           <a href="#placements">Placements</a>

                        </li>						

                        <li class="">

                           <a href="#career">Career</a>

                        </li>

                        <li class="">

                           <a href="#recruiters">Recruiters</a>

                        </li>

                        <li class="">

                           <a href="#faqs">Faqs</a>

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

<section id="enquiryform" class="ad-page-banner banner-black-shadow relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});" >

   <div class="container">

      <div class="row">

         <div class="col-md-7">

            <div class="ad-banner-content" style="color: #071e62!important; background: #e9e9e9!important;">

               <div class="ad-banner-title">

                  <h1 class="text-center">Financial Market Courses</h1>

               </div>

               <div class="ad-banner-sub-title">

                  <h2 class="text-center">Equity • Fundamental Analysis • Technical Analysis • Derivatives • Bonds • Mutual Funds</h2>

               </div>

               <div class="ad-banner-description" style="overflow-x:auto;">

                  <table class="table">

					<tr>

						<th><span style="border-bottom:5px solid #071e62!important;">Your Objective</span></th>

						<th><span style="border-bottom:5px solid #071e62!important;">We Offer</span></th>

					</tr>	

					<tr>

						<td><strong>Earn regular money</strong></td>

						<td><strong>Stock Trading Training<br />Option Trading Training</strong></td>

					</tr>						

					<tr>

						<td><strong>Build long-term wealth</strong></td>

						<td><strong>Stock Investment Training<br />Mutual Fund Training<br />Bond Market Training</strong></td>

					</tr>	

					<tr>

						<td><strong>Make a career in finance</strong></td>

						<td><strong>NCCMP & NISM Preparation<br />Financial Planning Training</strong></td>

					</tr>					

				  </table>

               </div>

            </div>

         </div>

         <div class="col-md-5">

            <div class="highlighted-content-wrapper text-center">

               <div class="ad_banner_form_wrapeer" style="background: #e9e9e9!important;">

                  <div class="register-fomr-title text-center">

                     <h3 class="bold-font" style="color: #071e62!important;"><span>Upcoming</span> Class Schedule</h3>

                  </div>

                  <div class="row batch-schedule">

                     <div class="col-6 text-center" style="border-left:2px dashed #fff;">

                        <h5 style="color: #071e62; font-weight: 700; font-size: 16px!important;">Weekend Batch</h5>

                        <h6 style="color: #071e62; font-weight: 700; font-size: 14px!important">16<sup>th</sup> Dec, 2023</h6>

                        <p style="color: #071e62; font-size: 14px;">Sat | Sun</p>

                     </div>                  

                     <div class="col-6 text-center" style="border-right:2px dashed #fff;">

                        <h5 style="color: #071e62; font-weight: 700; font-size: 16px!important;">Weekly Batch</h5>

                        <h6 style="color: #071e62; font-weight: 700; font-size: 14px!important">18<sup>th</sup> Dec, 2023</h6>

                        <p style="color: #071e62; font-size: 14px;">Mon | Wed | Fri</p>

                     </div>

                  </div>

                  <div class="register-form-area text-left" >

                     <form id="banner_lead_capture_form" class="lead_form" action="{{ url('capture-lead') }}" method="POST" enctype="multipart/form-data">

                        <div class="form_process" >

                           <div class="lead_steps step1 active" >

                              @include('common.leadCaptureFormField')

                              <div class="form-group disclaimer text-left">

                                 <p style="margin:0">

                                    <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  <span style="color: #071e62!important;">I agree to receive updates on <i class="fa fa-whatsapp" style="color: green;"></i> whatsapp.</span> 

                                 </p>

                                 <p>

                                    <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> <span style="color: #071e62!important;">I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS.</span>

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

<!-- Start of Top Bands

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

                     <span class="counter-count bold-font">4</span>

                     <p>Certifications</p>

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

                     <span class="counter-count bold-font">Classes</span>

                     <p>Offline | Online</p>

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

                     <span class="counter-count bold-font">Interactive</span>

                     <p>Expert Sessions</p>

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

                     <span class="counter-count bold-font">Campus</span>

                     <p>Interviews</p>

                  </div>

               </div>

            </div>

            <!-- /counter -->

         </div>

      </div>

   </div>

</section>

<!-- End of Top Bands

   ============================================= -->

<section id="course-details" class="best-course-section">

   <div class="container">

      <div class="section-title mb45 headline text-center">

         <span class="subtitle text-uppercase">Campusing</span>

         <h3>Campus  <span> Interview Event</span></h3>

         <header class="section-header" style="padding-bottom: 0!important;">

            <p style="font-size: 18px; font-weight: normal;"> Employer: <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/images.png"> </p>

         </header>

      </div>

      <div class="row">

         <div class="col-md-6 text-center">

            <h5 style="color: #362d86;font-weight: 600;"> Placement Talk Session </h5>

            <div >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/1.jpg">

            </div>

         </div>

         <div class="col-md-6 text-center">

            <h5 style="color: #362d86;font-weight: 600;"> Interview Session </h5>

            <div style="width: 56%;margin: 20px auto;">

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/i1.jpg">

            </div>

            <div style="width: 56%;margin: 20px auto;">

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/i3.jpg">

            </div>

         </div>

      </div>

   </div>

</section>



<!-- Start of placement section

   ============================================= -->

@if(count(getJoinees('',2)) > 0)

<section id="placements" class="testimonial_2_section">

   <div class="container">

      <!--div class="testimonial-slide"-->

      <div class="section-title mb20 headline text-center">

         <span class="subtitle text-uppercase"> Student Placement </span>

         <h3>Connecting Talent with <span>Job Opportunities</span></h3>

      </div>

      <div  id="placement-slide-item" class="placement-slide-area">

         @foreach(getJoinees('',2) as $value)						

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

   

<!-- Start of Courses Listings

============================================= -->   

<section id="course-details" class="best-course-section">

   <div class="container">

      <div class="section-title mb45 headline text-center">

         <span class="subtitle text-uppercase">Training Section</span>

         <h3>Explore the <span> Financial Market Courses</span></h3>

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

                              <div class="blakish-overlay"></div>

                           </div>

                           <div class="best-course-text">

                              <div class="course-title mb20 headline relative-position height-60">

                                 <h3>{{ $course->name }}

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

                                 <a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn('',11)"><i class="fas fa-download"></i> Brochure</a>

                              </div>

                              <div class="course-type-list">														

                                 <a class="btn-outline course-detail-tab-btn" data-id="course-view-6" href="#detail-course" >View More <i class="fas fa-caret-right"></i></a>

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

                                                      <span>{{ $carriculam->duration }} </span>

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

                        <a onclick="lead_capture_form_btn({{ $course->type_id }},'')" href="javascript:void(0)"> Book A Demo Class</a>

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

<!-- End of courses section -->



<!-- Start of our trainer section

   ============================================= -->

<section id="trainers" class="testimonial_2_section">

   <div class="container">

   <div class="testimonial-slide">

      <div class="section-title mb20 headline text-center">

         <span class="subtitle text-uppercase">Our Trainers</span>

         <h3>Learn from <span> Market Experts </span></h3>

      </div>

      <div  id="testimonial-slide-item" class="testimonial-slide-area">

         <div class="student-qoute">

            <div class="course-pic relative-position text-center">

               <div class="circle-img">

                  <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/trainer-2.png" alt="Anish Gandhi">	

               </div>

            </div>

            <p><strong>Industry Experience:</strong> Capital Markets educator having 23 years of experience in stock broking and trading. Worked in Depository Services of HDFC Bank Limited and as Vice President in Corporate Banking of RBL Bank.</p>

            <div class="student-name-designation">

               <span class="st-name bold-font">Mr. Anish Gandhi</span>

               <!--span class="st-designation">Multinational Travel Agency in Kenya</span-->

            </div>

         </div>

         <div class="student-qoute">

            <div class="course-pic relative-position text-center">

               <div class="circle-img">

                  <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/trainer-1.png" alt="">	

               </div>

            </div>

            <p><strong>Industry Experience:</strong> With over 20 years of domain expertise across different sectors. Worked in Equity research & Advisory with Training & Education, in Sharekhan Ltd, Angel Broking, IIFL & Motilal Oswal Ltd.</p>

            <div class="student-name-designation">

               <span class="st-name bold-font">Mr. Ravi Honda</span>

               <!--span class="st-designation">Placed at PWC</span-->

            </div>

         </div>

         <div class="student-qoute">

            <div class="course-pic relative-position text-center">

               <div class="circle-img">

                  <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/trainer-3.png" alt="Snehasish Bhattacharjee">	

               </div>

            </div>

            <p><strong>Industry Experience:</strong> Having 14 years of experience in academics and stock broking firms. MBA PGDM MCOM & CFA, CWM. NISM & NSE-NCFM Certified professional and financial market educator.</p>

            <div class="student-name-designation">

               <span class="st-name bold-font">Snehasish Bhattacharjee</span>

               <!--span class="st-designation">Accountant Manager</span-->

            </div>

         </div>

      </div>

   </div>

</section>

<!-- End  of our trainer section

   ============================================= -->

   

<!-- Start of classroom views section

   ============================================= -->

<section id="galleries" class="galleries-section">

   <div class="container">

      <div class="testimonial-slide">

         <div class="section-title mb20 headline text-center">

            <span class="subtitle text-uppercase">galleries</span>

            <h3>Classroom<span> Views</span></h3>

         </div>

         <div class="row">

            <div class="col-md-12">

               <div class="photo-list ul-li">

                  <!--ul>

                     @foreach(getGallery() as $key => $gallery)

                     

                     

                     

                     	<li>

                     

                     

                     

                     		<img src="{{ getSizedImage('',$gallery->image_id) }}" alt="">

                     

                     

                     

                     		<div class="blakish-overlay"></div>

                     

                     

                     

                     		<div class="pop-up-icon">

                     

                     

                     

                     			<a href="{{ getSizedImage('',$gallery->image_id) }}" data-lightbox="roadtrip">

                     

                     

                     

                     				<i class="fas fa-search"></i>

                     

                     

                     

                     			</a>

                     

                     

                     

                     		</div>

                     

                     

                     

                     	</li>

                     

                     

                     

                     @endforeach

                     

                     

                     

                     </ul-->

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

<!-- End  of classroom views section

   ============================================= -->

<!-- Hightlists section

   ============================================= -->

<section id="career" class="highlights-section">

   <div class="container">

      <div class="row">

         <div class="col-md-5 mb20 text-center">

            <img src="{{ url('assets/img/ICA-Stock-market.jpg') }}" style="border-radius: 20px;">

         </div>

         <div class="col-md-7 mt10">

            <div class="section-title mb20 headline text-center">

               <span class="subtitle text-uppercase">Key Highlights </span>

               <h3>Career Opportunities <span>(100% Placement Assistance *)</span></h3>

            </div>

            <div class="row text-center">

               <div class="col-md-4 col-6">

                  <div class="key-highlights" >

                     <img src="{{ url('assets/img/icons/Dealer-Equity-Derivatives.png') }}" >

                     <h6> Dealer - Equity or Derivatives </h6>

                  </div>

               </div>

               <div class="col-md-4 col-6">

                  <div class="key-highlights" >

                     <img src="{{ url('assets/img/icons/Relationship-Manager-Executive.png') }}" >

                     <h6> Relationship Manager or Executive </h6>

                  </div>

               </div>

               <div class="col-md-4 col-6">

                  <div class="key-highlights" >

                     <img src="{{ url('assets/img/icons/Financial-Advisor-or-Planner.png') }}" >

                     <h6> Financial Advisor or Planner </h6>

                  </div>

               </div>

               <div class="col-md-4 col-6">

                  <div class="key-highlights" >

                     <img src="{{ url('assets/img/icons/Mutual-Fund-Specialist.png') }}" >

                     <h6> Mutual Fund Specialist </h6>

                  </div>

               </div>

               <div class="col-md-4 col-6">

                  <div class="key-highlights" >

                     <img src="{{ url('assets/img/icons/Business-Development-Executive.png') }}" >

                     <h6> Business Development Executive </h6>

                  </div>

               </div>

               <div class="col-md-4 col-6">

                  <div class="key-highlights" >

                     <img src="{{ url('assets/img/icons/Client-Acquisition-Executive.png') }}" >

                     <h6> Client Acquisition Executive </h6>

                  </div>

               </div>

               <div class="col-md-4 col-6">

                  <div class="key-highlights" >

                     <img src="{{ url('assets/img/icons/Retail-Investor.png') }}" >

                     <h6> Retail Investor </h6>

                  </div>

               </div>

               <div class="col-md-4 col-6">

                  <div class="key-highlights" >

                     <img src="{{ url('assets/img/icons/Retail-Trader.png') }}" >

                     <h6> Retail Trader </h6>

                  </div>

               </div>

               <div class="col-md-4 col-6">

                  <div class="key-highlights" >

                     <img src="{{ url('assets/img/icons/Sub-Broker.png') }}" >

                     <h6> Sub-Broker </h6>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

</section>

<!-- End Hightlists section

   ============================================= -->

<style type="text/css">

   .placement-grid {

   border: 0!important;

   padding: 0!important;

   box-shadow: 0 0px 0px 0 rgb(46 61 73 / 20%);

   }

</style>

<!-- Start our Recruiters section

   ============================================= -->

<section id="recruiters" class="sponsor-section">

   <div class="container">

      <div class="section-title mb35 headline text-center">

         <span class="subtitle text-uppercase">Our Recruiters</span>

         <h3>Our Alumni <span>Works At</span></h3>

      </div>

      <div class="row" >

         <!--@foreach(getRecruiters() as $value)

            <div class="col-md-2 col-lg-2 col-6" >

            

            

            

            	<div class="placement-grid" >

            

            

            

            		<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'https://dummyimage.com/140x140' }}" alt="">		

            

            

            

            	</div>

            

            

            

            </div>

            

            

            

            @endforeach -->

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Anandrathi.png" alt="">		

            </div>

         </div>

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Angel-One.png" alt="">		

            </div>

         </div>

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Axis-Direct.png" alt="">		

            </div>

         </div>

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Edelweiss.png" alt="">		

            </div>

         </div>

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/ICICI-Securities.png" alt="">		

            </div>

         </div>

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/IIFL.png" alt="">		

            </div>

         </div>

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Indiabulls.png" alt="">		

            </div>

         </div>

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Kotak-Mahindra-Bank.png" alt="">		

            </div>

         </div>

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Motilal-Oswal.png" alt="">		

            </div>

         </div>

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Religare.png" alt="">		

            </div>

         </div>

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/Sharekhan.png" alt="">		

            </div>

         </div>

         <div class="col-md-2 col-lg-2 col-6" >

            <div class="placement-grid" >

               <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/UTI-Mutual-Fund.png" alt="">		

            </div>

         </div>

      </div>

   </div>

</section>

<!-- End our Recruiters section

   ============================================= -->

<!-- Start of testimonial secound section

   ============================================= -->

<!--section id="certificates" class="certification-section">

   <div class="container">

   

   

   

   	<div class="certificate-slide">

   

   

   

   		<div class="section-title mb20 headline text-center">

   

   

   

   			<span class="subtitle text-uppercase">Certification</span>

   

   

   

   			<h3>Power of <span>4 Certificates</span></h3>

   

   

   

   		</div>

   

   

   

   		<div id="certificate-slide-item" class="certificate-slide-area">

   

   

   

   			<div class="certificate-list row">

   

   

   

   				<div class="col-md-8">

   

   

   

   				    <div class="section-title-2 mb65 headline text-left">

   

   

   

   						<h2>NSE Academy<span> Certification</span></h2>

   

   

   

   					</div>

   

   

   

   					<p>NSE Academy Certified Capital Market Professional Certification by NSE Academy signifies a strong understanding of market operations, regulations, and investment strategies. Holding this certification opens up opportunities in investment banking, asset management, securities trading, and financial research.</p>

   

   

   

   			        <p>Employers appreciate candidates with the NCCMP certificate for their commitment to professional development and ability to navigate complex financial landscapes. Obtaining the NCCMP certificate can enhance your career prospects and contribute to your professional growth.</p>

   

   

   

   				</div>

   

   

   

   				<div class="col-md-4" >

   

   

   

   					<img src="{{getSizedImage('',63)}}" >

   

   

   

   					<div class="course-side-bar-widget">

   

   

   

   						<div class="genius-btn gradient-bg text-center text-uppercase float-left bold-font">

   

   

   

   							<a href="#enquiryform"> Get Started Today <i class="fas fa-angle-double-right"></i></a>

   

   

   

   						</div>

   

   

   

   					</div>

   

   

   

   				</div>

   

   

   

   			</div>

   

   

   

   			<div class="certificate-list row">

   

   

   

   				<div class="col-md-8">

   

   

   

   					<div class="section-title-2 mb65 headline text-left">

   

   

   

   						<h2>NISM<span> Certification</span></h2>

   

   

   

   					</div>

   

   

   

   					<p>NISM VIII and NISM VA Certifications by National Institute of Securities Markets. NISM VIII focuses on equity derivatives, providing knowledge of derivative products and their applications. On the other hand, NISM VA focuses on mutual funds, covering topics like fund management, operations, and regulations.</p>

   

   

   

   					<p>Employers value candidates with NISM VIII and NISM VA certificates for their specialized knowledge and understanding of these financial domains, making these certifications valuable assets for career advancement in the industry.</p>

   

   

   

   				</div>

   

   

   

   				<div class="col-md-4" >

   

   

   

   					<img src="{{getSizedImage('',62)}}" >

   

   

   

   					<div class="course-side-bar-widget">

   

   

   

   						<div class="genius-btn gradient-bg text-center text-uppercase float-left bold-font">

   

   

   

   							<a href="#enquiryform"> Get Started Today <i class="fas fa-angle-double-right"></i></a>

   

   

   

   						</div>

   

   

   

   					</div>

   

   

   

   				</div>

   

   

   

   			</div>	

   

   

   

   		</div>

   

   

   

   	</div>

   

   

   

   </div>

   

   

   

   </section-->

<!-- End  of testimonial secound section

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

@endsection

@section('script')

<!-- ============================================================== -->

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection