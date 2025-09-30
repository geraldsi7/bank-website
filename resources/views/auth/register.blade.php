@extends('layouts.app', [
'namePage' => 'Register',
'activePage' => 'register',
'backgroundImage' => asset('assets') . "/img/login-lg.jpeg",
])

@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-5 ml-auto">
        <div class="info-area info-horizontal mt-5">
          <div class="icon icon-primary">
            <i class="now-ui-icons education_hat"></i>
          </div>
          <div class="description">
            <h5 class="info-title">Careers</h5>
            <p class="description">
              Whether you’re an experienced industry professional or looking to embark on a career in finance, Zurich Private Finance business offers a variety of opportunities throughout our worldwide offices.
            </p>
          </div>
        </div>
        <div class="info-area info-horizontal">
          <div class="icon icon-primary">
            <i class="now-ui-icons ui-2_settings-90"></i>
          </div>
          <div class="description">
            <h5 class="info-title">Services</h5>
            <p class="description">
              Our offices are located in regions recognised for the flexibility and security they provide to our clients and for the integrity of their financial and regulatory systems.
            </p>
          </div>
        </div>
        <div class="info-area info-horizontal">
          <div class="icon icon-info">
            <i class="now-ui-icons objects_support-17"></i>
          </div>
          <div class="description">
            <h5 class="info-title">Benefits</h5>
            <p class="description">Whatever your needs, we can help you develop an investment strategy that works for you.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mr-auto">
        <div class="card card-signup text-center">
          <div class="card-header ">
            <h4 class="card-title">{{ __('Register') }}</h4>
          </div>
          <div class="card-body ">
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <!--Begin input name -->
              <div class="input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                  </div>
                </div>
                <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                <span class="invalid-feedback" style="display: block;" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
              <!--Begin input email -->
              <div class="input-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_email-85"></i>
                  </div>
                </div>
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
              <span class="invalid-feedback" style="display: block;" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
              <!--Begin input user type-->

              <!--Begin input password -->
              <div class="input-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="now-ui-icons objects_key-25"></i>
                  </div>
                </div>
                <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                @if ($errors->has('password'))
                <span class="invalid-feedback" style="display: block;" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
              <!--Begin input confirm password -->
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="now-ui-icons objects_key-25"></i></i>
                  </div>
                </div>
                <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
              </div>
              <div class="form-check text-left">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">
                  <span class="form-check-sign"></span>
                  {{ __('I agree to the') }}
                  <a href="#something">{{ __('terms and conditions') }}</a>.
                </label>
              </div>
              <div class="card-footer ">
                <button type="submit" class="btn btn-round btn-lg" style="background-color: #0d2034;">{{__('Get Started')}}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
<script>
  $(document).ready(function() {
    demo.checkFullPageBackgroundImage();
  });
</script>
@endpush
