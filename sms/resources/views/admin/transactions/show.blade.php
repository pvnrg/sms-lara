@extends('layouts.backend')

@section('title',trans('user.label.show_user'))


@section('content')

    <div class="tab-content">
        <div id="people" class="tab-pane fade in active">
            <div class="row">
                <div class="col-md-12">
                    <div class="box bordered-box blue-border">
                    <a href="{{ url('/admin/transactions') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Back
                        </button>
                    </a>
                    @if(Auth::user()->can('access.user.edit'))
                    <a href="{{ url('/admin/transactions/' . $transaction->id . '/edit') }}" title="Edit User">
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                           Edit
                        </button>
                    </a>
                    @endif

                    @if(Auth::user()->can('access.user.delete'))
                    {!! Form::open([
                        'method' => 'DELETE',
                        'url' => ['/admin/transactions', $transaction->id],
                        'style' => 'display:inline'
                    ]) !!}
                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                            'type' => 'submit',
                            'class' => 'btn btn-danger btn-xs',
                            'title' => 'Delete Transaction',
                            'onclick'=>"return confirm('Confirm delete?')"
                    ))!!}
                    {!! Form::close() !!}
                    @endif
                    <br/>
                    <br/>                    
                    
                        <div class="box-content ">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td> Transaction Id </td><td>{{ $transaction->transaction_id }}</td>
                            </tr>
                            <tr>
                                <td> Client name </td><td>{{ $transaction->client_name }}</td>
                            </tr>
                            <tr>
                                <td> Transaction type </td><td>{{ $transaction->trans_type_name }}</td>
                            </tr>
                            <tr>
                                <td> Trade date </td><td>{{ $transaction->trade_date or 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td> Settlement date </td><td>{{ $transaction->sattle_date or 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td> Qty </td><td>{{ $transaction->qty or 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td> Fill Price </td><td>{{ $transaction->price or 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td> Actual price </td><td>{{ $transaction->actual_price or 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td> Amount </td><td>{{ $transaction->amount or 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td> Fix rate </td><td>{{ $transaction->fx_rate or 'N/A' }}</td>
                            </tr>
                            <tr>
                            <td> Commission percentage </td><td>{{ $transaction->commission_percentage or 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td> Commission ammount </td><td>{{ $transaction->commission_ammount or 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td> Spread </td><td>{{ $transaction->spread or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Wire fees income </td><td>{{ $transaction->wire_fees_income or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Wire fees bank </td><td>{{ $transaction->wire_fees_bank or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Total amount </td><td>{{ $transaction->total or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Total amount USD </td><td>{{ $transaction->total_usd or 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td> Gross Amount </td><td>{{ $transaction->gross_cash or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Broker commission </td><td>{{ $transaction->broker_commission or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Anual bank amount</td><td>{{ $transaction->anul_bank_amt or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Additional fees received </td><td>{{ $transaction->additional_fee_rcved or 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td> Sattlement charge</td><td>{{ $transaction->sattlement_charge or 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td> Net Amount </td><td>{{ $transaction->net_cash or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Banked </td><td>{{ $transaction->banked or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Cash through cib </td><td>{{ $transaction->cash_through_cib or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Cash through rbc</td><td>{{ $transaction->cash_through_rbc or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Income</td><td>{{ $transaction->income or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Expense</td><td>{{ $transaction->expense or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Dwac - Dtc</td><td>{{ $transaction->dwac_dtc or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Certificate of clearance </td><td>{{ $transaction->cert_clearance or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Management fees</td><td>{{ $transaction->management_fees or 'N/A' }}</td>
                            </tr>
                            <tr style="display:none">
                                <td> Fed Ex </td><td>{{ $transaction->fed_ex or 'N/A' }}</td>
                            </tr>
                            </tbody>
                        </table>                 
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>                 



@endsection



