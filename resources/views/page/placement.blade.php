@extends('layouts.main')

    @section('content')
    <!-- Start of breadcrumb section
		============================================= -->
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style" style="background-image: url({{ (isset($page->banner_image))?getSizedImage('',$page->banner_image):url('assets/img/banner/brt-1.jpg') }});">
		<div class="blakish-overlay"></div>
		<div class="container">
			<div class="page-breadcrumb-content">
				<div class="page-breadcrumb-title">
					<h2 class="breadcrumb-head black bold">
						{{(isset($page))?$page->name:"Default Page" }}
					</h2>
				</div>
				<div class="page-breadcrumb-description">
					{!! (isset($page))?$page->description:"Default Description" !!}
				</div>
				<div class="page-breadcrumb-option">
					
				</div>
			</div>
		</div>
	</section>
	<!-- End of breadcrumb section
		============================================= -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection