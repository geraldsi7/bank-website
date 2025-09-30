<div class="wrapper wrapper-full-page ">
	@include('layouts.navbars.navs.guest')
<div> 
		<div @if($activePage == 'welcome'  || $activePage == 'login' || $activePage == 'register' || $activePage == 'reset-password') class="full-page register-page section-image cover-dark" data-image="{{ $backgroundImage }}" @endif >
			@yield('content')
		</div>	
	</div>
</div>
@if($activePage == "welcome")
@yield('brief')
@endif
@if($activePage != "login" && $activePage != "register")
@include('layouts.footer')
@endif