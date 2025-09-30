@extends('layouts.app', [
'namePage' => 'Careers',
'class' => 'login-page sidebar-mini ',
'activePage' => 'careers',
'backgroundImage' => asset('assets') . "/img/bg-main.jpg",
])

@section('content')

<div class="bg-skewed bg-careers">
    <div class="content">
        <p class="h2 text-white font-weight-bold text-capitalize">careers</p>
    </div>
</div>
<div class="container mb-5" style="margin-top: 10em;">
    <div class="mt-5">
        <div class="d-md-flex align-items-md-start">
            <div class="col-md-6">
                <img src="{{ asset('assets') }}/img/career.jpg">
            </div>

            <div class="ml-lg-4 ml-md-3 mt-4 mt-md-0">
                <p class="text-dark text-uppercase">{{ config('app.name') }}</p>
                <p class="h5 font-weight-normal">Are you ready to step into a world of opportunity?</p>
                <p class="mt-3">
                Whether you’re an experienced industry professional or looking to embark on a career in finance, {{ config('app.name') }} business offers a variety of opportunities throughout our worldwide offices. At {{ config('app.name') }}, our commitment to helping clients reach their financial goals is at the heart of everything we do. Our people take personal responsibility for high performance in an environment that values diversity and inclusion.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary rounded-0">Join us</a>
            </div>
        </div>
    </div>

@endsection
