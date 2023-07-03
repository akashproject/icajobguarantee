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

	<!-- Start of testimonial secound section
		============================================= -->
		<section id="testimonial_2" class="testimonial_2_section">
			<div class="container">
				<div class="testimonial-slide">
					<div class="section-title-2 mb65 headline text-left">
						<h2>Students <span>Testimonial.</span></h2>
					</div>

					<div id="testimonial-slide-item" class="testimonial-slide-area">
						<div class="student-qoute">
							<p>“Sharda University is an amazing place where the students get enormous knowledge and skills to learn and experience in their practical life. It has the best faculty with the industry ready curriculum to enhance each and every student to their full Potential. My mentor and all the faculty has helped me a lot to brush up my personality to grab all the opportunities of the upcoming future.”</p>
							<div class="student-name-designation">
								<span class="st-name bold-font">Gayatri Sharma</span>
								<span class="st-designation">B.Com (Finance &amp; Accounts)</span>
							</div>
						</div>

						<div class="student-qoute">
							<p>“I am Saurav Sarkar, of Batch 2020-22, B.SC (Data Science). I consider myself a lucky student, to explore the privileges of the Techno India University. The curriculum of the TIU is a unique program focusing on the practical aspects and the applications of the concepts. I thank TIU for such an innovative and practical approach to learning..”</p>
							<div class="student-name-designation">
								<span class="st-name bold-font">Saurav Sarkar</span>
								<span class="st-designation">B.Sc (Data Science)</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End  of testimonial secound section
		============================================= -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection