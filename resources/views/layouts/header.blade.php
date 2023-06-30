
<!-- Start of Header section
	============================================= -->
	<header class="custom-header-style">
		<div id="main-menu"  class="main-menu-container header-style-2">
			<div class="header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-7">
							
						</div>
						<div class="col-md-5 top-right-bar">
							<div class="header-top-bar ul-li">
								<ul>
									<li><a href="mailto:{{get_theme_setting('email')}}" ><i class="fas fa-envelope"></i>Mail Us: {{get_theme_setting('email')}}</a></li>
									<li><a href="tel:{{get_theme_setting('mobile')}}" ><i class="fas fa-phone-square"></i>Call Us: {{get_theme_setting('mobile')}}</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-menu">
				<div class="container">
					<div class="navbar-default">
						<div class="navbar-header float-left">
							<a class="navbar-brand text-uppercase" href="{{ url('/') }}"><img src="{{ url('assets/images/logo.png') }}" alt="ICA Edu Skills"></a>
							<div class="menu-item-has-children ul-li-block enroll-btn header-btn gradient-bg text-center text-uppercase ul-li-block bold-font position-relative course-header-menu" style="margin: 0;">
								<a href="{{ url('/courses') }}"> Courses <i class="fas fa-caret-down" style="color: #fff;"></i></a>
								<ul class="sub-menu desktop-menu">
									@foreach($courseTypes as $key => $value)
									<li data-id="category-{{ $value->slug }}" >
										<a target="_blank" href="{{url('/category')}}/{{$value->slug}}">{{$value->name}}</a>
									</li>
									@endforeach	
									<li data-id="category-universities-course" >
										<a target="_blank" href="{{url('/universities-courses')}}">College Courses</a>
									</li>											
								</ul>
								<div class="submenu-courses">
									@foreach($courseTypes as $key => $value)
										<div  id="category-{{ $value->slug }}" class="category-courses-submenu {{ ($key == '0')?'active':'' }}">
											@foreach($value->courses as $course)
											<div class="menu-course" >
												<div class="course-list-img">
													<img src="{{ (isset($course->featured_image))?getSizedImage('thumb',$course->featured_image):URL::to('/assets/img/course/cl-1.jpg') }}" alt="">
												</div>
												<div class="course-content">
													<h6 class="">
														<a href="{{ url('courses')}}/{{ $course->slug }}"> {{ $course->name }} </a> 
													</h6>
													<div class="course-meta mt10 ">
														<span class="course-duration"><a href="#"><i class="fas fa-clock"></i>  {{ $course->duration}} </a></span>
														<span class="course-modules"><a href="#"><i class="fas fa-book"></i> {{ $course->no_of_module}} Modules </a></span>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									@endforeach		
								</div>
							</div>
						</div><!-- /.navbar-header -->						
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<nav class="navbar-menu float-right">
							<div class="nav-menu ul-li">
								<ul>
									@foreach ($primaryMenu as $key => $menuItem)
										<li class="">
											<a href="{{ url($key) }}">{{ $menuItem }}</a>
										</li>
									@endforeach
								</ul>
							</div>
						</nav>

						<div class="mobile-menu">
							<div class="logo"><a href="index-1.html"><img src="{{ url('assets/img/logo/logo.png') }}" alt="Logo"></a></div>
							<nav>
								<ul>
									@foreach ($primaryMenu as $key => $menuItem)
										<li class="">
											<a href="{{ url($key) }}">{{ $menuItem }}</a>
										</li>
									@endforeach
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>	
<!-- Start of Header section
	============================================= -->