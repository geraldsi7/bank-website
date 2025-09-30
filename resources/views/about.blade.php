@extends('layouts.app', [
'namePage' => 'About Us',
'class' => 'login-page sidebar-mini ',
'activePage' => 'about',
'backgroundImage' => asset('assets') . "/img/bg-main.jpg",
])

@section('content')

<div class="bg-skewed bg-about">
    <div class="content">
        <p class="h2 text-white font-weight-bold text-capitalize">about {{ config('app.name') }}</p>
    </div>
</div>
<div class="container mb-5" style="margin-top: 10em;">
    <div class="mt-5">
        <div class="d-md-flex align-items-md-start ">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('assets') }}/img/label2.png">
            </div>

            <div class="mr-lg-4 mr-md-3 mt-4 mt-md-0 order-md-1">
                <p class="text-dark text-uppercase">{{ config('app.name') }}</p>
                <p class="h5 font-weight-normal">What is {{ config('app.name') }} and why choose us?</p>
                <p class="mt-3">
                    We advise you and help you with your financial issues, you call the right decision!
                    <br>
                    <br>
                    With global financial interests come global banking needs, from managing complex cross-border family and business interests to undertaking international transactions. We offer a suite of international banking and cash management solutions to complement your wealth portfolio, spanning bank accounts, cards, payments and foreign exchange.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary rounded-0">Join us</a>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <p class="h5 text-center">
            It’s more than just Bank
            <br>
            We connect people
        </p>

        <center>
            <div class="counters mt-5 text-primary">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <span class="h1 font-weight-bold counter" data-target="{{ date('Y') - 1990 }}">
                            0
                        </span>
                        <p>Years of Banking</p>
                    </div>

                    <div class="col-12 col-md-3">
                        <span class="h1 font-weight-bold counter" data-target="120">
                            0
                        </span>
                        <p>Consultants</p>
                    </div>

                    <div class="col-12 col-md-3">
                        <span class="h1 font-weight-bold counter" data-target="1">
                            0
                        </span><span class="h1 font-weight-bold">.3M</span>
                        <p>Happy Clients</p>
                    </div>

                    <div class="col-12 col-md-3">
                        <span class="h1 font-weight-bold counter" data-target="388">
                            0
                        </span>
                        <p>Cooperation</p>
                    </div>
                </div>
            </div>
        </center>
    </div>

    <div class="mt-5">
        <p class="text-center h5 text-capitalize">Our founders</p>
        <div class="mt-5">
            <center>
                <div class="row">
                    <div class="col-12 col-lg-3 mt-5 mt-lg-0">
                        <div style="width: 18em; height: 18em">
                            <img class="rounded-circle image-fill" src="{{ asset('assets') }}/img/founder1.jpg" alt="Card image cap">
                        </div>
                        <div class="mt-4">
                            <h5 class="card-title">Keith Tunner</h5>
                            <span class="card-text text-primary">Founder</span>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 mt-5 mt-lg-0">
                        <div style="width: 18em; height: 18em">
                            <img class="rounded-circle image-fill" src="{{ asset('assets') }}/img/founder2.jpg" alt="Card image cap">
                        </div>
                        <div class="mt-4">
                            <h5 class="card-title">Bruce Graham</h5>
                            <span class="card-text text-primary">Co-Founder</span>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 mt-5 mt-lg-0">
                        <div style="width: 18em; height: 18em">
                            <img class="rounded-circle image-fill" src="{{ asset('assets') }}/img/founder3.jpg" alt="Card image cap">
                        </div>
                        <div class="mt-4">
                            <h5 class="card-title">Jackson Bryant</h5>
                            <span class="card-text text-primary">Financial Analyst</span>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 mt-5 mt-lg-0">
                        <div style="width: 18em; height: 18em">
                            <img class="rounded-circle image-fill" src="{{ asset('assets') }}/img/founder4.jpg" alt="Card image cap">
                        </div>
                        <div class="mt-4">
                            <h5 class="card-title">Sandra Hague</h5>
                            <span class="card-text text-primary">Branch Manager</span>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>


    @endsection

    @push('js')
    <script src="{{ asset('assets') }}/js/counter.js"></script>
    @endpush