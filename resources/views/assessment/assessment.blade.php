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
            <form class="form-horizontal" id="assessment" method="post" action="{{ url('submit-assessment') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="assessment_id" id="assessment_id" value="{{$contentMain->id }}" />
                <input type="hidden" name="total_question" id="total_question" value="{{ $totalQuestion }}" />
                <input type="hidden" name="total_duration" id="total_duration" value="{{ $contentMain->duration }}" />
                <input type="hidden" name="total_mark" id="total_mark" value="{{$contentMain->total_mark}}" />
                <section class="mt-5">
                    <div class="container">           
                        <div class="row">           
                            <div class="col-lg-8" style="border-right: 1px solid;">
                                <div class="row text-right">
                                    <div class="col-lg-4">
                                        <div class="counter" >
                                            <h3> Total Duration : <span> {{$contentMain->duration }} Min </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="counter" >
                                            <h3> Assessment : <span> {{$contentMain->total_mark}} Marks</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="counter" >
                                            <h3> You have : <span id="counter">{{$contentMain->duration}}</span> minutes </h3>
                                            <input type="hidden" name="taken_time" id="counterValue" />
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($quesionAnswer as $key => $quesion)
                                <div id="question_{{$i}}" class="summary-wrap questionlist {{($i==1)?'active':''}}">
                                    <div class="" >
                                        <h4 class="summary-heading" > <span class="counter">{{$i}}</span>. {{$quesion['question']}} </h4>
                                        <div class="summary-description" > {!! $quesion['description'] !!}</div>
                                    </div>                                               
                                    <div class="row question_list" >    
                                        @foreach ($quesion['answer'] as $anskey => $answer)                
                                        <div class="col-lg-12 col-12 relative">
                                            <input type="radio" name="question_answer[{{$quesion['id']}}]" id="answer_{{$answer->id}}" class="answer_input" value="{{$answer->id}}" >   
                                            <label for="answer_{{$answer->id}}" class="answers_wrap" dataquestion="{{$answer->id}}">                                           
                                                <h6>{{chr($anskey+65) . PHP_EOL}}.<span> {{$answer->answer}} </span> </h6>
                                            </label>
                                        </div> 
                                        @endforeach                                                           
                                    </div>
                                    <div class="submit_answer" > 
                                        @if($i >  1)
                                        <div class="mt-4 course-type-list" style="width: auto;">	
                                            <a class="btn-filled" href="javascript:void(0)" onclick="gotoPrev({{$i-1}})"> Previous</a>
                                        </div>
                                        @endif
                                        @if($i < $totalQuestion)
                                        <div class="mt-4 course-type-list" style="width: auto;">	
                                            <a class="btn-filled" href="javascript:void(0)" onclick="gotoNext({{$i+1}})"> Next</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @php
                                    $i++;
                                @endphp
                                @endforeach                       
                            </div>
                            <div class="col-lg-4">
                                <div class="sidebar style_3">
                                    <div class="sidebar_widget recent_widgets assessment_side">
                                        <h5 class="widget_title">Assessment Details</h5>
                                        <ul>
                                            <li style="padding: 10px 0 0 23px;">                                  
                                                <div class="text">
                                                    <h6 class="mb-0">
                                                        <a href="javascript:void(0)"> {{$contentMain->name}}</a>
                                                    </h6>
                                                    <p> {{$contentMain->description}} </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sidebar_widget">
                                        <div class="sidebar_widget_inner">
                                            <h6 class="mb-0">
                                                <a href="javascript:void(0)"> Question Index </a>
                                            </h6>
                                            <ul class="info_widget device_summary">
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($quesionAnswer as $key => $quesion)
                                                    <li class="question_navigation {{($i==1)?'active':''}}" data-id="{{$i}}">
                                                        <a href="javascript:void(0)">{{$i}}</a> 
                                                    </li>
                                                    @php
                                                        $i++;
                                                    @endphp
                                                @endforeach                                          
                                            </ul>
                                            <div class="submit_answer text-center" > 
                                                <div class="submit_assessment genius-btn mb20 gradient-bg text-center text-uppercase ul-li-block bold-font">
                                                    <a data-toggle="modal" data-target="#franchise-lead-generation-form" href="#submit_assessment_popup"> Submit Assessment Paper  </a>
                                                </div>
                                                <a href="#submit_assessment_popup" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle open_submit_assessment_popup" style="width: 100%;margin: auto;display: block;"> 
                                                    Submit Test Paper 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div id="select-city-popup" class="white-popup mfp-hide">
                    <h5 class="text-center">Thank You! Assessment Timining Exeed</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="submit_assessment genius-btn mb20 gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a data-toggle="modal" data-target="#franchise-lead-generation-form" href="javascript:void(0)"> <i class="fas fa-download" style="color: #fff;"></i> Submit Assessment Paper  </a>
							</div>
                        </div>
                    </div>
                </div>       
            </form>
            <div id="submit_assessment_popup" class="white-popup mfp-hide">
                <div class="text-center" >
                    <h5 class="text-center" style="margin-bottom:0">Ready to submit</h2>
                    <p> Are you sure to submit assessment </p>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="javascript:void(0)" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle submit_assessment" style="width: 100%;margin: auto;display: block;"> 
                            Confirm 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection   
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->

@endsection