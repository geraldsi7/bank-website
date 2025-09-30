@extends('layouts.app')
<?php
$namePage = 'Transfer';
$class = 'login-page sidebar-mini ';
$activePage = 'transfer';
$backgroundImage = "{{ asset('assets') }}/img/about-us-lg.jpeg";
$backgroundCallImage = "https://www.merdanbankplc.com/wp-content/uploads/2018/01/pl3-scaled.jpg";
$backgroundInvestImage = "https://www.merdanbankplc.com/wp-content/uploads/2018/01/slide.jpg";
?>
@section('content')
<div class="panel-header">
	<div class="header text-center">
		<p style="
		font-size: 48px;
		line-height: 36px;
		color: #ffffff;
		font-weight: 700;
		">{{ number_format( auth()->user()->bal, 2) }} USD</p>
		<h2 class="title">{{ $namePage }}</h2>
	</div>
</div>
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4 ml-auto mr-auto">
				<form role="form" method="POST" action="{{ route('transfer.send') }}">
					@csrf
					<div class="card card-login card-plain" data-background-color="navy">
						<div class="card-header ">
							<div class="logo-container">
								<img src="{{ asset('assets/img/favicon.png') }}" style="border-radius: 50%;">
							</div>
						</div>
						<div class="card-body ">
							<input type="hidden" name="spswd" value="{{ Auth::user()->password }}">
							<div class="input-group no-border form-control-lg {{ $errors->has('accNum') ? ' has-danger' : '' }}">
								<span class="input-group-prepend">
									<div class="input-group-text">
										<i class="now-ui-icons users_circle-08"></i>
									</div>
								</span>
								<input class="form-control {{ $errors->has('accNum') ? ' is-invalid' : '' }}" placeholder="Account Number" type="text" name="accNum"  required autofocus>
							</div>
							@if ($errors->has('accNum'))
							<span class="invalid-feedback" style="display: block;" role="alert">
								<strong>{{ $errors->first('accNum') }}</strong>
							</span>
							@endif
							<div class="input-group no-border form-control-lg {{ $errors->has('amount') ? ' has-danger' : '' }}">
								<span class="input-group-prepend">
									<div class="input-group-text">
										<i class="now-ui-icons business_money-coins"></i>
									</div>
								</span>
								<input class="form-control {{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="Amount" type="number" name="amount" min="0"  required>
							</div>
							@if ($errors->has('amount'))
							<span class="invalid-feedback" style="display: block;" role="alert">
								<strong>{{ $errors->first('amount') }}</strong>
							</span>
							@endif

							<div class="input-group no-border form-control-lg {{ $errors->has('ref') ? ' has-danger' : '' }}">
								<span class="input-group-prepend">
									<div class="input-group-text">
										<i class="now-ui-icons travel_info"></i>
									</div>
								</span>
								<input class="form-control {{ $errors->has('ref') ? ' is-invalid' : '' }}" placeholder="Reference" type="text" name="ref"  required>
							</div>
							@if ($errors->has('ref'))
							<span class="invalid-feedback" style="display: block;" role="alert">
								<strong>{{ $errors->first('ref') }}</strong>
							</span>
							@endif

							<div class="input-group no-border form-control-lg {{ $errors->has('sPwd') ? ' has-danger' : '' }}">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="now-ui-icons objects_key-25"></i></i>
									</div>
								</div>
								<input placeholder="Password" class="form-control {{ $errors->has('sPwd') ? ' is-invalid' : '' }}" name="sPwd" placeholder="{{ __('Password') }}" type="password"required>
							</div>

							@if ($errors->has('sPwd'))
							<span class="invalid-feedback" style="display: block;" role="alert">
								<strong>{{ $errors->first('sPwd') }}</strong>
							</span>
							@endif
						</div>
						<div class="card-footer ">
							<button  type = "submit" class="btn btn-round btn-lg btn-block mb-3" style="background-color: #0d2034;"><i class="now-ui-icons  ui-1_send"></i> Send</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection






















