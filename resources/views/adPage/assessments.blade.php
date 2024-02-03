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
    
    <section class="page-wrapper assessment-content" >
        <div class="header_portal">
            <div class="row">
                <h3 class="portal_heading" > <span class="tag" > Free </span> Recommended Test Series </h3>
                <ul class="chapter-features">
                    <li >Examined by Experts</li>
                    <li >Detailed solutions and analytics</li>
                    <li >Reattempt</li></ul>
            </div>
        </div>
        <div class="container-fluid">
            
            <div class="row">
                @foreach (getAssessment() as $value)
                    <div class="col-lg-6">
                        <div class="service_block shadow_1">
                            <div class="text">
                                <h5 class="title"><a href="#">{{ $value->name }}</a></h5>
                                <div class="result_content">
                                    <p class="mb-1">{{ $value->description }}</p>
                                    <p class="mb-1">
                                        Total Mark : <strong> {{ $value->total_mark }} </strong>
                                    </p>
                                    <p class="mb-1">
                                        Assessment Duration : <strong> {{ $value->duration }} Minutes</strong>
                                    </p>
                                    <div class="mt-4 course-type-list" style="width: auto;">	
                                        <a class="btn-filled" href="{{ url('instruction') }}/{{ $value->id }}"> Start New Test</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach   
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection