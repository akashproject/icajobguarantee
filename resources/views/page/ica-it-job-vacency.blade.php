@extends('layouts.main')
    @section('content')
	<script>
         popUp = 0
	</script>
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

    <section>
        <div class="container" >
            <div class="row my-3" >
                <div class="col-md-4" >
                    <img src="https://www.icajobguarantee.com/public/upload/2024-07-19/advertisement.jpeg">
                </div>
                <div class="col-md-8" >
                    <h3> MP NSQF Recruitment and  Shortlisted Candidate Details -IT-ITES F.Y-2024-25 </h3>
                    <div class="row" >
                        <div class="col-md-4">
                            <div class="">
                                <iframe src="https://www.icajobguarantee.com/public/upload/2024-07-19/ica-application-form-mp.pdf" title="PDF Preview" width="100%" height="300px"></iframe>
                                <div class="blakish-overlay"></div>
                                <div class="pop-up-icon">
                                    <a href="https://www.icajobguarantee.com/public/upload/2024-07-19/ica-application-form-mp.pdf" data-lightbox="roadtrip">	<i class="fas fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center" >
                                <h6 style="height: 50px;font-weight: 600;color: #333;font-size: 17px;">  Application Form  </h6>
                                <a href="https://www.icajobguarantee.com/public/upload/2024-07-19/ica-application-form-mp.pdf" class="btn btn-success btn-medium text-white" download> Download </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <iframe src="https://www.icajobguarantee.com/public/upload/2024-07-19/it--vt-qualification_0001.pdf" title="PDF Preview" width="100%" height="300px" ></iframe>
                            <div class="blakish-overlay"></div>
                            <div class="pop-up-icon">
                                <a href="https://www.icajobguarantee.com/public/upload/2024-07-19/it--vt-qualification_0001.pdf" data-lightbox="roadtrip">
                                    <i class="fas fa-search"></i>
                                </a>
                            </div>
                            <div class="text-center">
                                <h6 style="height: 50px;font-weight: 600;color: #333;font-size: 17px;">Qualification Details</h6>
                                <a href="https://www.icajobguarantee.com/public/upload/2024-07-19/it--vt-qualification_0001.pdf" class="btn btn-success btn-medium text-white" download> Download </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <iframe src="https://www.icajobguarantee.com/public/upload/2024-07-19/mp-data-vt's-shortlist-data.pdf" title="PDF Preview" width="100%" height="300px"></iframe>
                                <div class="blakish-overlay"></div>
                                <div class="pop-up-icon">
                                    <a href="https://www.icajobguarantee.com/public/upload/2024-07-19/mp-data-vt's-shortlist-data.pdf" data-lightbox="roadtrip">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center" >
                                <h6 style="height: 50px;font-weight: 600;color: #333;font-size: 17px;"> Shortlisted Candidate Details -IT-ITES F.Y-2024-25 </h6>
                                <a href="https://www.icajobguarantee.com/public/upload/2024-07-19/mp-data-vt's-shortlist-data.pdf" class="btn btn-success btn-medium text-white" download> Download </a>
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