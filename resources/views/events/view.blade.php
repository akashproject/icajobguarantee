@extends('layouts.main')
    @section('content')
<!-- Start of breadcrumb section
		============================================= -->
        <section id="breadcrumb" class="inner-banner relative-position backgroud-style"  style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-9">

					<div class="inner-banner-breadcrumb" >
						<span class="breadcrumbElement"> 
							<a href="{{url('/')}}" > Home </a> 
						</span>
						<span class="breadcrumbElement"> 
							 <i class="fas fa-chevron-right"> </i>
						</span> 
						<span class="breadcrumbElement"> 
							{{(isset($contentMain))?$contentMain->name:"Default Page" }}
						 </span>
					</div>
					<div class="inner-banner-content">
						<div class="inner-banner-title">
							<h1>{{(isset($contentMain))?$contentMain->name:"Default Page" }}</h1>
						</div>
						<div class="inner-banner-description">
							{!! (isset($contentMain))?$contentMain->description:"Default Description" !!}
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
<!-- Start of Blog single content
		============================================= -->
		<section id="blog-detail" class="blog-details-section">
			<div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2>{{$contentMain->event}}</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                            <a onclick="lead_capture_form_btn(1,'')" href="javascript:void(0)"> Book Your Seat </a>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-md-3">

                    </div>
					<div class="col-md-8">
						<div class="blog-details-content">
							<div class="post-content-details">
								<div class="blog-detail-thumbnile mb35">
									<img src="{{ ($contentMain->banner_image)?getSizedImage('',$contentMain->banner_image):url('assets/img/logo/center-logo.webp') }}" alt="">
								</div>
								<h2>{{$contentMain->event}}</h2>

								<div class="date-meta text-uppercase">
									<span><i class="fas fa-calendar-alt"></i> 26 April 2018</span>
									<span><i class="fas fa-user"></i> OrPRO.THEO HENRY</span>
									<span><i class="fas fa-comment-dots"></i> 15 COMMENTS</span>
								</div>
                                <div>
                                    <h3> Speaker </h3>
                                    <div class="author-comment">
                                        <div class="author-img">
                                            <img src="{{ url('assets/img/blog/ath.jpg')}}" alt="">
                                        </div>
                                        <div class="author-designation-comment">
                                            BY: <span>{{$contentMain->speaker}}</span> 
                                            <p> ICA Faculty Trainer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="event_description">
								    {!! $contentMain->description !!}
                                </div>
							</div>
							
						</div>

					</div>

					<div class="col-md-4">
						<div class="about-resigter-form backgroud-style relative-position">
							<div class="register-content">
								<div class="register-fomr-title text-center">
									<h3 class="bold-font"><span>Get a</span> Free Registration.</h3>
									<p>More Than 122K Online Available Courses</p>
								</div>
								<div class="register-form-area">
									<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
										<div class="contact-info">
											<input class="name" name="name" type="text" placeholder="Your Name.">
										</div>
										<div class="contact-info">
											<input class="nbm" name="nbm" type="number" placeholder="Your Number">
										</div>
										<div class="contact-info">
											<input class="email" name="email" type="email" placeholder="Email Address.">
										</div>
										<div class="nws-button text-uppercase text-center white text-capitalize">
											<button type="submit" value="Submit">SUBMIT REQUEST </button> 
										</div> 
									</form>
								</div>
							</div>
						</div>
						<div class="bg-mockup">
							<img src="{{ url('assets/img/about/phone.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of Blog single content
		============================================= -->

    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection