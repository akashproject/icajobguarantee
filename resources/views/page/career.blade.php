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
	<!-- End of breadcrumb section
		============================================= -->


	<section class="best-course-section"> 
		<div class="container">
			<div class="row" >
				<div class="col-md-12" >
					<ul class="career-filter" >
						@foreach(getJobTypes() as $value)
						<li class="career-item" >
							<a href="" class="career-category" > {{$value->name}} </a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="blog-item">
		<div class="container">
			<div class="blog-content-details">
				<div class="row">
					<div class="blog-list-view">
						@foreach(getJobs() as $value)
						<div class="list-career-item">
							<div class="row">								
								<div class="col-md-9">
									<div class="blog-title-content headline">
										<h3><a href="#">{{$value->name}}</a></h3>
										<div class="blog-content">
											{!! $value->description !!}
										</div>
										
										<ul class="career-tag" >
											<li class="career-tag-item" >
												<a href="javascript:void(0)" class="career-category" ><i class="fas fa-map-marker" > </i> {{ $value->location }} </a>
											</li>
											<li class="career-tag-item" >
												<a href="javascript:void(0)" class="career-category" > <i class="fas fa-clock" > </i> {{ $value->type }}</a>
											</li>
											<li class="career-tag-item" >
												<a href="javascript:void(0)" class="career-category" > <i class="fas fa-rupee-sign"></i> {{ $value->salary }}</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-2 career-apply">
									<div class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a data-toggle="modal" data-target="#job-application-form" href="javascript:void(0)"> Apply Now </a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
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