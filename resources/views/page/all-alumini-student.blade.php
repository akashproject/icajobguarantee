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
    
    	<!-- Start secound testimonial section
		============================================= -->
		
		
		<section id="sponsor" class="best-course-section">
			<div class="container">
				<div class="section-title mb35 headline text-center">
					<span class="subtitle text-uppercase">Student Placement</span>
					<h3>Our Alumni <span>Worked At.</span></h3>
				</div>
				<div class="row" >
					<div class="col-md-12" >
						@foreach(getJoinees(null,null,500) as $value)
						<div class="placed-grid-box">
							<div class="image-box">
								<img src="{{ url('assets/img/placements/'.strtolower(str_replace(' ','-',$value->name)).'.png') }}" alt="Student {{ $value->name }} placement in {{getCourseById($value->course_id)->name}} in {{ getCenterById($value->center_id)->name }}" style="height: 100%;">
							</div>
							<div class="box-content">
								<div class="box-title mt10">
									<h4>{{ $value->name }}</h4>
								</div>
								<p> Studied From : <strong ><a class="primary-color" target="_blank" href="/centers/{{getCenterById($value->center_id)->slug }}"> {{ getCenterById($value->center_id)->name }}</a> </strong> </p>
								<p> Placed At: <strong >{{ $value->placed_at }} </strong> </p>
								<p> Joining Salary: <strong >{{ number_format($value->joining_salary) }} </strong ></p>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
    	<!-- End secound testimonial section
		============================================= -->
    
    
    
    
        @endsection

@section('script')


@endsection