@extends('layouts.main')

    @section('content')
	<section id="shop-product" class="shop-product-section">
		<div class="container">
			<div class="product-item">
				<div class="row">
					<div class="col-md-12">
						<div class="shop-product-item">
							<div class="short-filter-tab">

							</div>

							<div class="product-showcase">
								<div class="genius-shop-item">
									<div class="tab-container">
										<div id="tab1" class="tab-content-1 best-product-section">
											<div class="row">
												@foreach(getNews() as $value)
												<div class="col-md-3">
													<div class="">
														<div class="product-img text-center mb10">
															<img src="{{ ($value->featured_image)?getSizedImage('',$value->featured_image):url('assets/img/logo/center-logo.webp') }}" alt="">
														</div>

														<div class="product-text-content text-center mb20">
															<div class="best-title-price">
																<div class="course-title headline">
																	<h3><a target="_blank" href="{{ $value->link }}">{{ $value->name }}</a></h3>
																</div>
																<div>
																	{!! $value->description !!}
																</div>
															</div>		
														</div>
														<div class="more-btn text-center" >
															<div class="course-type-list">	
																<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn('',{{ $value->id }})"><i class="fas fa-download"></i> Brochure</a>
															</div>
															<div class="course-type-list">														
																<a class="btn-outline" target="_blank" href="{{ $value->link }}" > Explore <i class="fas fa-caret-right"></i></a>
															</div>	
														</div>
													</div>
												</div>
												@endforeach													
											</div>
										</div><!-- tab-1 -->
									</div>
								</div>
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