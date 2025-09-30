<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Connecting all your banking needs. Making It Easy For You." />
  <meta name="keywords" content="zeddbank,zedd,zedd bank,uk,cardiff,city">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/favicon.png">
  <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Extra details for Live View on GitHub Pages -->
  <title>    
  @isset($namePage)
            {{ $namePage }} | 
  @endisset
        {{ config('app.name') }}
        @empty($namePage)
    - {{ config('app.subtitle') }}
        @endempty
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Montserrat:wght@800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- CSS Files -->
  <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" />

  <link href="{{ asset('assets') }}/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="{{ asset('assets') }}/demo/demo.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <!--
    <script src="https://kit.fontawesome.com/b2a6b0d35f.js" crossorigin="anonymous"></script>
-->
  </head>

<body class="{{ $class ?? '' }}">


  <style type="text/css">

  .image-fill{
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .tns-nav{
    text-align: center;
    margin: 15px 0 15px 0;
  }

  .tns-nav button{
    height: 12px;
    width: 12px;
    background: gray;
    border: none;
    margin-left: 7px;
    border-radius: 50%
  }

  .tns-nav .tns-nav-active{
    background: #052c64;
    border-color: #052c64;
  }

  .grid-container{
    display: grid;
    grid-template-columns: repeat(1, 100%);
    grid-auto-rows: minmax(100px, auto);
    grid-gap: 20px;
  }

  @media(max-width: 700px){
  .counters{
    grid-template-columns: repeat(1, 1fr);
  }
}


/* XX-Large devices (larger desktops)
/* No media query since the xxl breakpoint has no upper bound on its width */
</style>
<div class="wrapper">
  @auth
  @if(
  $activePage == 'home' || 
  $activePage == 'history' || 
  $activePage == 'invoice'  || 
  $activePage == 'budgets' || 
  $activePage == 'cards' || 
  $activePage == 'add-ssa' || 
  $activePage == 'manage-ssa' || 
  $activePage == 'add-title' || 
  $activePage == 'manage-title'|| 
  $activePage == 'add-menu' || 
  $activePage == 'manage-menu' ||
  $activePage == 'add-customer' || 
  $activePage == 'manage-customer' ||
  $activePage == 'add-user' || 
  $activePage == 'manage-user' ||  
  $activePage == 'add-dept' || 
  $activePage == 'manage-dept' ||
  $activePage == 'profile')
  
  @include('layouts.page_template.auth')
  @else
  @include('layouts.page_template.guest')
  @endif
  @endauth
  @guest
  @include('layouts.page_template.guest')
  @endguest
</div>

<!--   Core JS Files   -->
<script src="{{ asset('assets') }}/js/counter.js"></script>
<script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
<script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets') }}/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets') }}/demo/demo.js"></script>
@stack('js')
</body>

</html>

