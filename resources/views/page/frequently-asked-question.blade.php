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

<!-- Start FAQ section
		============================================= -->
		<section id="faq-page" class="faq-page-section">
			<div class="container">
				<div class="faq-element">
					<div class="row">
						<div class="col-md-9">
							<div class="faq-page-tab">
								<div class="section-title-2 mb65 headline text-left">
									<h2>Find <span>Your Questions & Answers.</span></h2>
								</div>

								<div class="faq-tab faq-secound-home-version mb35">
									<div class="faq-tab-ques  ul-li">
										<div class="tab-button text-left mb45">
											<ul class="product-tab">
												<li class="active" rel="tab1">GENERAL </li>
												<li rel="tab2"> COURSES </li>
												<li rel="tab3"> TEACHERS </li>
												<li rel="tab4">  EVENTS  </li>
												<li rel="tab5">  OTHERS  </li>
											</ul>
										</div>
										<!-- /tab-head -->

										<!-- tab content -->
										<div class="tab-container">

											<!-- 1st tab -->
											<div id="tab1" class="tab-content-1 pt35">
												<div id="accordion" class="panel-group">
													<div class="row">
														<div class="col-md-6">
															<div class="panel">
																<div class="panel-title" id="headingOne">
																	<h3 class="mb-0">
																		<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
																			How to Register or Make An Account in Genius?
																		</button>
																	</h3>
																</div>
																<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
																	<div class="panel-body">
																		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
																	</div>
																</div>
															</div>
															<div class="panel">
																<div class="panel-title" id="headingTwo">
																	<h3 class="mb-0">
																		<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
																			What is Genius Courses?
																		</button>
																	</h3>
																</div>
																<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
																	<div class="panel-body">
																		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
																	</div>
																</div>
															</div>
															<div class="panel">
																<div class="panel-title" id="headingThree">
																	<h3 class="mb-0">
																		<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
																			What Lorem Ipsum Dolor Sit Amet Consectuerer?
																		</button>
																	</h3>
																</div>
																<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
																	<div class="panel-body">
																		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
																	</div>
																</div>
															</div>
															<div class="panel">
																<div class="panel-title" id="heading65">
																	<h3 class="mb-0">
																		<button class="btn btn-link  collapsed" data-toggle="collapse" data-target="#collapse65" aria-expanded="true" aria-controls="collapse65">
																			How to Register or Make An Account in Genius?
																		</button>
																	</h3>
																</div>
																<div id="collapse65" class="collapse" aria-labelledby="heading65" data-parent="#accordion">
																	<div class="panel-body">
																		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
																	</div>
																</div>
															</div>
															<div class="panel">
																<div class="panel-title" id="heading78">
																	<h3 class="mb-0">
																		<button class="btn btn-link  collapsed" data-toggle="collapse" data-target="#collapse78" aria-expanded="true" aria-controls="collapse78">
																			How to Register or Make An Account in Genius?
																		</button>
																	</h3>
																</div>
																<div id="collapse78" class="collapse" aria-labelledby="heading78" data-parent="#accordion">
																	<div class="panel-body">
																		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
																	</div>
																</div>
															</div>
														</div>

														<div class="col-md-6">
															<div class="panel">
																<div class="panel-title" id="heading22">
																	<h3 class="mb-0">
																		<button class="btn btn-link" data-toggle="collapse" data-target="#collapse22" aria-expanded="true" aria-controls="collapse22">
																			How to Register or Make An Account in Genius?
																		</button>
																	</h3>
																</div>
																<div id="collapse22" class="collapse show" aria-labelledby="heading22" data-parent="#accordion">
																	<div class="panel-body">
																		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
																	</div>
																</div>
															</div>
															<div class="panel">
																<div class="panel-title" id="headingFoure">
																	<h3 class="mb-0">
																		<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="true" aria-controls="collapseFoure">
																			Adipiscing Diamet Nonnumy Nibh Euismod?
																		</button>
																	</h3>
																</div>
																<div id="collapseFoure" class="collapse"  data-parent="#accordion">
																	<div class="panel-body">
																		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
																	</div>
																</div>
															</div>
															<div class="panel">
																<div class="panel-title" id="heading33">
																	<h3 class="mb-0">
																		<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse33" aria-expanded="true" aria-controls="collapse33">
																			What is Genius Courses?
																		</button>
																	</h3>
																</div>
																<div id="collapse33" class="collapse" aria-labelledby="heading33" data-parent="#accordion">
																	<div class="panel-body">
																		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
																	</div>
																</div>
															</div>
															<div class="panel">
																<div class="panel-title" id="heading36">
																	<h3 class="mb-0">
																		<button class="btn btn-link  collapsed" data-toggle="collapse" data-target="#collapse36" aria-expanded="true" aria-controls="collapse36">
																			How to Register or Make An Account in Genius?
																		</button>
																	</h3>
																</div>
																<div id="collapse36" class="collapse" aria-labelledby="heading36" data-parent="#accordion">
																	<div class="panel-body">
																		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
																	</div>
																</div>
															</div>
															<div class="panel">
																<div class="panel-title" id="heading998">
																	<h3 class="mb-0">
																		<button class="btn btn-link  collapsed" data-toggle="collapse" data-target="#collapse998" aria-expanded="true" aria-controls="collapse998">
																			How to Register or Make An Account in Genius?
																		</button>
																	</h3>
																</div>
																<div id="collapse998" class="collapse" aria-labelledby="heading998" data-parent="#accordion">
																	<div class="panel-body">
																		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- end of #accordion -->
												</div>
											</div>
											<!-- #tab1 -->

											<div id="tab2" class="tab-content-1 pt35">
												<div id="accordion-2" class="panel-group">
													<div class="panel">
														<div class="panel-title" id="headingSix">
															<h3 class="mb-0">
																<button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
																	How to Register or Make An Account in Genius?
																</button>
															</h3>
														</div>
														<div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion-2">
															<div class="panel-body">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
															</div>
														</div>
													</div>
													<div class="panel">
														<div class="panel-title" id="headingSeven">
															<h3 class="mb-0">
																<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
																	What is Genius Courses?
																</button>
															</h3>
														</div>
														<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion-2">
															<div class="panel-body">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
															</div>
														</div>
													</div>
													<div class="panel">
														<div class="panel-title" id="headingEight">
															<h3 class="mb-0">
																<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
																	What Lorem Ipsum Dolor Sit Amet Consectuerer?
																</button>
															</h3>
														</div>
														<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion-2">
															<div class="panel-body">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
															</div>
														</div>
													</div>
													<div class="panel">
														<div class="panel-title" id="headingNine">
															<h3 class="mb-0">
																<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
																	Adipiscing Diamet Nonnumy Nibh Euismod?
																</button>
															</h3>
														</div>
														<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion-2">
															<div class="panel-body">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam consectetuer adipiscing elit, sed diam nonummy.
															</div>
														</div>
													</div>
												</div>
												<!-- end of #accordion -->
											</div>
											<!-- #tab2 -->

											<div id="tab3" class="tab-content-1 pt35">
												<div class="row">
													<div class="col-md-6">
														<div class="ques-ans mb45 headline">
															<h3> What is Genius Courses?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>

														<div class="ques-ans mb45 headline">
															<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>
													</div>

													<div class="col-md-6">
														<div class="ques-ans mb45 headline">
															<h3> How to Register or Make An Account in Genius?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>

														<div class="ques-ans mb45 headline">
															<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- #tab3 -->

											<div id="tab4" class="tab-content-1 pt35">
												<div class="row">
													<div class="col-md-6">
														<div class="ques-ans mb45 headline">
															<h3> What is Genius Courses?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>

														<div class="ques-ans mb45 headline">
															<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>
													</div>

													<div class="col-md-6">
														<div class="ques-ans mb45 headline">
															<h3> How to Register or Make An Account in Genius?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>

														<div class="ques-ans mb45 headline">
															<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- #tab3 -->

											<div id="tab5" class="tab-content-1 pt35">
												<div class="row">
													<div class="col-md-6">
														<div class="ques-ans mb45 headline">
															<h3> What is Genius Courses?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>

														<div class="ques-ans mb45 headline">
															<h3> What Lorem Ipsum Dolor Sit Amet Consectuerer?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>
													</div>

													<div class="col-md-6">
														<div class="ques-ans mb45 headline">
															<h3> How to Register or Make An Account in Genius?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>

														<div class="ques-ans mb45 headline">
															<h3> Adipiscing Diamet Nonnumy Nibh Euismod?</h3>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- #tab3 -->
										</div>
									</div>
								</div>
							</div>
							<div class="about-btn">
								<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
									<a href="#">Make Question <i class="fas fa-caret-right"></i></a>
								</div>
								<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
									<a href="#">contact us <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End FAQ section
		============================================= -->
        		
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection