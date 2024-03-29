
<!-- Start of Header section
	============================================= -->
	<header class="custom-header-style">
		<div id="main-menu"  class="main-menu-container header-style-2">
			<div class="header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							
						</div>
						<div class="col-md-6 top-right-bar">
							<div class="header-top-bar ul-li">
								<ul>
									<li><a href="mailto:{{get_theme_setting('university_email')}}" ><i class="fas fa-envelope"></i>Mail Us: {{get_theme_setting('university_email')}}</a></li>
									<li><a href="tel:{{get_theme_setting('university_mobile')}}" ><i class="fas fa-phone-square"></i>Call Us: {{get_theme_setting('university_mobile')}}</a></li>
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
							<a class="navbar-brand text-uppercase" href="{{ url('/') }}"><img src="https://www.icajobguarantee.com/assets/images/logo.png" alt="ICA Edu Skills"></a>
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