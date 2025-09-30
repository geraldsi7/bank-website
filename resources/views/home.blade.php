@extends('layouts.app', [
'namePage' => 'Dashboard',
'class' => 'login-page sidebar-mini ',
'activePage' => 'home',
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
              <span>+ 8.2%</span>
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

  <div class="row">

    <div class="col-lg-8">
      <div class="card card-chart">
        <div class="card-header">
          <p class="font-weight-bold">History</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-6 order-2 order-md-1">
              <table class="table bg-light rounded">
                <tbody>
                  @foreach($transactions as $transaction)
                  <tr>
                    <td>
                          <span class="font-weight-bold ">{{ $transaction->ref }}</span>
                          <br>
                          <small class="text-dark font-weight-normal">{{ $transaction->updated_at->format('M, d Y - H:i') }}</small>
                    </td>
                    <td class="text-right font-weight-bold @if($transaction->status == 'pending') text-muted @endif" @if($transaction->type == 'income')
                      style="color: #10b981"
                      @else
                      style="color: #ff5724"
                      @endif>
                      £{{ number_format($transaction->amount,2) }}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="col-12 col-md-6 order-1 order-md-2" style="height: 55vh;">
              <canvas id="history" style="width: 100%; height: 100%;"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <p class="font-weight-bold">Send Money</p>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label>Pay to</label>
            <input type="text" class="form-control" id="payTo" placeholder="**** **** **** ****">
          </div>

          <div class="form-group">
            <label>Amount</label>
            <input type="text" class="form-control" placeholder="Amount" min="0" id="amount">
          </div>

          <div class="mt-3">
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">Commission:</small>
              <div>
                <span class="text-muted">£</span><span class="text-muted" id="commission">0.00</span>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <p>Total:</p>
              <div>
                <span class="font-weight-bold">£</span><span class="font-weight-bold" id="total">0.00</span>
              </div>
            </div>

            <button class="btn btn-primary col-12 font-weight-bold rounded-0" data-toggle="modal" data-target="#transactionModal" id="pay-btn">Send Money</button>

          </div>

          <!-- Modal -->
          <div class="modal fade" id="transactionModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="transactionModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="transactionModalTitle">Transaction failed!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body p-4">
                      <p>We apologize, but we are unable to process your transaction at this time due to outstanding taxes. Please contact the bank for more information.</p>
                                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary rounded-0" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

  <script>
    const ctx = document.getElementById("history").getContext('2d');

    const years = []

    for (let i = 10; i <= 22; i++) {
      years[i-10] = '20' + i;
    }

    const incomes = [
      @foreach($incomes as $income) 
      {{ $income }},
      @endforeach
    ]

    const expenses = [
      @foreach($expenses as $expense) 
          {{ $expense }},
      @endforeach
    ]

    const historyChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: years,
        datasets: [{
            label: 'Credit',
            data: incomes,
            borderWidth: 1,
            fill: false,
            backgroundColor: '#10b981',
            borderColor: '#10b981',
          },
          {
            label: 'Debit',
            data: expenses,
            borderWidth: 1,
            fill: false,
            backgroundColor: '#ff5724',
            borderColor: '#ff5724',
          }
        ]
      },
      options: {
        tension: 0.4,
        scales: {
          x: {
            grid: {
              display: false,
            }
          },
          y: {
            beginAtZero: true,
            grid: {
              display: false,
            }
          }
        }
      }
    });

    $('#payTo').keyup(function() {

      $(this).val($(this).val().replace(/(\d{4})(\d+)/g, '$1 $2'))
    });

    $(document).on('keyup', '#amount', function() {
      var amount
      var commission
      var total 
      if ($(this).val() == '') {
        amount = 0
        commission = 0.00
        total = 0.00
      } else {
        amount = parseFloat($(this).val())
        commission = 0.01 * amount
         total = commission + amount
      }

      $('#commission').text(parseFloat(commission).toLocaleString())
      $('#total').text(parseFloat(total).toLocaleString())
    })
  </script>



</div>
</div>
</div>
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