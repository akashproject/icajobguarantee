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

		

	<!-- Start of awards and recognitions content
		============================================= -->

		<section id="about-page" class="about-page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="product-showcase">
                        <div class="genius-shop-item">
                            <div class="tab-container">
                                <div id="tab1" class="tab-content-1 best-product-section">
                                    <div class="row">
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">EducationWorld India Higher Rankings Awards</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/1-EducationWorld India Higher Rankings Awards 2023-24.webp" alt="EducationWorld India Higher Rankings Awards" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Assocham National Leadership Excellence</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/2-assocham-national-leadership-excellence-2018.webp" alt="Assocham National Leadership Excellence" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Best Vocational Indian Education Certificate</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/4-Best Vocational Course_Indian education certificate 18-6-14.webp" alt="Best Vocational Indian Education Certificate" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Indian Education Excellence 2018</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/2-indian-education-excellence-2018.webp" alt="Indian Education Excellence 2018" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Asia Education Summit & Awards Certificate</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/3-Asia Education Summit & Awards Certificate_Year 2016.webp" alt="Asia Education Summit & Awards Certificate" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Best Brand Achiever of The Year</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/3-Best Brand Achiever of The Year 2016.webp" alt="Best Brand Achiever of The Year" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Best Brand of the Year</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/3-Best Brand of the Year_The Institute of Computer Accountants_Year 2016.webp" alt="Best Brand of the Year" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">GQA Brand Academy 2015 Award</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/5-GQA_Brand Academy 2015_Award.webp" alt="GQA Brand Academy 2015 Award" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">National Education Excellence Awards</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/3-National Education Excellence Awards 2016.webp" alt="National Education Excellence Awards" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Hope Certificate</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/2-hope certificate-2017.webp" alt="Hope Certificate" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Best Vocational Training Company Brands Academy Certificate</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/4-Best Vocational Training Company_Brands Academy Certificate Year 2014.webp" alt="Best Vocational Training Company Brands Academy Certificate" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">TOP 100 Franchisee Opportunities</h5>
                                            <div class="award-image-wrapper">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/3-Certificate_TOP_100_Franchisee_Opportunities (Year 2013-14 & Year 2015-16).webp" alt="TOP 100 Franchisee Opportunities" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .award-item {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        padding: 15px;
        margin-bottom: 28px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    .award-item:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .award-title {
        color: #5E6AF5;
        font-weight: bold;
        border-bottom: 3px solid #5E6AF5;
        padding-bottom: 5px;
        margin-bottom: 15px;
        text-align: center;
    }

    .award-image-wrapper {
        text-align: center;
        margin-top: 10px;
    }

    .award-image-wrapper img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #ddd;
    }
</style>


	<!-- End of awards and recognitions content

		============================================= -->



    @endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection