@extends('layouts.app', [
'namePage' => 'Contact',
'class' => 'login-page sidebar-mini ',
'activePage' => 'contact',
'backgroundImage' => asset('assets') . "/img/bg-main.jpg",
])

@section('content')

<div class="bg-skewed bg-contact">
    <div class="content">
        <p class="h2 text-white font-weight-bold text-capitalize">contact us</p>
    </div>
</div>
<div class="container mb-5" style="margin-top: 10em;">
        <div class="row">
            <div class="col-12 col-lg-6">
                <p class="h5">United Kingdom</p>
                <p>{{ config('app.name') }}, 123 Financial District, London EC2M 4AA</p>
                <a href="javascript:void(0)">
                    <p>Phone: +44 (0) 20 7123 4567</p>
                </a>
                <a href="javascript:void(0)">
                    <p>Email: contact@examplebank.co.uk</p>
                </a>
            </div>
            
            <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                <div class="card card-login card-dark card-body">
                    <div class="input-group no-border form-control-lg">
                        <input class="form-control rounded-0" placeholder="Name*" type="text" name="name" required>
                    </div>
                    <div class="input-group no-border form-control-lg">
                        <input class="form-control rounded-0" placeholder="Phone number*" type="text" name="phone" required>
                    </div>
                    <div class="input-group no-border form-control-lg">
                        <textarea form="call" id="description" rows="5" class="form-control rounded-0" name="request" placeholder="How can we help you ?"></textarea>
                    </div>
                </div>
                <div>
                    <a href="javascript:void(0)" class="btn btn-primary btn-lg rounded-0 text-capitalize">submit</a>
                </div>
            </div>
        </div>

    @endsection
