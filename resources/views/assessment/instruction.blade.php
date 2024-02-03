@extends('layouts.ad-main')
    @section('content')
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
                            </ul>
                        </div>
                    </nav>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="header-devider"></section>
    <section class="header-margin"></section>
    
    <section class="page-wrapper" >
        <div class="container-fluid">
            <div class="header_portal">
                <div class="container">
                    <div class="row">
                        <div class="course-title mt10 headline relative-position height-60">
                            <h3>
                                <a href="courses/accounting-course-cia-foundation">
                                    READ THE INSTRUCTIONS CAREFULLY
                                </a> 
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row content-row">
                <div class="col-md-1">

                </div>
                <div class="col-md-10">
                    <div class="text-center" >
                    </div>
                    <div class="course-details-content" >
                        <h6> General Information </h6>
                        <ul class="about_list style_2">
                            <li>Total duration of the paper is 3 hours (180 minutes).</li>
                            <li>The on-screen computer countdown timer on the top right corner of computer screen will display the remaining time (in minutes) available to you for completing the paper. When the on-screen countdown timer reaches zero, the paper will end by itself – No input from your side will be accepted after the timer reaches zero and whatever answers have been saved by you will automatically be submitted for evaluation.</li>
                            <li>The “ Marked for Review ” status for a question indicates you would like to look at that question again.</li>

                        </ul>
                    </div>
                    <div class="course-details-content" >
                        <h6> NAVIGATING THROUGH PARTS/ SECTIONS OF QUESTION PAPER </h6>
                        <ul class="about_list style_2">
                            <li> Parts (PHYSICS, CHEMISTRY and MATHEMATICS) and sections of the parts thereof in the question paper are displayed on the top of the screen. Questions within a section can be viewed by clicking on the corresponding section name. The section which you will be viewing will be highlighted. </li>
                            <li>After clicking the “Save & Next” button on the last question of a part/section, you will automatically be taken to the first question of the next part/section.</li>
                            <li> You can shuffle between parts/sections and questions within parts/sections anytime during the paper as per your convenience. </li>                            
                        </ul>
                    </div>
                    <div class="course-details-content" >
                        <h6> NAVIGATING TO A QUESTION </h6>
                        <p> To navigate between questions, you need to do the following: </p>
                        <ul class="about_list style_2">
                            <li> Click on the question number in the Question Palette at the right of the screen to go to that numbered question directly. Note that using this option does NOT save the answer (if it is answered) to the current question. To save the answer, you must click on “ Save & Next”button . </li>
                            <li> Click on “ Save & Next ”button </li>
                            <li> Click on “ Mark for Review & Next ” button to mark it for review (with or without answering the question) and go to the next question. </li>                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="mt-4 course-type-list" style="width: auto;">	
                    <a class="btn-filled" href="{{ url('assesment/start') }}"> Start Assesment</a>
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection