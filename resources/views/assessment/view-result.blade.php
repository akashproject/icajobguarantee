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
            <div class="row">          
                <div class="col-md-2">

                </div>     
                <div id="secondary" class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="result_assessment_heading" >     
                            <h4 class=>{{ $contentMain->name }} </h4>
                        </div> 
                    </div> 
                    <!-- Services Start -->
                    <section class="section-padding wow fadeInUp">
                        <div class="container">      
                            <h6 style="font-size: 18px;margin-bottom: 5px;"> Overall Perfomance Summary </h6> 
                            <div class="row perfomance_summary">
                                <!-- Box -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter_box">
                                       
                                        <div class="text">
                                            <div class="counter">
                                                <span>{{$contentMain->score}} / {{$contentMain->total_mark}}</span>
                                            </div>
                                            <p class="mb-0">Score</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Box -->
                                <!-- Box -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter_box">
                                        
                                        <div class="text">
                                            <div class="counter">
                                                <span>{{$contentMain->attempt}} / {{$contentMain->total_question}}</span>
                                            </div>
                                            <p class="mb-0">Attempted</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Box -->
                                <!-- Box -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter_box">
                                       
                                        <div class="text">
                                            <div class="counter">
                                                <span>{{$contentMain->accuracy}}</span>
                                            </div>
                                            <p class="mb-0">Accuracy</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Box -->
                                <!-- Box -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter_box">
                                        
                                        <div class="text">
                                            <div class="counter">
                                                <span>{{$contentMain->percentile}}</span>
                                            </div>
                                            <p class="mb-0">Percentile</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Box -->
                            </div>           
                        </div>
                    </section>
                    <!-- Services End -->
                    <!-- Services Start -->
                    <section class="section-padding wow fadeInUp">
                        <div class="container">      
                            <div class="row">  
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($quesionAnswer as $key => $quesion)
                                <div id="question_{{$i}}" class="col-md-10 summary-wrap questionlist active">
                                    <div class="" >
                                        <h4 class="summary-heading" > <span class="counter">{{$i}}</span>. {{$quesion['question']}} </h4>
                                        <div class="summary-description" > {!!$quesion['description']!!}</div>
                                    </div>                                               
                                    <div class="row question_list" >    
                                        @foreach ($quesion['answer'] as $anskey => $answer)                
                                        <div class="col-lg-12 col-12 relative">
                                            <input type="radio" name="question_answer[{{$quesion['id']}}]" id="answer_{{$answer->id}}" class="answer_input" value="{{$answer->id}}" disabled>   
                                            <label for="answer_{{$answer->id}}" class="answers_wrap {{ ($answer->is_true == 1)?'true':'' }} {{ ($answer->id == $quesion['selected_answer'])?'selected':'' }}" dataquestion="{{$answer->id}}">                                           
                                                <h6>{{chr($anskey+65) . PHP_EOL}}.<span> {{$answer->answer}} </span> </h6>
                                            </label>
                                        </div> 
                                        @endforeach                                                           
                                    </div>
                                    
                                </div>
                                @php
                                    $i++;
                                @endphp
                                @endforeach  
                            </div>
                        </div>
                    </section>
                    <!-- Services End -->
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection