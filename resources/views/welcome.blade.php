@extends('layouts.app', [
'class' => 'login-page sidebar-mini ',
'activePage' => 'welcome',
'backgroundImage' => asset('assets') . "/img/welcome.jpg",
])

@section('content')
<div class="content">
  <div class="container">
    <div class="col-md-12 ml-auto me-auto">
      <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
        <div class="container">
          <div class="header-body mb-7">
           <div class="text-white py-5 pl-4 pr-5 d-none d-md-block col-md-6 col-lg-4">
            <p class="h3">Connecting all your banking needs</p>
            <p class="text-capitalize">Making it easy for you.</p>
              <div>
                <a href="{{ route('contact') }}" type="button"  class="btn btn-primary text-white text-left rounded-0">Find out more</a>             
            </div>          
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 ms-auto me-auto">
  </div>
</div>
</div>
@endsection
@section('brief')
@include('welcome_page')
@endsection

@push('js')
<script>
  $(document).ready(function() {
    demo.checkFullPageBackgroundImage();
  });
</script>

@endpush
