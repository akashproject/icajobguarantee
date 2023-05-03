<div id="preloader"></div>
<!-- Start of Header section
	============================================= -->
	<header>
		<div id="main-menu"  class="main-menu-container header-style-2">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="header-top-text">
								<span>Online Course Photoshop Template</span>
							</div>
						</div>
						<div class="col-md-7">
							<div class="header-top-bar ul-li">
								<ul>
									<li><i class="fas fa-envelope"></i>Mail Us crm@icagroup.in</li>
									<li><i class="fas fa-phone-square"></i>Call Us +100 375 8899</li>
									<li><a data-toggle="modal" data-target="#myModal" href="#">Log In</a></li>
									<li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
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