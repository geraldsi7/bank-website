<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute">
  <div class="container-fluid">
  <a class="navbar-brand" href="{{ route('welcome') }}">
        <img src="{{ asset('assets') }}/img/label.png" class="d-none d-md-block" width="300">
        <img src="{{ asset('assets') }}/img/favicon.png" class="d-md-none" width="50">
      </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end bg-primary" id="navigation">
      <ul class="navbar-nav">
        <li class="nav-item @if ($activePage == 'welcome') active @endif"><a  class="nav-link" href="{{ route('welcome') }}" aria-current="page">HOME</a></li>
        <li class="nav-item  @if ($activePage == 'cc') active @endif"><a class="nav-link" href="{{ route('cc') }}">Credit Cards</a></li>
        <li class="nav-item  @if ($activePage == 'careers') active @endif"><a class="nav-link" href="{{ route('careers') }}">Careers</a></li>
        <li class="nav-item  @if ($activePage == 'services') active @endif"><a class="nav-link" href="{{ route('services') }}">Our Services</a></li>
        <li class="nav-item @if ($activePage == 'about') active @endif"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
<!--        <li class="nav-item  @if ($activePage == 'credit-rewards') active @endif"><a class="nav-link" href="{{ route('credit-rewards') }}"><i class="now-ui-icons objects_diamond"></i> Credit Rewards</a></li>
-->  
        <li class="nav-item  @if ($activePage == 'contact') active @endif"><a class="nav-link" href="{{ route('contact') }}">Contact us</a></li>
        
       <!-- <li class="nav-item  @if ($activePage == 'benefits') active @endif"><a class="nav-link" href="{{ route('benefits') }}"><i class="now-ui-icons objects_support-17"></i> Our Benefits</a></li>
-->
       @auth
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="now-ui-icons design_app"></i> {{ __("Dashboard") }}
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons users_single-02"></i>
            <p>
              <span class="d-lg-none d-md-block">{{ __("Account") }}</span>
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __("My profile") }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
        </div>
      </li>
      @endauth
      @guest
      <li class="nav-item @if ($activePage == 'register') active @endif">
        <a href="{{ route('contact') }}" class="nav-link">{{ __("Register") }}
        </a>
      </li>
      <li class="nav-item @if ($activePage == 'login') active @endif ">
        <a href="{{ route('login') }}" class="nav-link">{{ __("Login") }}
        </a>
      </li>
      @endguest
    </ul>
  </div>
</div>
</nav>
<!-- End Navbar -->