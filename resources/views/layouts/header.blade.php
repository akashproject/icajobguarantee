@if(check_device('desktop'))
<div id="preloader"></div>
@endif
<!-- Start of Header section
	============================================= -->
	<header>
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
							<div class="menu-item-has-children ul-li-block enroll-btn header-btn gradient-bg text-center text-uppercase ul-li-block bold-font" style="margin: 0;">
								<a href="{{ url('/courses') }}"> Courses <i class="fas fa-caret-down" style="color: #fff;"></i></a>
									<ul class="sub-menu">
										@foreach($courseTypes as $key => $value)
										<li><a target="_blank" href="{{url('/category')}}/{{$value->slug}}">{{$value->name}}</a></li>
										@endforeach												
									</ul>
							</div>
						</div><!-- /.navbar-header -->						
						<!-- <div class="cart-search float-right ul-li">
							<ul>
								<li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
								<li>
									<button type="button" class="toggle-overlay search-btn">
										<i class="fas fa-search"></i>
									</button>
									<div class="search-body">
										<div class="search-form">
											<form action="#">
												<input class="search-input" type="search" placeholder="Search Here">
												<div class="outer-close toggle-overlay">
													<button type="button" class="search-close">
														<i class="fas fa-times"></i>
													</button>
												</div>
											</form>
										</div>
									</div>
								</li>
							</ul>
						</div> -->
						<!-- <div class="log-in float-right">
							<a  data-toggle="modal" data-target="#myModal" href="#">log in</a>
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">

										<div class="modal-header backgroud-style">
											<div class="gradient-bg"></div>
											<div class="popup-logo">
												<img src="assets/img/logo/p-logo.jpg" alt="">
											</div>
											<div class="popup-text text-center">
												<h2> <span>Login</span> Your Account.</h2>
												<p>Login to our website, or <span>REGISTER</span></p>
											</div>
										</div>

										<div class="modal-body">
											<div class="facebook-login">
												<a href="#">
													<div class="log-in-icon">
														<i class="fab fa-facebook-f"></i>
													</div>
													<div class="log-in-text text-center">
														Login with Facebook
													</div>
												</a>
											</div>
											<div class="alt-text text-center"><a href="#">OR SIGN IN</a> </div>
											<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
												<div class="contact-info">
													<input class="name" name="Email" type="email" placeholder="Your@email.com*">
												</div>
												<div class="contact-info">
													<input class="pass" name="name" type="password" placeholder="Your password*">
												</div>
												<div class="nws-button text-center white text-capitalize">
													<button type="submit" value="Submit">LOg in Now</button> 
												</div> 
											</form>
											<div class="log-in-footer text-center">
												<p>* Denotes mandatory field.</p>
												<p>** At least one telephone number is required.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
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