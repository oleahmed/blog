

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="img/logo.png" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									@if(Auth::check())
									<a href="#home">Home</a>
									<a href="#about">Profile</a>
									<a href="{{route('user.logout')}}">Logout</a>

									@else
									<a href="{{route('user.login.show')}}">Login</a>
									<a href="{{route('user.register')}}">Register</a>

									@endif
																
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->