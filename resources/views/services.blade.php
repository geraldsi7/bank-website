@extends('layouts.app', [
'namePage' => 'Our Services',
'class' => 'login-page sidebar-mini ',
'activePage' => 'services',
'backgroundImage' => asset('assets') . "/img/bg-main.jpg",
])

@section('content')

<div class="bg-skewed bg-services">
    <div class="content">
        <p class="h2 text-white font-weight-bold text-capitalize">our services</p>
    </div>
</div>
<div class="container mb-5" style="margin-top: 10em;">
    <div class="mt-5">
        <div class="d-md-flex align-items-md-start">
            <div class="col-md-6">
                <img src="{{ asset('assets') }}/img/biz-plan.jpg">
            </div>

            <div class="ml-lg-4 ml-md-3 mt-4 mt-md-0">
                <p class="text-dark text-uppercase">{{ config('app.name') }}</p>
                <p class="h5 font-weight-normal">Business Plan</p>
                <p class="mt-3">
                    Discover quick, simple and convenient way to take command of your bank account, on the internet.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary rounded-0">Take the first step</a>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="d-md-flex align-items-md-start">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('assets') }}/img/mobile-banking.jpg">
            </div>

            <div class="mr-lg-4 mr-md-3 mt-4 mt-md-0 order-md-1">
                <p class="h5 font-weight-normal">Mobile Banking</p>
                <p class="mt-3">
                    Explore the power of simpler and smarter banking. Bank online with over 250 services.
                </p>
            </div>
        </div>
    </div>
</div>
    <div class="mt-5 services-section">
        <p class="h5 text-center mb-5">Our services and information</p>

        <div class="control d-none" id="services-slider-control">
            <div class="pull-right prev">
                <i class="now-ui-icons arrows-1_minimal-left"></i>
            </div>

            <div class="pull-right next">
                <i class="now-ui-icons arrows-1_minimal-right"></i>
            </div>
        </div>

        <div class="services-slider">
            <div>
                <p class="text-capitalize text-center">personal checking</p>
                <div class="h-ss">
                    <img src="{{ asset('assets') }}/img/personal-check.jpg" class="image-fill rounded-0" alt="...">
                </div>
            </div>

            <div>
                <p class="text-capitalize text-center">personal savings</p>
                <div class="h-ss">
                    <img src="{{ asset('assets') }}/img/personal-savings.jpg" class="image-fill rounded-0" alt="...">
                </div>
            </div>

            <div>
                <p class="text-capitalize text-center">personal loans</p>
                <div class="h-ss">
                    <img src="{{ asset('assets') }}/img/personal-loan.jpg" class="image-fill rounded-0" alt="...">
                </div>
            </div>

            <div>
                <p class="text-capitalize text-center">SBA loans</p>
                <div class="h-ss">
                    <img src="{{ asset('assets') }}/img/sba.jpg" class="image-fill rounded-0" alt="...">
                </div>
            </div>

            <div>
                <p class="text-capitalize text-center">business loans</p>
                <div class="h-ss">
                    <img src="{{ asset('assets') }}/img/biz-loan.jpg" class="image-fill rounded-0" alt="...">
                </div>
            </div>

            <div>
                <p class="text-capitalize text-center">business checking</p>
                <div class="h-ss">
                    <img src="{{ asset('assets') }}/img/biz-check.jpg" class="image-fill rounded-0" alt="...">
                </div>
            </div>

            <div>
                <p class="text-capitalize text-center">Personal Mortgages</p>
                <div class="h-ss">
                    <img src="{{ asset('assets') }}/img/mortgage.jpg" class="image-fill rounded-0" alt="...">
                </div>
            </div>

        </div>
        @endsection

        @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

        <script src="{{ asset('assets') }}/js/itemSlider.js"></script>
        @endpush