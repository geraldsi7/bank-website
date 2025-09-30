@extends('layouts.app', [
'namePage' => 'Credit Cards',
'class' => 'login-page sidebar-mini ',
'activePage' => 'cc',
'backgroundImage' => asset('assets') . "/img/bg-main.jpg",
])
@section('content')

<div class="bg-skewed bg-cc">
    <div class="content">
        <p class="h2 text-white font-weight-bold text-capitalize">credit cards</p>
        <p class="text-white">Choose from these great credit cards</p>
    </div>
</div>
<div class="container mb-5" style="margin-top: 10em;">
    <p class="h5 text-capitalize">our cards</p>

    <div class="mt-5">
        <div class="d-md-flex align-items-md-start">
            <div class="col-md-6">
                <img src="{{ asset('assets') }}/img/gold-cc.png">
            </div>

            <div class="ml-md-3 ml-lg-4">
                <p class="text-dark text-uppercase">premium</p>
                <p class="h5 font-weight-normal">Visa and MasterCard Gold Cards</p>
                <p class="mt-3">
                    Account currency: GBP, USD, EUR
                    <br>
                    Discounts and privileges from Visa and MasterCard payment systems
                    <br>
                    Issue of additional bank cards
                    <br>
                    Card issue within a payroll card programme
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary rounded-0">Order now</a>
            </div>
        </div>
    </div>


    <div class="mt-5">
        <div class="d-md-flex align-items-md-start">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('assets') }}/img/standard-cc.png">
            </div>

            <div class="mr-lg-4 mr-md-3 mt-4 mt-md-0 order-md-1">
                <p class="text-dark text-uppercase">premium</p>
                <p class="h5 font-weight-normal">Visa Classic and MasterCard Standard Cards</p>
                <p class="mt-3">
                    Account currency: GBP, USD, EUR
                    <br>
                    Discounts and privileges from Visa and MasterCard payment systems
                    <br>
                    Issue of additional bank cards
                    <br>
                    Card issue within a payroll card programme
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary rounded-0">Order now</a>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="d-md-flex align-items-md-start">
            <div class="col-md-6">
                <img src="{{ asset('assets') }}/img/deposit-acc.jpg">
            </div>

            <div class="ml-lg-4 ml-md-3 mt-4 mt-md-0">
                <p class="text-dark text-uppercase">premium</p>
                <p class="h5 font-weight-normal">{{ config('app.name') }} Deposit Account</p>
                <p class="mt-3">
                Discover quick, simple and convenient way to take command of your bank account, on the internet.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary rounded-0">Deposit now</a>
            </div>
        </div>
    </div>

@endsection