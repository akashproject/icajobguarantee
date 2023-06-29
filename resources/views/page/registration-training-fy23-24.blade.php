@extends('layouts.ad-main')
    @section('content')
    {{$contentMain->sendBrochure = null}}
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
    <section class="header-devider"></section>
    <section class="header-margin"></section>
    <section style="background: #eeeeee;">
        <div class="container">
            <div class="row justify_center">	
                <div class="col-md-3">
                </div>	
                <div class="col-md-6">
                    <div class="form-container bg-white" >
                        <div class="gradient-bg"></div>
                        <div class="popup-text text-center gradient-bg text-white mb30">
                            <h3 style="text-transform: uppercase;font-size: 25px;"> public speaking &amp; counsellor training</h3> 
                            <h4>Registration For FY 23-24</h4>
                            
                        </div>
                        <div class="popup_banner_form_wrapeer" > 
                            <form id="global_other_details_form" class="contact_form lead_form" action="{{ url('global-other-form-submit') }}" method="POST" enctype="multipart/form-data">
                                <div class="form_process" >
                                    <div class="lead_steps step1 active" > 
                                    @csrf
                                        <div class="contact-info formFieldName">
                                            <input id="formFieldName" name="name" type="text" placeholder="Enter Your Name" autocomplete="off" required>
                                        </div>
                                        <div class="contact-info formFieldEmail">
                                            <input id="formFieldEmail" name="email" type="email" placeholder="Enter Your Email" autocomplete="off" required>
                                        </div>
                                        <div class="contact-info formFieldMobile">
                                            <input id="formFieldMobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" min="6000000000" max="9999999999" required>
                                        </div>
                                        <div class="contact-info formFieldCenter">
                                            <input id="formFieldCenter" name="center" type="text" placeholder="Enter Your Center Name" autocomplete="off" required>
                                        </div>
                                        <div class="register-form-area">
                                            <select id="formFieldLocation" class="partners" name="partners" required>
                                                <option value="">Select venue - Partner</option>
                                                <option value="Kolkata - July 25, July 26">Kolkata - July 25 and 26th</option>
                                                <option value="Delhi - August 2nd and 3rd">Delhi - August 2nd and 3rd</option>
                                                <option value="Mumbai/Navi Mumbai - Aug 1st, Aug 2nd">Mumbai/Navi Mumbai - August 5th and 6th</option>

                                            </select>
                                        </div>
                                        <div class="register-form-area">
                                            <select id="formFieldDate" class="counselors" name="counselors" required>
                                                <option value="">Select venue - Counselors</option>
                                                <option value="Kolkata - August 9th">Kolkata - August 9th</option>
                                                <option value="Delhi - August 1st">Delhi - August 1st</option>
                                                <option value="Mumbai/Navi Mumbai - August 4th">Mumbai/Navi Mumbai - August 4th</option>
                                                <option value="Bengaluru - August 7th">Bengaluru - August 7th</option>
                                            </select>
                                        </div>
                                        <div class="form-group text-left mt10 mb10" style="color: #2e2e2e;">  
                                            <strong> **Note : Registration Fee **</strong>
                                            <ul style="font-size: 14px;"> 
                                                <li> <strong> Partner - Rs. 8500/- + Taxes</strong> </li>
                                                <li> <strong> Counsellor - Rs. 5000/- + Taxes (Refundable post completion)</strong> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    @include('common.leadCaptureFormOtpField')                           
                                </div>
                            </form>  
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