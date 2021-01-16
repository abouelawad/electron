<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div>

<form action="{{ route('logout')}}" class="d-none" id="logoutForm" method="post">@csrf</form>
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">{{ __('main.products') }}</a></li>
						<li><a href="#">{{ __('main.categories') }}</a></li>
						@foreach ($cats as $cat)
                            <li><a href="#">{{ __($cat->name) }}</a></li>
                        @endforeach
						<li><a href="{{ route('local.set' , 'en') }}">EN</a></li>
						<li><a href="{{ route('local.set' , 'ar' ) }}">AR</a></li>
						@guest
						<li><a href="{{ route('register') }}">Register</a></li>
						<li><a href="{{ route('login') }}">Login</a></li>
						@endguest

						@auth
						<li><a id="logoutlink" href="#">Logout</a></li>
						@endauth
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->