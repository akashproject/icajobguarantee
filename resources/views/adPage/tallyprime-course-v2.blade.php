@extends('layouts.ad-main')

@section('content')

<style>

    

    .placement-grid {

        border-radius: 15px;

        overflow: hidden;

        padding: 0;

        text-align: center;

        margin-top: 10px;

        position: relative;

    }

    .placement-student-name {

        background: #fff;

        border-radius: 7px;

        color: #333;

        width: 100%;

        margin: auto;

        text-align: center;

        padding: 8px 0;

        position: absolute;

        bottom: -35px;

    }

    .placement-student-name h5 {

        font-size: 12px;

        margin: 0;

    }

    .placement-grid {

        border-radius: 15px;

        overflow: visible;

        padding: 0;

        text-align: center;

        margin-top: 40px;

        position: relative;

        border: none;

        width: 110px;

        height: 110px;

    }

    .placement-grid-container {

        width: 80%;

        margin: auto;

    }

    .placement-grid img {

        border-radius: 10px;

        width: 140px;

        height: 137px;

    }



    .recruiters-grid {

        border-image: linear-gradient(#322fe7, #945ac7) 20;

        border-style: solid;

        border-width: 2px;

    }

    .section-usp-container {

        width: 80%;

        margin: auto;

    }

    .section-usp-container .usp-content h2 {

        font-size: 17px;

    }

    .section-usp-container .usp-content h6 {

        font-size: 15px;

		font-weight: normal;

    }	

    .usp-content {

        float: left;

        width: 33%;

        padding: 3rem;

        color: #fff;

        border: 0.5px solid;

        height: 220px;

        text-align: center;

        padding-top: 3.5rem;

    }

    .job-guarantee-timeline {

        position: relative;

    }

    .how-it-works-container.aic {

        justify-content: flex-end;

    }

    .how-it-works-container.aic.rev {

        justify-content: flex-start;

    }

    .how-it-works-container {

        z-index: 3;

        align-items: center;

        margin-bottom: 2rem;

        display: flex;

        position: relative;

    }

    .div-block-608 {

        max-width: 45.1%;

        padding: 1px;

    }

    .how-it-works-item {

        grid-row-gap: 12px;

        color: rgba(255,255,255,.8);

        text-align: left;

        border-radius: 16px;

        flex-direction: column;

        display: flex;

    }

    .hiw-heading {

        color: #fff;

        font-family: IBM Plex Sans Condensed,sans-serif;

        font-size: 1.5rem;

        font-weight: 500;

        line-height: 1.25;

    }

    .d2c-stroke-circle {

        background-color: #fff;

        border-radius: 50px;

        position: absolute;

        top: 0%;

        bottom: auto;

        left: 50%;

        right: auto;

        transform: translate(-50%,-50%);

    }

    .d2c-stroke-circle.cyber.pm {

        width: 32px;

        height: 32px;

        background-color: transparent;

        background-image: linear-gradient(rgba(255,255,255,.21),rgba(255,255,255,0) 34%),radial-gradient(circle at 0 0,#602ea6,#c977d6);

        border: .5px solid rgba(255,255,255,.45);

        justify-content: center;

        align-items: center;

        display: flex;

        top: 20px;

    }

    .div-block-993.how-it-works.aic {

        height: 78%;

        top: 24px;

    }

    .div-block-993.how-it-works {

        z-index: 0;

        height: 93%;

        margin-top: 0;

    }

    .d2c-inactive-line-8.ever {

        width: 2px;

        border-radius: 20px;

    }

    .d2c-inactive-line-8 {

        width: 50%;

        height: 100%;

        background-color: rgba(196,196,196,.3);

        position: absolute;

        left: 50%;

        transform: translate(-50%);

        top:0;

    }

    .job-guarantee-timeline {

        position: relative;

        width: 60%;

        margin: auto;

    }

    .d2c-active-line.cyber.ever.aic {

        background-color: #c86ed8;

        left: 2px;

    }

    .d2c-active-line.cyber.ever {

        width: 2px;

        background-color: #70a2ff;

        top: auto;

        left: 9px;

    }

    .faq-panel {

        border: double 2px transparent;

        border-radius: 10px;

        background-image: linear-gradient(white, white), linear-gradient(to right, #03A9F4, #00BCD4);

        background-origin: border-box;

        background-clip: content-box, border-box;

        overflow: hidden;

        margin: 1rem 0;

        width: 100%;

    }

    .faq-panel-title h3 button {

        font-size: 20px;

        font-weight: 800;

        color: #333;

        padding: 12px 15px;

        width: 100%;

        text-align: left;

    }

    .faq-panel-title h3 button:hover {

        text-decoration:none;

    }



    .faq-panel-body {

        padding: 0 35px;

        padding-bottom: 14px;

        color: #333;

    }



    .certificate-image-wrapper {

        border: double 2px transparent;

        border-radius: 10px;

        background-image: linear-gradient(white, white), linear-gradient(to right, #03A9F4, #00BCD4);

        background-origin: border-box;

        background-clip: content-box, border-box;

        overflow: hidden;

    }

    

    .global-desktop-cty {

        position: fixed;

        width: 100%;

        bottom: 0;

        background-image: linear-gradient(to right, #2132df, #192168, #3a49df);

        z-index: 9;

        padding: 30px 0;

        box-shadow: -4px -3px 4px 0px #697aef;

    }



    .footer-sticky-btn {

        background: #fff;

        color: #393185;

        border: 1px solid;

        display: inline;

        padding: 5px;

        border-radius: 4px;

        cursor: pointer;

        font-size: 18px;

        font-weight: 600;

    }

    .sticky-footer {

        display:none;

    }

    .global-desktop-cty {

    position: fixed;

    width: 100%;

    bottom: 0;

    background-image: linear-gradient(to right, #2132DF, #192168, #3A49DF);

    z-index: 9;

    padding: 13px 0;

    box-shadow: -4px -3px 4px 0px #697AEF;

}
.usp-section{
    background:url('/assets/img/section-background.webp');background-repeat: no-repeat;background-position: center;

}
@media screen and (max-width: 767px) {
    .usp-section{
        background-repeat: repeat-y;

    }
    .usp-section h3{

        text_color
    }
}
</style>

<header>

    <div id="main-menu"  class="main-menu-container header-style-2">

        <div class="container">

            <div class="text-center">

                <div class="" >

                    <a class="" href="javascript:void(0)"><img src="{{ url('assets/images/sap-logo.png') }}" alt="ICA Edu Skills"></a>

                </div>

            </div>

        </div>

   </div>

</header>



<section id="breadcrumb" class="ad-page-banner relative-position backgroud-style" >

    <div class="container">

        <div class="banner-content p-15 banner-background-gradient">

            <div class="row">

                <div class="col-12 text-center">

                    <div class="ad-banner-content">

                        <div style="padding-top: 20px;">&nbsp;</div>

                    </div>



                    <div class="ad-banner-content">

                        <div class="ad-banner-title text-white text-center">

                            <h1 style="line-height: 1.2em; font-size: 200%;"> Become A Certified Professional with <br /> Tally Prime + GST Course <h1>

                        </div>

						<div style="margin-top: 10px;">&nbsp;</div>

						<div class="mb10" style="display: inline-block; overflow: hidden; color: yellow;">

						   <div class="comment-ratting float-left ul-li mr-3" >

							  <!--ul>

								 <li><i class="fas fa-star"></i></li>

							  </ul-->

						   </div>

						   <div class="comment-ratting float-left ul-li px-3" style="font-weight: 600; border-right: 1px solid;">

							  <span>93,771 Votes</span>

						   </div>

						   <div class="comment-ratting float-left ul-li mx-3" style="font-weight: 600;">

							  <span>99,524 Students</span>

						   </div>

						</div>

						

						<div class="col-md-3">

						</div>

						<div style="margin-top: 10px;">&nbsp;</div>

						<div class="col-md-3" style="display: inline-block; overflow: hidden;">

							<ul style="color: #fff; text-align: left;">

								<li> 51 Training Hours </li>

								<li> Industry Expert Faculty </li>

								<li> 90% Practical Training </li>

                                <li> GST Portal Practice </li>

							</ul>

						</div>

						<div class="col-md-3" style="display: inline-block; overflow: hidden;">

							<ul style="color: #fff; text-align: left;">

								<li> Industry Projects </li>

								<li> Multiple Mock Tests </li>

								<li> Doubt Clearning Sessions </li>

								<li> 100% Job Assistance </li>

							</ul>	

						</div>

						<div class="col-md-3">

						</div>



                        <div class="ad-banner-option my-5">

                            <span class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font mb10">

                                <a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>

                            </span>



                            <span class="apply-now text-white">

                                <a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Apply Now </a>

                            </span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="placement-grid-container" >

                <div class="row">

                    <div class="col-md-12 col-lg-12" >

                        <div class="ad-banner-option text-white">

                            <div class="text-center mt-4">

                                <h2>Job Placements</h2>

                            </div>

                        </div>

                    </div>    

                </div>   

                <div class="row">

                    @foreach(getJoinees('',1) as $value)

                    <div class="col-6 col-lg-2" >

                        <div class="placement-grid" > 

                            <img src="{{ url('assets/img/placements/'.strtolower(str_replace(' ','-',$value->name)).'.png') }}" >

                            <div class="placement-student-name" >

                                <h5> {{$value->placed_at}} </h5>

                            </div>

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

            <div class="row">

                <div class="col-12 text-center" >

                    <div class="ad-banner-option my-5">

                        <span class="apply-now text-white">

                            <a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Apply Now </a>

                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<section id="recruiters" class="sponsor-section">

    <div class="container">

        <div class="faq-section-title mb35 headline text-center">

            <h3 class="gradient-title" >Few Of Our Potential Recruiters</h3>

        </div>

        <div class="row" >

            @foreach(getRecruiters() as $value)

                <div class="col-md-2 col-lg-2 col-6 mt10 mb20" >

                    <div class="recruiters-grid text-center" >

                        <img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):'https://dummyimage.com/140x140' }}" alt="">

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>



<section id="recruiters" class="sponsor-section usp-section" style="">

    <div class="container">

        <div class="mb35 headline text-center">

            <h3 class="text-white" >How Tally Prime Training Classes Work</h3>

        </div>

        <div class="row">

            <div class="col-12 text-center">

                <div class="section-usp-container" >

                    <div class="usp-content"> 

                        <h2> Updated Tally Syllabus </h2>

                        <h6> Ammended Tally Course modules to keep you on track with the industry. </h6>

                    </div>

                    <div class="usp-content"> 

                        <h2> Get Hands on Experience </h2>

                        <h6> Expereience our real-life project made by industry experts and academia. </h6>

                    </div>

                    <div class="usp-content"> 

                        <h2> Get Doubts Cleared </h2>

                        <h6> Our academia & trainers are always here to help you get your doubts solved. </h6>

                    </div>

                    <div class="usp-content"> 

                        <h2> Test Your Knowledge </h2>

                        <h6> With our Learnersmall App, you can test your concepts with assignments and quizzes. </h6>

                    </div>

                    <div class="usp-content"> 

                        <h2> Final Examination </h2>

                        <h6> Your training will be completed once you take the final examination. </h6>

                    </div>

                    <div class="usp-content"> 

                        <h2> SAP Certification </h2>

                        <h6> Get certified as Certified SAP FICO Professional by ICA Edu Skills and NSDC. </h6>

                    </div>                    

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-12 text-center" >

                <div class="ad-banner-option my-5">

                    <span class="apply-now text-white">

                        <a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>

                    </span>

                </div>

            </div>

        </div>

    </div>

</section>



<section id="courses" class="best-course-section">

   <div class="container">

        <div class="faq-section-title mb45 headline text-center">

            <h3 class="gradient-title"> Explore The Best Tally Prime + GST Course</h3>

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

         <div class="row" >

            <div class="col-md-12">

               <div class="course-details-item">

                  <div class="faq-tab mb65">

                     <div class="faq-tab-ques  ul-li">

                        

                        <!-- /tab-head -->

                        <!-- tab content -->

                        <div class="tab-container">

                           

                           <!-- #tab3 -->

                           <div id="{{$course->slug}}4" class="tab-content-1 pt35 "  style="display:block"> 

                              <div class="course-details-content">

                                 <div class="affiliate-market-guide mb65">

                                    <div class="affiliate-market-accordion">

                                       <div id="accordion" class="row panel-group">

                                          @foreach(getCourseCarriculams($course->id) as $key => $carriculam)

                                          @if($carriculam->name)

                                            <div class="col-md-6">

                                                <div class="two-grid-panel my-3" >

                                                    <div class="panel-title" id="heading_{{$course->slug}}_{{$key}}">

                                                        <div class="leanth-duration">

                                                            <span> {{ $carriculam->duration }} Hours </span>

                                                            <span> {{ count(json_decode($carriculam->lecture)) }} Lecture</span>

                                                        </div>

                                                        <div class="ac-head">

                                                            <button class="btn btn-link {{ (count(getCourseCarriculams($course->id)) > 1)?'collapsed':'' ; }}" data-toggle="collapse" data-target="#collapse_{{$course->slug}}_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$course->slug}}_{{$key}}">

                                                                <span>{{ ($key < "9" )?"0":""}}{{$key + 1}}</span> {{$carriculam->name}}

                                                            </button>

                                                        </div>

                                                    </div>

                                                    <div id="collapse_{{$course->slug}}_{{$key}}" class="collapse {{ (count(getCourseCarriculams($course->id)) > 1)?'':'show'; }}" aria-labelledby="heading_{{$course->slug}}_{{$key}}" data-parent="#accordion">

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

            

         </div>

      </div>

      @endforeach

   </div>

</section>



<section id="recruiters" class="sponsor-section">

    <div class="container">

        <div class="faq-section-title mb45 headline text-center">

            <h3 class="gradient-title" > Training Certifications </h3>

            <p> After getting certified in the Tally Prime + GST course, several career opportunities await the aspiring candidates to join. To get the right skill set, invest in your future now. Join the SAP Certified Program today! </p>

        </div>

        <div class="row" >

            <div class="col-md-4 text-center">



            </div>		

            <div class="col-md-4 text-center">

                <div class="certificate-image-wrapper my-3" >

                    <img src="{{ url('public/upload/2023-05-12/cia-certificate.png') }}" >

                </div>

            </div>

            <div class="col-md-4 text-center">



            </div>

        </div>

    </div>

</section>



<section id="recruiters" class="sponsor-section">

    <div class="container">

        <div class="faq-section-title mb45 headline text-center">

            <h3 class="gradient-title" > Frequently Asked Questions </h3>

        </div>

        <div class="row" >

            <div class="col-12" >

                <div class="faq-tab mb35">

                    <div class="faq-tab-ques  ul-li">

                        <div id="accordion3" class="faq-panel-group">

                            @foreach(getFaqs("Adpage",$contentMain->id) as $key => $value)

                            <div class="faq-panel">

                                <div class="faq-panel-title" id="heading_{{$key}}">

                                    <h3 style="margin:0px" >

                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$key}}">

                                        {{ $value->question }}

                                        </button>

                                    </h3>

                                </div>



                                <div id="collapse_{{$key}}" class="collapse" aria-labelledby="heading_{{$key}}" data-parent="#accordion3">

                                    <div class="faq-panel-body">

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

</section>



<div class="global-desktop-cty">

    <div class="container">

        <div class="row" >

            <div class="col-7 text-right" >

                <h3 style="color: #fff; font-size: 15px!important; width: 100%; margin: auto;"> Be A Tally + GST Expert </h3>

            </div>

            <div class="col-5 text-left" >

                <a class="footer-sticky-btn" href="javascript:void(0)"  onclick="lead_capture_form_btn('',{{ $contentMain->id }})" > Apply Now</a>

            </div>

        </div>

    </div>

</div>

<!-- End of Course Syllabus

   ============================================= -->

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection