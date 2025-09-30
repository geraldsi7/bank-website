<footer>
<div class="container-fluid py-5" style="background: #f7f7f7">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <p class="h5 text-capitalize font-weight-normal">Personal Banking</p>
          
          <div class="mt-3">
            <ul class="navbar-nav">
              <li class="nav-item my-1">
                <a href="{{ route('services') }}">Personal Checking</a>
              </li>

              <li class="nav-item my-1">
                <a href="{{ route('services') }}">Personal Savings</a>
              </li>

              <li class="nav-item my-1">
                <a href="{{ route('services') }}">Personal Mortgages</a>
              </li>

              <li class="nav-item my-1">
                <a href="{{ route('services') }}">Personal Loans</a>
              </li>

              <li class="nav-item my-1">
                <a href="{{ route('services') }}">Personal Banking</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-0">
          <p class="h5 text-capitalize font-weight-normal">Business Banking</p>
          
          <div class="mt-3">
            <ul class="navbar-nav">
              <li class="nav-item my-1">
                <a href="{{ route('services') }}">Business Checking</a>
              </li>

              <li class="nav-item my-1">
                <a href="{{ route('services') }}">Business Loans</a>
              </li>

              <li class="nav-item my-1">
                <a href="{{ route('services') }}">Small Business Administration</a>
              </li>

              <li class="nav-item my-1">
                <a href="{{ route('services') }}">Banking Additional Services</a>
              </li>

              <li class="nav-item my-1">
                <a href="{{ route('services') }}">E-Banking</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-md-5 mt-lg-0">
          <p class="h5 text-capitalize font-weight-normal">Quick Links</p>
          
          <div class="mt-3">
            <ul class="navbar-nav">
              <li class="nav-item my-1">
                <a href="{{ route('about') }}">About {{ config('app.name') }}</a>
              </li>

              <li class="nav-item my-1">
                <a href="{{ route('services') }}">{{ config('app.name') }} Services</a>
              </li>

              <li class="nav-item my-1">
                <a href="{{ route('cc') }}">Credit Cards</a>
              </li>

              <li class="nav-item my-1">
                <a href="{{ route('careers') }}">{{ config('app.name') }} Careers</a>
              </li>
            </ul>
          </div>
        </div>
    </div>
  </div>
</div>
  <div class="container-fluid py-5" style="background-color: #e3dfd7;">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-2 my-1">
          <a href="javascript:void(0)">Privacy, Cookies, Security & Legal</a>
        </div>

        <div class="col-6 col-lg-2 my-1">
          <a href="javascript:void(0)">Notice of Data Collection</a>
        </div>

        <div class="col-6 col-lg-2 my-1">
          <a href="javascript:void(0)">General Terms of Use</a>
        </div>

        <div class="col-6 col-lg-2 my-1">
          <a href="javascript:void(0)">Online Access Agreement</a>
        </div>

        <div class="col-6 col-lg-2 my-1">
          <a href="javascript:void(0)">Ad Choices</a>
        </div>

        <div class="col-6 col-lg-2 my-1">
          <a href="javascript:void(0)">Report Fraud</a>
        </div>

        <div class="col-6 col-lg-2 my-1">
          <a href="javascript:void(0)">About {{ config('app.name') }}</a>
        </div>

        <div class="col-6 col-lg-2 my-1">
          <a href="javascript:void(0)">Careers Diversity and Accessibility</a>
        </div>

        <div class="col-6 col-lg-2 my-1">
          <a href="javascript:void(0)">Sitemap</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid footer text-gray p-4" style="background-color: #111111 !important;">
    <div class="copyright" id="copyright">
      <p class="text-capitalize">&copy; 1990 - {{ date('Y') }} {{ config('app.name') }}</p>
    </div>
  </div>

</footer>