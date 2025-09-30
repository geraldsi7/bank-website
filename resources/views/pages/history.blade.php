@extends('layouts.app', [
'namePage' => 'History',
'class' => 'login-page sidebar-mini ',
'activePage' => 'history',
'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')

<div class="panel-header panel-header-sm">
</div>
<div class="content">

  <div class="card">
    <div class="card-header">
      <div class="d-flex justify-content-between align-items-center">
        <p class="font-weight-bold">History</p>
        <a href="{{ asset('assets') }}/doc/terry_dunn_statement_of_account-07_04_2023.pdf" download class="btn btn-primary rounded-0">Download PDF</a>
      </div>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table bg-light rounded">
          <thead class="thead-light">
            <tr>
              <td scope="col" class="font-weight-bold">Transaction ID</td>
              <td scope="col" class="font-weight-bold">Date</td>
              <td scope="col" class="font-weight-bold">Recipient</td>
              <td scope="col" class="font-weight-bold">Amount</td>
              <td scope="col" class="font-weight-bold">Type</td>
              <td scope="col" class="font-weight-bold">Status</td>
              <td scope="col" class="font-weight-bold">Balance</td>
              <td scope="col" class="font-weight-bold"></td>
            </tr>
          </thead>
          <tbody>
            @foreach($transactions as $transaction)
            <tr>
              <td>
                {{ $transaction->t_code }}
              </td>
              <td>
                {{ $transaction->updated_at->format('M, d Y - H:i') }}
              </td>
              <td>
                    <span class="font-weight-normal ">{{ $transaction->ref }}</span>
              </td>
              <td class="text-right">
                £{{ number_format($transaction->amount, 2) }}
              </td>
              <td class="text-capitalize">
                @if($transaction->type == 'income')
                Credit
                @else
                Debit
                @endif
              </td>
              <td>
                <small class="border text-capitalize text-white text-center font-weight-bold rounded px-2 py-1 @if($transaction->status == 'successful') bg-success @elseif($transaction->status == 'pending') bg-light text-muted @else border-danger @endif">{{ $transaction->status }}</small>
              </td>
              <td>
              £{{ number_format($transaction->balance,2) }}
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