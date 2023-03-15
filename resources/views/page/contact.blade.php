@extends('layouts.main')

    @section('content')

    <!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">
							{{(isset($contentMain))?$contentMain->name:"Default Page" }}
						</h2>
					</div>
					<div class="page-breadcrumb-description">
						{!! (isset($contentMain))?$contentMain->description:"Default Description" !!}
					</div>
					<div class="page-breadcrumb-option">
						
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of contact section
		============================================= -->
		<section id="contact-page" class="contact-page-section">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">SEND US A MESSAGE</span>
					<h2>Keep<span> In Touch.</span></h2>
				</div>
				<div class="row">
					<div class="col-md-6" >
						<div class="contact_faq_box shadow_1">
							<div class="icon">

								<img src="{{ url('assets/img/customer-support-Icon.png') }}" alt="icon" class="image-fit-contain">

							</div>
							<div class="text">
								<h4>Get instant support</h4>
								<p>Talk to our expert counselor to enter into the career enhancement you are looking for.</p>
								<a href="tel:+{{ get_theme_setting('mobile') }}" class="genius-btn gradient-bg text-center text-uppercase">Call Us<i class="fas fa-chevron-right ml-2"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="contact_faq_box shadow_1">
							<div class="icon">
								<img src="{{ url('assets/img/question-Icon.png') }}" alt="icon" class="image-fit-contain">
							</div>
							<div class="text">
								<h4>Still have doubts?</h4>
								<p>Let's connect &amp; escalate all the doubts regarding the specialized course curriculum!</p>
								<a href="mailto:{{ get_theme_setting('email') }}" class="genius-btn gradient-bg text-center text-uppercase">Contact Us <i class="fas fa-chevron-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of contact section
		============================================= -->

	<!-- Start of contact area form
		============================================= -->
		<section id="contact-form" class="contact-form-area_3 contact-page-version">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Send us a message</span>
					<h2>Send Us A<span> Message.</span></h2>
				</div>
				
				<div class="contact_third_form">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
					@endif
					<form class="contact_form" action="{{ url('/save-contact') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-4">
								<div class="contact-info">
									<input class="name" name="name" type="text" placeholder="Your Name.">
								</div>
							</div>
							<div class="col-md-4">
								<div class="contact-info">
									<input class="email" name="email" type="email" placeholder="Your Email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="contact-info">
									<input class="mobile" name="mobile" type="number" placeholder="Phone Number">
								</div>
							</div>
						</div>
						<textarea name="message" placeholder="Message."></textarea>
						<div class="nws-button text-center  gradient-bg text-uppercase">
							<button type="submit" value="Submit">SEND EMAIL <i class="fas fa-caret-right"></i></button> 
						</div>
					</form>
				</div>
			</div>
		</section>
	<!-- End of contact area form
		============================================= -->


	<!-- Start of contact area
		============================================= -->
		<section id="contact-area" class="contact-area-section backgroud-style">
			<div class="container">
				<div class="contact-area-content">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-left-content">
								<div class="section-title  mb45 headline text-left">
									<span class="subtitle ml42  text-uppercase">CONTACT US</span>
									<h2><span>Get in Touch</span></h2>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet  ipsum dolor sit amet, consectetuer adipiscing elit.
									</p>
								</div>

								<div class="contact-address">
									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>{!! get_theme_setting('address') !!}</li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-phone"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Call: </span> <a  target="_blank" href="tel:{{get_theme_setting('mobile')}}" > {{ get_theme_setting('mobile') }} </a> </li>
												<li><span>Whatsapp : </span> <a target="_blank" href="https://api.whatsapp.com/send?phone={{get_theme_setting('whatsapp')}}" >{{get_theme_setting('whatsapp')}}</a></li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span><a  target="_blank" href="mailto:{{get_theme_setting('email')}}" >{{ get_theme_setting('email') }}</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div id="contact-map" class="contact-map-section">
								<div id="google-map">
									<div id="googleMaps" class="google-map-container">
										{!! get_theme_setting('gmap') !!}
									</div>
								</div><!-- /#google-map-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of contact area
		============================================= -->

    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection
