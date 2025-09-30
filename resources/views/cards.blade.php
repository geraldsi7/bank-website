@extends('layouts.app', [
'namePage' => 'Cards',
'class' => 'login-page sidebar-mini ',
'activePage' => 'cards',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')

<div class="panel-header panel-header-sm">
</div>
<div class="content">

  <div>
    <div class="card balance-panel rounded py-3">
      <div class="card-body text-white d-md-flex justify-content-md-between">
        <!-- balance panel -->
        <div class="col-md-5 col-lg-3">
          <div class="d-md-flex align-content-md-between flex-column">
            <div class="my-auto col">
              <p class="font-weight-bold">Balance</p>
            </div>

            <div class="col my-auto">
              <span class="h5 font-weight-bold">£{{ number_format($debits - $credits, 2) }}</span>
              <br>
              <span>+ 3.5%</span>
            </div>

            <div class="col-7 col-md-12 col-lg-11 mt-3">
              <div class="d-flex justify-content-between">
                <div>
                  <span>Credit</span>
                  <br>
                  <div class="d-flex align-items-center">
                    <span class="material-symbols-outlined" style="font-size: 15px;">
                      arrow_upward
                    </span>
                    <span class="font-weight-bold ml-1"> £{{ number_format($debits, 2) }}
                    </span>
                  </div>

                </div>

                <div>
                  <span>Debit</span>
                  <br>
                  <div class="d-flex align-items-center">
                    <span class="material-symbols-outlined" style="font-size: 15px;">
                      arrow_downward
                    </span>
                    <span class="font-weight-bold ml-1"> £{{ number_format($credits, 2) }}
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of balance panel -->

        <!-- cc panel -->
        <div class="mt-4 mt-md-0 col-md-6 col-lg-8">
          <!-- cc -->
          <div class="control d-none" id="cc-slider-control">
            <div class="pull-right prev">
              <i class="now-ui-icons arrows-1_minimal-left"></i>
            </div>

            <div class="pull-right next">
              <i class="now-ui-icons arrows-1_minimal-right"></i>
            </div>
          </div>

          <div class="cc-slider">

            @foreach($cards as $card)
            <div>
              <div class="p-3 rounded cc d-flex justify-content-between">
                <div class="d-flex align-items-start flex-column">
                  <img src="{{ asset('assets') }}/img/visa.png" width="35" alt="visa">

                  <div class="mt-5">
                    <span class="font-weight-bold">
                      £{{ number_format($card->amount, 2) }}
                    </span>
                    <br>
                    <small>
                      {{ $card->card_number }}
                    </small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <!-- end of cc -->
        </div>
        <!-- end of cc panel -->
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <div class="d-flex justify-content-between align-items-center">
        <p class="font-weight-bold">Card List</p>
        <a href="javascript:void(0)" class="btn btn-primary rounded-0">Add Card</a>
      </div>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table bg-light rounded">
          <tbody>
            @foreach($cards as $card)
            <tr>
              <td>
                <small class="text-muted font-weight-normal">Card Type</small>
                <p class="font-weight-bold">{{ $card->type }}</p>
              </td>
              <td>
                <small class="text-muted font-weight-normal">Card Number</small>
                <p class="font-weight-bold">{{ $card->card_number }}</p>
              </td>
              <td>
                <small class="text-muted font-weight-normal">Name on Card</small>
                <p class="font-weight-bold">Terry Dunn</p>
              </td>
              <td>
                <a href="javascript:void(0)" class="font-weight-bold">See number</a>
              </td>
              <td>
                <a href="javascript:void(0)" class="btn btn-primary rounded-0">Edit</a>
                <a href="javascript:void(0)" class="btn btn-danger rounded-0 mt-1 mt-md-0">Delete</a>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


</div>
</div>
@endsection

@push('js')


<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

<script src="{{ asset('assets') }}/js/ccSlider.js"></script>
@endpush