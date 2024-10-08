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


	<!-- Start of contact section
		============================================= -->
		<section id="contact-page" class="contact-page-section">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">SEND US A MESSAGE</span>
					<h2>Keep<span> In Touch.</span></h2>
				</div>
				<div class="social-contact">
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-facebook-f"></i>
						</div>
						<div class="category-title">
							<h4>Facebbok</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-twitter"></i>
						</div>
						<div class="category-title">
							<h4>Twitter</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-google-plus-g"></i>
						</div>
						<div class="category-title">
							<h4>Google +</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-behance"></i>
						</div>
						<div class="category-title">
							<h4>Behance</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-instagram"></i>
						</div>
						<div class="category-title">
							<h4>Instagram</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-dribbble"></i>
						</div>
						<div class="category-title">
							<h4>Dribble</h4>
						</div>
					</div>
					<div class="category-icon-title text-center">
						<div class="category-icon">
							<i class="text-gradiant fab fa-deviantart"></i>
						</div>
						<div class="category-title">
							<h4>Devianart</h4>
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
					<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
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
									<input class="number" name="number" type="number" placeholder="Phone Number">
								</div>
							</div>
						</div>
						<textarea  placeholder="Message."></textarea>
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
												<li><span>Primary: </span>Last Vegas, 120 Graphic Street, US</li>
												<li><span>Second: </span>Califorinia, 88 Design Street, US</li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-phone"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>(100) 3434 55666</li>
												<li><span>Second: </span>(20) 3434 9999</li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Primary: </span>info@geniuscourse.com</li>
												<li><span>Second: </span>mail@genius.info</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a href="#">Contact Us <i class="fas fa-caret-right"></i></a>
							</div>
						</div>

						<div class="col-md-6">
							<div id="contact-map" class="contact-map-section">
								<div id="google-map">
									<div id="googleMaps" class="google-map-container"></div>
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
