<div class="sidebar" data-color="white">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="{{ route('welcome') }}">
      <img src="{{ asset('assets/img/label3.png') }}" style="border-radius: 50%;">
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      
      <li class="@if ($activePage == 'cards') active @endif">
        <a href="{{ route('cards') }}">
          <i class="now-ui-icons shopping_credit-card"></i>
          <p>{{ __('cards') }}</p>
        </a>
      </li>


      <li class="@if ($activePage == 'history') active @endif">
        <a href="{{ route('history') }}">
          <i class="now-ui-icons arrows-1_share-66"></i>
          <p>{{ __('transaction history') }}</p>
        </a>
      </li>

      
      <li class="profile @if ($activePage == 'profile') active @endif">
        <a href="{{ route('profile.edit') }}">
          <i class="now-ui-icons users_single-02"></i>
          <p>{{ auth()->user()->name }}</p>
        </a>
      </li>

      <li class="logout">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
          <i class="now-ui-icons media-1_button-power"></i>
          <p>{{ __('Logout') }}</p>
        </a>
      </li>

    </ul>

  </div>
</div>