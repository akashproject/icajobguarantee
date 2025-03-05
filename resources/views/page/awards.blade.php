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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

        <script>
            $(document).ready(function () {
                $('.popup-link').magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true 
                    }
                });
            });
        </script>
		<section id="about-page" class="about-page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="watermark" >
                    <div class="product-showcase">
                        <div class="genius-shop-item">
                            <div class="tab-container">
                                <div id="tab1" class="tab-content-1 best-product-section">
                                    <div class="row">
                                            <div class="col-md-4 award-item" style="text-align: center;">
                                                <h5 class="center award-title watermark">Best Digital Technologies Usages</h5>                                            
                                                <div class="circular-watermark">2024</div>
                                                <div class="award-image-wrapper">
                                                    <a href="https://www.icajobguarantee.com/public/upload/awards/1-EducationWorld India Higher Rankings Awards 2023-24.webp" class="popup-link">
                                                        <img src="https://www.icajobguarantee.com/public/upload/awards/1-EducationWorld India Higher Rankings Awards 2023-24.webp" alt="Best Digital Technologies Usages" />
                                                    </a>
                                                </div>                                            
                                            </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">National Leadership Excellence Award</h5>
                                            <div class="circular-watermark">2018</div>
                                            <div class="award-image-wrapper">
                                                  <a href="https://www.icajobguarantee.com/public/upload/awards/2-assocham-national-leadership-excellence-2018.webp" class="popup-link">
                                                        <img src="https://www.icajobguarantee.com/public/upload/awards/2-assocham-national-leadership-excellence-2018.webp" alt="National Leadership Excellence Award" />
                                                 </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                        <h5 class="award-title">Best Vocational Training Institute</h5>
                                        <div class="circular-watermark">2018</div>
                                            <div class="award-image-wrapper">
                                                <a href="https://www.icajobguarantee.com/public/upload/awards/2-indian-education-excellence-2018.webp" class="popup-link">
                                                    <img src="https://www.icajobguarantee.com/public/upload/awards/2-indian-education-excellence-2018.webp" alt="Best Vocational Training Institute" />
                                                </a>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 award-item">  
                                        <h5 class="award-title">Business Excellence Award</h5>
                                        <div class="circular-watermark">2017</div>
                                            <div class="award-image-wrapper">
                                                <a href="https://www.icajobguarantee.com/public/upload/awards/2-hope certificate-2017.webp" class="popup-link">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/2-hope certificate-2017.webp" alt="Business Excellence Award" />
                                                </a>
                                            </div>                                      
                                        
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Best Vocational Training Institute</h5>
                                            <div class="circular-watermark">2016</div>
                                            <div class="award-image-wrapper">
                                                <a href="https://www.icajobguarantee.com/public/upload/awards/3-Asia Education Summit & Awards Certificate_Year 2016.webp" class="popup-link">
                                                    <img src="https://www.icajobguarantee.com/public/upload/awards/3-Asia Education Summit & Awards Certificate_Year 2016.webp" alt="Best Vocational Training Institute" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                        <h5 class="award-title">Best Accounts & Finance Training</h5>
                                        <div class="circular-watermark">2016</div>
                                            <div class="award-image-wrapper">
                                                <a href="https://www.icajobguarantee.com/public/upload/awards/3-National Education Excellence Awards 2016.webp" class="popup-link">
                                                    <img src="https://www.icajobguarantee.com/public/upload/awards/3-National Education Excellence Awards 2016.webp" alt="Best Accounts & Finance Training" />
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Best Vocational Training Institute</h5>
                                            <div class="circular-watermark">2016</div>
                                            <div class="award-image-wrapper">
                                            <a href="https://www.icajobguarantee.com/public/upload/awards/3-Best Brand of the Year_The Institute of Computer Accountants_Year 2016.webp" class="popup-link">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/3-Best Brand of the Year_The Institute of Computer Accountants_Year 2016.webp" alt="Best Vocational Training Institute" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Best Vocational Training Institute</h5>
                                            <div class="circular-watermark">2016</div>
                                            <div class="award-image-wrapper">
                                                <a href="https://www.icajobguarantee.com/public/upload/awards/3-Best Brand Achiever of The Year 2016.webp" class="popup-link">
                                                   <img src="https://www.icajobguarantee.com/public/upload/awards/3-Best Brand Achiever of The Year 2016.webp" alt="Best Vocational Training Institute" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Quality Vocational Training Award</h5>
                                            <div class="circular-watermark">2015</div>
                                            <div class="award-image-wrapper">
                                            <a href="https://www.icajobguarantee.com/public/upload/awards/5-GQA_Brand Academy 2015_Award.webp" class="popup-link">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/5-GQA_Brand Academy 2015_Award.webp" alt="Quality Vocational Training Award" />
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 award-item">
                                        <h5 class="award-title">Best Vocational Education Program</h5>
                                        <div class="circular-watermark">2014</div>
                                            <div class="award-image-wrapper">
                                                <a href="https://www.icajobguarantee.com/public/upload/awards/4-Best Vocational Course_Indian education certificate 18-6-14.webp" class="popup-link">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/4-Best Vocational Course_Indian education certificate 18-6-14.webp" alt="Best Vocational Education Program" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">Best Vocational Training Company</h5>
                                            <div class="circular-watermark">2014</div>
                                            <div class="award-image-wrapper">
                                            <a href="https://www.icajobguarantee.com/public/upload/awards/4-Best Vocational Training Company_Brands Academy Certificate Year 2014.webp" class="popup-link">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/4-Best Vocational Training Company_Brands Academy Certificate Year 2014.webp" alt="Best Vocational Training Company" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 award-item">
                                            <h5 class="award-title">TOP 100 Franchisee Opportunities</h5>
                                            <div class="circular-watermark">2014</div>
                                            <div class="award-image-wrapper">
                                            <a href="https://www.icajobguarantee.com/public/upload/awards/3-Certificate_TOP_100_Franchisee_Opportunities (Year 2013-14 & Year 2015-16).webp" class="popup-link">
                                                <img src="https://www.icajobguarantee.com/public/upload/awards/3-Certificate_TOP_100_Franchisee_Opportunities (Year 2013-14 & Year 2015-16).webp" alt="TOP 100 Franchisee Opportunities" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div >
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
        margin-top: 4px;
    }

    .award-image-wrapper img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #ddd;
    }
    .award-item {
    position: relative; 
    overflow: hidden; 
    }
    .watermark {
    position: relative;
    display: inline-block;
}

.award-image-wrapper img {
    display: block;
    width: 100%;
    height: auto;
}

.watermark {
    position: relative;
    display: inline-block;
}

.award-image-wrapper img {
    display: block;
    width: 100%;
    height: auto;
}

.circular-watermark {
    position: absolute;
    top: 60px; /* Adjusted to position it lower */
    left: 10px;
    width: 60px;
    height: 60px;
    background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black */
    color: white;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    line-height: 60px; /* Align text vertically */
    border-radius: 50%; /* Circular shape */
    pointer-events: none; /* Prevent interaction with the watermark */
}
.award-image-wrapper img {
        display: block;
        width: 100%;
        max-width: 450px;
        height: 300px;
        object-fit: cover;
        border-radius: 8px;
        border: 5px solid #ddd;
        margin: 0 auto;
    }




    
</style>


	<!-- End of awards and recognitions content

		============================================= -->



    @endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection