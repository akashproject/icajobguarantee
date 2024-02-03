@extends('layouts.ad-main')
    @section('content')
    <aside class="left-sidebar" data-sidebarbg="skin5">
        @include('common.menu')
    </aside>
    <section class="page-wrapper" >
        <div class="container-fluid">
            <div class="row">          
                <div class="col-md-2">

                </div>     
                <div id="secondary" class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="result_assessment_heading" >     
                            <h4 class=>{{ $report->name }} </h4>
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
                                        <div class="icon">
                                            <img src="{{ url('assets/images/trophy.png') }}" alt="icon" class="image-fit">
                                        </div>
                                        <div class="text">
                                            <div class="counter">
                                                <span>{{$report->score}} / {{$report->total_mark}}</span>
                                            </div>
                                            <p class="mb-0">Score</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Box -->
                                <!-- Box -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter_box">
                                        <div class="icon">
                                            <img src="{{ url('assets/images/conclusion.png') }}" alt="icon" class="image-fit">
                                        </div>
                                        <div class="text">
                                            <div class="counter">
                                                <span>{{$report->attempt}} / {{$report->total_question}}</span>
                                            </div>
                                            <p class="mb-0">Attempted</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Box -->
                                <!-- Box -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter_box">
                                        <div class="icon">
                                            <img src="{{ url('assets/images/dart.png') }}" alt="icon" class="image-fit">
                                        </div>
                                        <div class="text">
                                            <div class="counter">
                                                <span>{{$report->accuracy}}</span>
                                            </div>
                                            <p class="mb-0">Accuracy</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Box -->
                                <!-- Box -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter_box">
                                        <div class="icon">
                                            <img src="{{ url('assets/images/percent.png') }}" alt="icon" class="image-fit">
                                        </div>
                                        <div class="text">
                                            <div class="counter">
                                                <span>{{$report->percentile}}</span>
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
                            <h6 style="font-size: 18px;margin-bottom: 5px;"> Detail Report </h6>   
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