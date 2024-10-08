@extends('layouts.main')
@section('content')
<div class="page-inside-menu header-fixed" style="display:none">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <nav class="navbar-menu inside-navbar">
               <div class="nav-menu ul-li">
                  <ul class="courseMenu" >
                     @foreach ($courseMenu as $key => $menuItem)
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
<!-- Start of breadcrumb section
   ============================================= -->
<section id="breadcrumb" class="inner-banner relative-position backgroud-style"  style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});">
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
                  <a href="{{ url('/courses') }}">Courses</a>
                  <span class="breadcrumbElement"> 
                  <i class="fas fa-chevron-right"> </i>
                  </span> 
               </li>
               <li class="breadcrumbElement">
                  {{ $contentMain->name }} <a class="share-popup social-share" href="#modelShare" ><i class="fas fa-share-alt"></i> </a>
               </li>
            </ol>
            <div class="inner-banner-content">
               <div class="inner-banner-title">
                  <h1>{{(isset($contentMain))?$contentMain->name:"Default Page" }}</h1>
               </div>
				<div class="mb10" style="width: 100%;overflow: hidden;color: #ffc926;">
					<div class="comment-ratting float-left ul-li mr-3" >
						<ul>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
						</ul>
					</div>
					<div class="comment-ratting float-left ul-li px-3" style="font-weight: 600;border-left: 1px  solid;border-right: 1px solid;">
                     <span>{{ number_format($contentMain->number_of_rating) }} Votes </span>
                  </div>
               <div class="comment-ratting float-left ul-li mx-3" style="font-weight: 600;">
						<span>{{ number_format($contentMain->number_of_enrolled) }} Students  </span>
					</div>
               
				</div>
               <div class="inner-banner-description">
                  	<div class="mb10">
                     	{!! (isset($contentMain))?$contentMain->excerpt:"Default Description" !!}
                  	</div>
                  		{!! $contentMain->criteria !!}
               </div>
            </div>
         </div>
         <div class="col-md-3">
         </div>
      </div>
   </div>
</section>
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
                     <span class="counter-count bold-font">25</span><span>+</span>
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
                  <a onclick="lead_capture_form_btn({{ $contentMain->brochure_id }},'')" href="javascript:void(0)"> Enroll This Course </i></a>
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
         <div class="col-md-12">
            <div class="course-details-item">
               <!-- <div class="course-single-pic mb30">
                  <img src="{{ url('assets/img/course/cs-1.jpg') }}" alt="">
                  
                  
                  
                  </div> -->
               <div class="faq-tab mb65">
                  <div class="faq-tab-ques  ul-li">
                     <div class="course-details-category ul-li tab-button text-left mb25 tab-button text-left mb25">
                        <span>Course <b>Section:</b></span>
                        <ul class="product-tab ">
                           <li class="active" rel="tab1"> Summary </li>
                           <li rel="tab3"> Highlights </li>
                           <li rel="tab4">  Syllabus  </li>
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
                        <!-- #tab2 -->
                        <div id="tab3" class="tab-content-1 pt35">
                           <div class="highlights">
                              <div class="affiliate-market-guide mb65">
                                 {!! $contentMain->highlights !!}
                              </div>
                           </div>
                        </div>
                        <!-- #tab3 -->
                        <div id="tab4" class="tab-content-1 pt35">
                           <div class="course-details-category text-left mb25 tab-button text-left mb25">
                              <ul class="module-tab">
                                 <li class="active col-2" rel="module-tab1" style="text-align: center;">CIA <br> ( {{ count(getCourseModules(1,'')) }} Modules )</li>
                                 <li class="col-2" rel="module-tab2" style="text-align: center;">CIA Plus <br> ({{ count(getCourseModules(3,'')) }} Modules )</li>
                                 <li class="col-2" rel="module-tab3" style="text-align: center;">CIA Express <br> ({{ count(getCourseModules(4,'')) }} Modules )</li>
                                 <li class="col-2" rel="module-tab4" style="text-align: center;">CIA Foundation <br> ({{ count(getCourseModules(11,'')) }} Modules )</li>
                              </ul>
                           </div>
                           <div class="tab-container">
                              <!-- 1st tab -->
                              <div id="module-tab1" class="module-tab-content-1 pt35">
                                 <div class="">
                                    <div class="affiliate-market-guide mb65">
                                       <div class="affiliate-market-accordion">
                                          <div id="accordion" class="panel-group">
                                             @foreach(getCourseModules($contentMain->id,'') as $key => $carriculam)
                                                @if($carriculam->name)
                                                <div class="panel">
                                                   <div class="panel-title" id="heading-1-{{$key}}">
                                                      <div class="ac-head">
                                                         <button class="btn btn-link module_title {{ (count($carriculams) > 1)?'collapsed':'' ; }}" data-toggle="collapse" data-target="#collapse-1-{{$key}}" aria-expanded="true" aria-controls="collapse-1-{{$key}}">
                                                         <span>{{ ($key < "9" )?"0":""}}{{$key + 1}}</span> {{$carriculam->name}}
                                                         </button>
                                                         <div class="leanth-course">
                                                            <span>{{ $carriculam->duration }} Hours</span>
                                                            <span> {{ count(json_decode($carriculam->lecture)) }} Lectures</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div id="collapse-1-{{$key}}" class="collapse {{ (count($carriculams) > 1)?'':'show' ; }}" aria-labelledby="heading-1-{{$key}}" data-parent="#accordion">
                                                      <div class="panel-body">
                                                         @foreach(json_decode($carriculam->lecture) as $key => $lecture)
                                                         <div class="module-lecture" >
                                                            <strong> <i class="play-icon text-gradiant fa fa-book"></i> Lecture {{$key + 1}} : </strong> {!! $lecture !!}
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
                                 </div>
                              </div>
                              <div id="module-tab2" class="module-tab-content-1 pt35">
                                 <div class="">
                                    <div class="affiliate-market-guide mb65">
                                       <div class="affiliate-market-accordion">
                                          <div id="accordion" class="panel-group">
                                             @foreach(getCourseModules(3,'') as $key => $carriculam)
                                                @if($carriculam->name)
                                                <div class="panel">
                                                   <div class="panel-title" id="heading-2-{{$key}}">
                                                      <div class="ac-head">
                                                         <button class="btn btn-link module_title {{ (count($carriculams) > 1)?'collapsed':'' ; }}" data-toggle="collapse" data-target="#collapse-2-{{$key}}" aria-expanded="true" aria-controls="collapse-2-{{$key}}">
                                                         <span>{{ ($key < "9" )?"0":""}}{{$key + 1}}</span> {{$carriculam->name}}
                                                         </button>
                                                         <div class="leanth-course">
                                                            <span>{{ $carriculam->duration }} Hours</span>
                                                            <span> {{ count(json_decode($carriculam->lecture)) }} Lectures</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div id="collapse-2-{{$key}}" class="collapse {{ (count($carriculams) > 1)?'':'show' ; }}" aria-labelledby="heading-2-{{$key}}" data-parent="#accordion">
                                                      <div class="panel-body">
                                                         @foreach(json_decode($carriculam->lecture) as $key => $lecture)
                                                         <div class="module-lecture" >
                                                            <strong> <i class="play-icon text-gradiant fa fa-book"></i> Lecture {{$key + 1}} : </strong> {!! $lecture !!}
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
                                 </div>
                              </div>
                              <div id="module-tab3" class="module-tab-content-1 pt35">
                                 <div class="">
                                    <div class="affiliate-market-guide mb65">
                                       <div class="affiliate-market-accordion">
                                          <div id="accordion" class="panel-group">
                                             @foreach(getCourseModules(4,'') as $key => $carriculam)
                                                @if($carriculam->name)
                                                <div class="panel">
                                                   <div class="panel-title" id="heading-3-{{$key}}">
                                                      <div class="ac-head">
                                                         <button class="btn btn-link module_title {{ (count($carriculams) > 1)?'collapsed':'' ; }}" data-toggle="collapse" data-target="#collapse-3-{{$key}}" aria-expanded="true" aria-controls="collapse-3-{{$key}}">
                                                         <span>{{ ($key < "9" )?"0":""}}{{$key + 1}}</span> {{$carriculam->name}}
                                                         </button>
                                                         <div class="leanth-course">
                                                            <span>{{ $carriculam->duration }} Hours</span>
                                                            <span> {{ count(json_decode($carriculam->lecture)) }} Lectures</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div id="collapse-3-{{$key}}" class="collapse {{ (count($carriculams) > 1)?'':'show' ; }}" aria-labelledby="heading-3-{{$key}}" data-parent="#accordion">
                                                      <div class="panel-body">
                                                         @foreach(json_decode($carriculam->lecture) as $key => $lecture)
                                                         <div class="module-lecture" >
                                                            <strong> <i class="play-icon text-gradiant fa fa-book"></i> Lecture {{$key + 1}} : </strong> {!! $lecture !!}
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
                                 </div>
                              </div>
                              <div id="module-tab4" class="module-tab-content-1 pt35">
                                 <div class="">
                                    <div class="affiliate-market-guide mb65">
                                       <div class="affiliate-market-accordion">
                                          <div id="accordion" class="panel-group">
                                             @foreach(getCourseModules(11,'') as $key => $carriculam)
                                                @if($carriculam->name)
                                                <div class="panel">
                                                   <div class="panel-title" id="heading-4-{{$key}}">
                                                      <div class="ac-head">
                                                         <button class="btn btn-link module_title {{ (count($carriculams) > 1)?'collapsed':'' ; }}" data-toggle="collapse" data-target="#collapse-4-{{$key}}" aria-expanded="true" aria-controls="collapse-4-{{$key}}">
                                                         <span>{{ ($key < "9" )?"0":""}}{{$key + 1}}</span> {{$carriculam->name}}
                                                         </button>
                                                         <div class="leanth-course">
                                                            <span>{{ $carriculam->duration }} Hours</span>
                                                            <span> {{ count(json_decode($carriculam->lecture)) }} Lectures</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div id="collapse-4-{{$key}}" class="collapse {{ (count($carriculams) > 1)?'':'show' ; }}" aria-labelledby="heading-4-{{$key}}" data-parent="#accordion">
                                                      <div class="panel-body">
                                                         @foreach(json_decode($carriculam->lecture) as $key => $lecture)
                                                         <div class="module-lecture" >
                                                            <strong> <i class="play-icon text-gradiant fa fa-book"></i> Lecture {{$key + 1}} : </strong> {!! $lecture !!}
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
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- #tab3 -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </div>
   </div>
</section>
<!-- End of course details section
   ============================================= -->	
<!-- Start of sponsor section
   ============================================= -->
<section id="career" class="sponsor-section">
   <div class="container">
      <div class="section-title-2 mb65 headline text-left">
         <h2>List of <span>Potential Recruiters</span></h2>
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
<!-- Start of placement section
   ============================================= -->
@if(count(getJoinees('',$contentMain->id)) > 0)
<section id="placements" class="testimonial_2_section">
   <div class="container">
      <!--div class="testimonial-slide"-->
      <div class="section-title mb20 headline text-center">
         <span class="subtitle text-uppercase"> Student Placement </span>
         <h3>Connecting Talent with <span>Job Opportunities</span></h3>
      </div>
      @foreach(getJoinees('',$contentMain->id) as $value)						
      <div class="placed-grid-box">
         <div class="image-box">
            <img src="{{ url('assets/img/placements/'.strtolower(str_replace(' ','-',$value->name)).'.png') }}" alt="Student {{ $value->name }} placement in {{getCourseById($value->course_id)->name}} in {{ getCenterById($value->center_id)->name }}" style="height: 100%;">
         </div>
         <div class="box-content">
            <div class="box-title mt10">
               <h4>{{ $value->name }}</h4>
            </div>
            <p> Studied From : <strong ><a class="primary-color" target="_blank" href="/centers/{{getCenterById($value->center_id)->slug }}"> {{ getCenterById($value->center_id)->name }}</a> </strong> </p>
            <p> Placed At: <strong >{{ $value->placed_at }} </strong> </p>
            <p> Joining Salary: <strong >{{ number_format($value->joining_salary) }} </strong ></p>
         </div>
      </div>
      @endforeach
      <!--/div-->
   </div>
</section>
@endif
<!-- End of placement section
   ============================================= -->
<!-- Start of testimonial secound section
   ============================================= -->
<section id="alumni" class="testimonial_2_section">
   <div class="container">
      <div class="testimonial-slide">
         <div class="section-title mb20 headline text-center">
            <span class="subtitle text-uppercase">About This Course </span>
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
<!-- End  of testimonial secound section
   ============================================= -->
<section id="courses" class="best-course-section">
   <div class="container">
      <div class="section-title mb10 headline text-center">
         <span class="subtitle text-uppercase">BROWSE COURSES</span>
         <h3>List of <span>Related Courses</span></h3>
      </div>
      <div class="best-course-area mb10">
         <div class="row justify-content-center">
            @if($courses)
            @foreach($courses as $course)
            <div class="col-md-3">
               <div class="best-course-pic-text relative-position">
                  <div class="best-course-pic relative-position">
                     <img src="{{ (isset($course->featured_image))?getSizedImage('',$course->featured_image):'assets/img/course/c-1.jpg' }}" alt="">
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
                        <a href="/courses/{{ $course->slug }}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                     </div>
                     <div class="blakish-overlay"></div>
                  </div>
                  <div class="best-course-text">
                     <div class="course-title mb20 headline relative-position height-60">
                        <h3><a href="/courses/{{ $course->slug }}"> {{ $course->name }} </a> 
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
                        <a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $course->brochure_id }},'')"><i class="fas fa-download"></i> Brochure</a>
                     </div>
                     <div class="course-type-list">														
                        <a class="btn-outline" href="{{ URL::to('/courses') }}/{{ $course->slug }}" >View More <i class="fas fa-caret-right"></i></a>
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
@if(getBlogs($contentMain->blog))
<section id="blogs" class="best-course-section">
   <div class="container">
      <div class="section-title mb10 headline text-center">
         <span class="subtitle text-uppercase">Knowledge Center</span>
         <h3>Related <span>Educational Topics</span></h3>
      </div>
      <div class="best-course-area mb10">
         <div class="row justify-content-center">
            @foreach(getBlogs($contentMain->blog) as $key => $value)
            <div class="col-md-4 my-3">
               <div class="blog-post-img-content">
                  <div class="blog-img-date relative-position">
                     <div class="blog-thumnile">
                        <img src="{{ $value->source_url }}" alt="{{ $value->title->rendered }}">
                     </div>
                     <div class="course-price text-center gradient-bg">
                        <span>{{ date("d M Y",strtotime($value->date))}}</span>
                     </div>
                  </div>
                  <div class="blog-title-content headline">
                     <h3><a href="{{ $value->link }}">{!! $value->title->rendered !!}</a></h3>
                     <div class="blog-content">
                        {!! substr($value->excerpt->rendered,0, 200) !!}...
                     </div>
                     <!--div class="view-all-btn bold-font">
                        <a href="{{ $value->link }}">Read More <i class="fas fa-chevron-circle-right"></i></a>
                        
                        </div-->
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</section>
@endif
@php
$reviewRatings = get_reviews_ratings("Course",$contentMain->id);
@endphp
<!--section id="review" class="teacher-details-area" >
   <div class="container"> 
   
   
   
   	
   
   
   
   	<div class="row" >
   
   
   
   		<div class="col-md-9" >
   
   
   
   			@if($reviewRatings)
   
   
   
   							
   
   
   
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
   
   
   
   								<input type="hidden" name="model" id="model" value="Course">
   
   
   
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
   
   
   
   </section-->

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
                        @foreach(getFaqs("Course",$contentMain->id) as $key => $value)
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