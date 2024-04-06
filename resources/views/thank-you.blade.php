@extends('layouts.main')
    @section('content')
	<script>
         popUp = 0
	</script>

    <!-- Start of breadcrumb section

		============================================= -->

	<section id="breadcrumb" class="inner-banner relative-position backgroud-style"  style="background-image: url('https://www.icajobguarantee.com/public/upload/2023-05-15/inner-banners.jpg');">
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
							{{(isset($contentMain))?$contentMain->name:"Thank You" }}
						 </span>

					</div>

					<div class="inner-banner-content">
						<div class="inner-banner-title">
							<h1>{{(isset($contentMain))?$contentMain->name:"Thank You" }}</h1>
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



	<div class="container" >
		<div class="row justify-content-center mt60" >
			<div class="col-md-6 text-center" >
				<div class="form-success-content">
					<span class="success-icon"> <i class="fas fa-check"></i> </span>
					<h4> {{ $thankYouMsg }} </h4>
				</div>
			</div>
		</div>
	</div>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection