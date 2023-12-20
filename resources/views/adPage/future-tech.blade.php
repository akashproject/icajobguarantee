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
               </div>
               <!-- /.navbar-header -->						
               <!-- Collect the nav links, forms, and other content for toggling -->
               <nav class="navbar-menu float-right">
                  <div class="nav-menu ul-li">
                     <ul>
                        <li class="">
                           <a href="#features">Features</a>
                        </li>
                        <li class="">
                           <a href="#tools">Tools</a>
                        </li>
                        <li class="">
                           <a href="#courses">Courses</a>
                        </li>
                        <li class="">
                           <a href="#classroom">Classroom</a>
                        </li>
                        <li class="">
                           <a href="#projects">Projects</a>
                        </li>
                        <li class="">
                           <a href="#certification">Certification</a>
                        </li>
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
                           <a href="#features">Features</a>
                        </li>
                        <li class="">
                           <a href="#tools">Tools</a>
                        </li>
                        <li class="">
                           <a href="#courses">Courses</a>
                        </li>
                        <li class="">
                           <a href="#classroom">Classroom</a>
                        </li>
                        <li class="">
                           <a href="#projects">Projects</a>
                        </li>
                        <li class="">
                           <a href="#certification">Certification</a>
                        </li>
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
<!-- Start of Header section -->
<section id="breadcrumb" class="ad-page-banner relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});" >
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <div class="ad-banner-content text-white">
               <div class="ad-banner-title">
                  <h1 class="text-center" style="font-size: 32px!important; font-weight: 700!important;"> Post Graduate Diploma in Artificial Intelligence & Machine Learning </h1>
               </div>
               <div class="ad-banner-sub-title">
                  <h2 class="text-center"> Certified by IOK UK </h2>
               </div>
               <div class="ad-banner-sub-title">
                  <p class="text-center text-white"> Be a part of future of technology with 100% Job-Ready Courses <sup>*</sup></p>
               </div>
				<div class="ad-banner-option">
					<div class="row">
		                <div class="col-md-6">
                            <ul>
                                <li><strong>Eligibility:</strong> 12+/Graduate</li>
                                <li><strong>Course Type:</strong> Short Term Course</li>
                                <li><strong>Language:</strong> English/Hindi</li>
                                
                            </ul>    
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><strong>Difficulty Level:</strong> Beginner</li>
                                <li><strong>Delivery Mode:</strong> Classroom/Online</li>
                                <li><strong>Classroom</strong> Bengaluru, Hyderabad, Kolkata</li>
							</ul>
                        </div>     
					</div> 
				</div>		   
            </div>
         </div>
         <div id="apply" class="col-md-5">
            <div class="highlighted-content-wrapper text-center">
               <div class="ad_banner_form_wrapeer" >
                  <div class="register-fomr-title text-center">
                     <h3 class="bold-font text-white">Start Your<br />Data Science Journey Today!</h3>
                     <p>Our experts will guide you through the right training process for a lucrative career ahead of you.</p>
                  </div>
                  <div class="register-form-area text-left" >
                     <form id="banner_lead_capture_form" class="lead_form" action="{{ url('capture-lead') }}" method="POST" enctype="multipart/form-data">
                        <div class="form_process" >
                           <div class="lead_steps step1 active" >
                              @include('common.leadCaptureFormField')
                              <div class="form-group disclaimer text-left text-white">
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
<!-- End of Header section -->
<!-- Start of USP Band section -->
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
                     <span class="counter-count bold-font">3</span><span></span>
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
                     <span class="counter-count bold-font">6</span><span>+</span>
                     <p>Industry Projects</p>
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
                     <span class="counter-count bold-font">100%</span>
                     <p>Job Assurance</p>
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
                     <span class="counter-count bold-font">No Cost</span>
                     <p>EMI Option</p>
                  </div>
               </div>
            </div>
            <!-- /counter -->
         </div>
      </div>
   </div>
</section>
<!-- End of USP Band section -->
<style type="text/css">
   .key-highlights { height: auto!important; }
</style>
<!-- Star of Key Features section -->
<section id="features" class="highlights-section">
   <div class="container">
      <div class="section-title mb20 headline text-center">
         <span class="subtitle text-uppercase"> COURSE INFO </span>
         <h3> Key <span> Features </span></h3>
      </div>
      <div class="row">
         <div class="col-md-4 mt10 text-center">
            <img src="{{url('assets/img/left-image.png')}}" class="border-10px-radius">
         </div>
         <div class="col-md-8 mt10">
            <div class="row text-center">
               <div class="col-md-6 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/tick.png')}}" >
                     <h6> Hands-on Experience </h6>
                     <p>99% Practical Training to focus on real life projects on healthcare, financial services, retail, social media and many more to cover tools such as Python, Keras, Tensorflow.</p>
                  </div>
               </div>
               <div class="col-md-6 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/tick.png')}}" >
                     <h6> Course Certification </h6>
                     <p>The courses at ICA Edu Skills are cetified by NSDC under Ministry of Skill Development And Entrepreneurship, Govt. of India. Also certified by Institute of Analytics (IOA), UK</p>
                  </div>
               </div>
               <div class="col-md-6 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/tick.png')}}" >
                     <h6> Industry Expert Faculty </h6>
                     <p>At ICA, all faculty members are data science experts, working with corporates like JP Morgan, Nomura, Genpact, Accenture, Citibank and Barclays etc.</p>
                  </div>
               </div>
               <div class="col-md-6 col-6">
                  <div class="key-highlights" >
                     <img src="{{ url('assets/img/icons/tick.png')}}" >
                     <h6> Comprehensive Learning </h6>
                     <p>Program covering artificial intelligence and machine learning concept such as Python, R, SQL, Tableau and PowerBI in depth.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Star of Key Features section -->
<!-- Start of tools section -->
<section id="tools" class="sponsor-section">
   <div class="container">
      <div class="section-title mb35 headline text-center">
         <span class="subtitle text-uppercase"> COURSE INFO </span>
         <h3> Tools <span> you will learn </span></h3>
      </div>
      <div class="row">
         <div class="col-md-2 col-lg-2 col-6 mt10 mb20" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/excel.png" width="100%" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6 mt10 mb20" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/r.png" width="100%" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6 mt10 mb20" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/python.png" width="100%" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6 mt10 mb20" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/powerbi.png" width="100%" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6 mt10 mb20" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/tableau.png" width="100%" alt="">		
            </div>
         </div>
         <div class="col-md-2 col-lg-2 col-6 mt10 mb20" >
            <div class="placement-grid" >
               <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/sql.png" width="100%" alt="">		
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 text-center">
               <div class="genius-btn gradient-bg text-center text-uppercase bold-font">
                  <a href="#apply"> <i class="fas fa-download"></i> Apply Now </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
<!-- End of tools section -->
<style type="text/css">
   th, td { border: 1px solid #393185!important; }
   th { background: #393185!important; color: #fff!important; }
</style>
<!-- Start of explore courses section -->
<section id="courses" class="best-course-section">
   <div class="container">
      <div class="section-title mb45 headline text-center">
         <span class="subtitle text-uppercase"> EXPLORE COURSES </span>
         <h3> Browse Our <span> Best Courses </span></h3>
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
<!-- Start of classroom views section
   ============================================= -->
<section id="classroom" class="galleries-section">
   <div class="container">
      <div class="testimonial-slide">
         <div class="section-title mb20 headline text-center">
            <span class="subtitle text-uppercase"> GALLERY </span>
            <h3> Classroom <span> Views </span></h3>
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
                           <a href="https://www.icajobguarantee.com/public/upload/2023-06-12/4.jpg" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/5.jpg" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2023-06-12/5.jpg" data-lightbox="roadtrip">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </li>
                     <li>
                        <img src="https://www.icajobguarantee.com/public/upload/2023-06-12/6.jpg" alt="">
                        <div class="blakish-overlay"></div>
                        <div class="pop-up-icon">
                           <a href="https://www.icajobguarantee.com/public/upload/2023-06-12/6.jpg" data-lightbox="roadtrip">
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
<!-- Start of Projects section
   ============================================= -->
<section id="projects" class="galleries-section">
   <div class="container">
      <div class="testimonial-slide">
         <div class="section-title mb20 headline text-center">
            <span class="subtitle text-uppercase"> Live Training </span>
            <h3> Industry <span> Projects </span></h3>
         </div>
         <div class="row">
            <div class="col-md-12 mt10">
               <div class="row text-center">
                  <div class="col-md-3 col-6">
                     <div class="key-highlights" >
                        <img src="{{ url('assets/img/icons/tick.png')}}" >
                        <h6> Recommendation Engine </h6>
                        <p>You will work on Recommendation Engine using machine learning techniques for personalized suggestions based on user preferences and item characteristics. The project explored collaborative and content-based filtering, offering practical insights into real-world applications.</p>
                     </div>
                  </div>
                  <div class="col-md-3 col-6">
                     <div class="key-highlights" >
                        <img src="{{ url('assets/img/icons/tick.png')}}" >
                        <h6> Chat Bot </h6>
                        <p>You can create a Chat Bot project using Natural Language Processing and Machine Learning. It understood user queries, delivered relevant responses, and provided practical insights into virtual assistants for diverse applications.</p>
                     </div>
                  </div>
                  <div class="col-md-3 col-6">
                     <div class="key-highlights" >
                        <img src="{{ url('assets/img/icons/tick.png')}}" >
                        <h6> Marketing Analytics </h6>
                        <p>Students can work on creating a Marketing Analytics project, using data mining and machine learning to enhance marketing strategies. It involved customer segmentation, behavior analysis, and predictive modeling for data-driven business growth.</p>
                     </div>
                  </div>
                  <div class="col-md-3 col-6">
                     <div class="key-highlights" >
                        <img src="{{ url('assets/img/icons/tick.png')}}" >
                        <h6> Retail Analytics </h6>
                        <p>You will work on a Retail Analytics project, analyzing data to optimize inventory, forecast sales, and understand customer behavior. Machine learning helped make data-driven decisions for improved efficiency and customer satisfaction in the retail industry.</p>
                     </div>
                  </div>
               </div>
               <div class="row text-center">
                  <div class="col-md-3 col-6">
                     <div class="key-highlights" >
                        <img src="{{ url('assets/img/icons/tick.png')}}" >
                        <h6> Finance Analytics </h6>
                        <p>You can explore Finance Analytics, analyzing market trends, risk, and portfolio optimization using statistical and machine learning techniques. You can develop skills for data-driven decision-making in the financial industry, aiding businesses and investors for success.</p>
                     </div>
                  </div>
                  <div class="col-md-3 col-6">
                     <div class="key-highlights" >
                        <img src="{{ url('assets/img/icons/tick.png')}}" >
                        <h6> HR Analytics </h6>
                        <p>Students can explore HR Analytics, analyze employee performance, attrition, and demographics using statistical methods and machine learning. You will gain valuable skills for data-driven decision-making in talent acquisition, retention, and workforce planning.</p>
                     </div>
                  </div>
                  <div class="col-md-3 col-6">
                     <div class="key-highlights" >
                        <img src="{{ url('assets/img/icons/tick.png')}}" >
                        <h6> Health Care Analytics </h6>
                        <p>You will work on a Health Care Analytics project, analyzing medical data with statistics and machine learning. You aim to improve patient outcomes and healthcare efficiency through data-driven insights and clinical decision-making.</p>
                     </div>
                  </div>
                  <div class="col-md-3 col-6">
                     <div class="key-highlights" >
                        <img src="{{ url('assets/img/icons/tick.png')}}" >
                        <h6> Sports Analytics </h6>
                        <p>You can work on a Sports Analytics project, analyzing player performance and team dynamics using statistics and machine learning. You gain insights to aid coaches and optimize training for a competitive advantage in sports.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End  of Projects section -->

<!-- Start  of certificate section -->
<section id="certification" class="sponsor-section">
   <div class="container">
      <div class="section-title mb35 headline text-center">
         <span class="subtitle text-uppercase"> COURSE INFO </span>
         <h3> Dat Science <span> Training </span> Certification </h3>
         <p style="text-align: left;">We are ICA Edu Skills, India’s No. 1 Training & Skill development institute specialising in job-oriented courses to make you industry-ready. We insure the careers of the Indian Youth by combining learning with the best-in-class training and placement services at the most affordable fees possible. The courses are jointly certified with National Skill Development Corporation (NSDC). Also certified by Institute of Analytics (IOA), UK</p>
      </div>
      <div class="row">
         <div class="col-md-6 mt10 text-center">
            <div class="certificate">
               <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/CIA-Plus-Certificate.webp" />
            </div>
            </div>
         <div class="col-md-6 mt10 text-center">
            <div class="certificate">
                  <img src="https://www.icajobguarantee.com/public/upload/2023-08-23/IOA-Certificate.webp" />
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End  of certificate section -->

<!-- End  of certificate section -->	
<!-- Start of FAQs Section -->
<section id="faqs" class="teacher-details-area">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="about-teacher about-faq faq-secound-home-version">
               <div class="section-title-2  headline text-left">
                  <h2> Frequently <span>Asked Questions </span></h2>
               </div>
               <div class="faq-tab mb35">
                  <div class="faq-tab-ques  ul-li">
                     <div id="accordion3" class="panel-group">
                        <div class="panel">
                           <div class="panel-title" id="heading_1">
                              <h3 class="mb-1">
                                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                 What is the Data Science Eligibility Criteria?
                                 </button>
                              </h3>
                           </div>
                           <div id="collapse_1" class="collapse" aria-labelledby="heading_1" data-parent="#accordion3">
                              <div class="panel-body">
                                 To enroll in the Data Science course, you must have completed your 10+ 2 or pursued graduation from a renowned university.
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="panel-title" id="heading_2">
                              <h3 class="mb-2">
                                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                                 How Will I Get My Certificate?
                                 </button>
                              </h3>
                           </div>
                           <div id="collapse_2" class="collapse" aria-labelledby="heading_2" data-parent="#accordion3">
                              <div class="panel-body">
                                 Upon completion of your course, clearing your assessments and projects, you will receive the certificate by ICA Edu Skills.
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="panel-title" id="heading_3">
                              <h3 class="mb-3">
                                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                                 Who Provides the Certification and How Long is it Valid For?
                                 </button>
                              </h3>
                           </div>
                           <div id="collapse_3" class="collapse" aria-labelledby="heading_3" data-parent="#accordion3">
                              <div class="panel-body">
                                 The certification is provided by ICA Edu Skills and is valid for a lifetime. You will get to work on 5 different projects.
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="panel-title" id="heading_4">
                              <h3 class="mb-4">
                                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4">
                                 What is the Salary of a Data Scientist in India?
                                 </button>
                              </h3>
                           </div>
                           <div id="collapse_4" class="collapse" aria-labelledby="heading_4" data-parent="#accordion3">
                              <div class="panel-body">
                                 A data scientist can learn up to Rs. 4 Lakhs and with experience, this salary will keep increasing.
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="panel-title" id="heading_5">
                              <h3 class="mb-5">
                                 <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_5" aria-expanded="true" aria-controls="collapse_5">
                                 How does the Job Assurance Program Work?
                                 </button>
                              </h3>
                           </div>
                           <div id="collapse_5" class="collapse" aria-labelledby="heading_5" data-parent="#accordion3">
                              <div class="panel-body">
                                 The individual must:
                                 <ul>
                                    <li>Have completed their graduation from any domain.</li>
                                    <li>ICA has placements in more than 30 cities spanning across India. We will try to place the candidates nearest to their hometown. However, if there are no vacancies during that certain period, we shall provide placement opportunities in other cities.</li>
                                    <li>Students must be able to clear all the assessments post completion of every such module with an examination at the end.</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End of FAQs Section -->
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection