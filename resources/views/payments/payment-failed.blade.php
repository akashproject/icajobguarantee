@extends('layouts.main')
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
						
					</div>
				</div>
			</div>
		</div>
	</header>	
<!-- Start of Header section
	============================================= -->
    <section class="header-devider" style="padding-top: 40px;"></section>
    <section class="header-margin" style="margin-top: 80px;"></section>
    <section style="background: #eeeeee;">
        <div class="container">
            <div class="row justify_center">	
                <div class="col-md-2">
                </div>	
                <div class="col-md-8">
                    <div class="form-container bg-white" >
                        <div style="margin: 101px auto; padding:60px; text-align: center;">
                            <h4>Payment has been faild! Inconvenience is regretted.</h4>
                            <h4>Your payment has declined. Kindly click to Proceed.</h4>
                            <div style="margin-top: 20px;">
                                <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                                    <a href="{{ url('/');}}">Back To Home <i class="fas fa-caret-right"></i></a>
                                </div>
                                <div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                                    <a href="{{ url('/registration-training-fy23-24');}}"> Retry Payment <i class="fas fa-caret-right"></i></a>
                                </div>
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
<!-- CHARTS -->
@endsection