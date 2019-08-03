<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <meta charset="utf-8">
    <title>Be-help Order Invoice</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Montserrat', sans-serif;
            color: #555;
        }

        * {
            font-size: 16px;
            line-height: 20px;
            color: #666;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        table.inventory {
            padding: 5px;
            vertical-align: top;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table.inventory thead {
            border-bottom: 1px solid #000;
        }

        table.inventory .board td {
            border-bottom: 1px solid #eee;
            padding: 20px 5px;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .receipt-main td h2 {
            font-size: 20px;
            font-weight: 900;
            margin: 0;
            text-transform: uppercase;
        }

        .receipt-header-mid .receipt-left h1 {
            font-weight: 100;
            margin: 34px 0 0;
            text-align: right;
            text-transform: uppercase;
        }

        .receipt-header-mid {
            margin: 24px 0;
            overflow: hidden;
        }

        td.receipt-right p {
            margin-bottom: 0px;
            margin-top: 0px;
            font-size: 14px;
        }

        .invoice-box table tr.top table td {
            padding-top: 35px;
        }

        .invoice-box table tr.top table td {
            padding-top: 35px;
        }

        td.receipt-right p {
            margin-bottom: 0px;
            margin-top: 0px;
            font-size: 15px;
            line-height: 24px;
        }

        table.inventory thead .board {
            background: #eee;
            border-bottom: 1px solid #ddd;
        }
        /*.footer{*/

            /*text-align: left !important;*/

        /*}*/
        .invoice{

            margin-top: 150px;

        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
    </style>
</head>
<body>
<div class="invoice-box">
    <h1 style="font-size:20px;text-align:center;color: #fff;background-color: #000;padding: 13px;margin: 5px;">
        INVOICE</h1>
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="5">
                <table>
                    <tr>
                        <td>
                            <p style="font-weight: bold;">{{$order->buyer_name}}</p>
                            <p>{{$order->buyer->email}}</p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="receipt-right invoice" style="margin-top: 150px;">
                                <p><b>Invoice Number :</b> @if($order) {{$order->id}} @else @endif</p>
                                <p><b>Invoice Date
                                        :</b> {{ \Carbon\Carbon::createFromFormat("Y-m-d H:i:s",$order->created_at)->format("jS M, Y g:i a") }}
                                </p>
                                <p><b>Payment Refrence Id
                                        :</b> {{$order->payment_request_id}}
                                </p>
                            </div>


                        </td>
                        <td style="text-align: right;">
                            <img src="{!! asset('theme/images/home-be.png') !!}" style="width:50px;">
                            <br>
                            <div class="receipt-right">
                                {{--
                                <p style="text-align: right;"> Citrusbug Pvt. Ltd</p>
                                <p style="text-align: right"> 803, Sukhsagar Complex,</p>
                                <p style="text-align: right"> Nr Fortune Landmark</p>
                                <p style="text-align: right"> AHMEDABAD -382330</p>
                                <p style="text-align: right"> GUJARAT</p>
                                <p style="text-align: right"> INDIA</p>
                                --}}
                                <p style="text-align: right;"> {{\config('site_setting.contact.address_line_1')}}</p>
                                <p style="text-align: right;"> {{\config('site_setting.contact.address_line_2')}}</p>
                            </div>
                        </td>


                    </tr>



                </table>
            </td>
        </tr>
        <tr class="information">
            <td colspan="5">

                <div class="row">
                    <div class="receipt-header receipt-header-mid">
                        <div class="col-xs-8 col-sm-8 col-md-8 text-left">

                        </div>
                    </div>
                </div>


                <table class="inventory">
                    <thead>
                    <tr class="board">
                        <th style="width:20%;text-align: left;font-weight: bold;"><span>Activity</span></th>
                        <th style="text-align: right;font-weight: bold;"><span>From Date</span></th>
                        @if($order->booked_date_to == null)
                            <th style="text-align: right;font-weight: bold;"></th>
                        @endif
                        @if($order->booked_date_to != null)
                            <th style="font-weight: bold;text-align:right;"><span>To Date</span></th>
                        @endif
                        <th style="text-align: right;font-weight: bold;"></th>
                        <th style="text-align: right;font-weight: bold;"><span>Amount</span></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr class="board">
                        <td style=" text-align: left;"><span>{{ $order->activity_name }}</span></td>
                        <td style=" text-align: right;">
                            <span> {{ \Carbon\Carbon::createFromFormat("Y-m-d",$order->booked_date_from)->format("jS M, Y") }}</span>
                        </td>
                        <td style=" text-align: right;"><span>

                                @if($order->booked_date_to != null)
                                    {{ \Carbon\Carbon::createFromFormat("Y-m-d",$order->booked_date_to)->format("jS M, Y") }}
                                @endif

                            </span></td>
                        <td style=" text-align: right;"><span></span></td>

                        <td style=" text-align: right;"><span>THB {{ $order->activity_price}}</span></td>
                    </tr>

                    <tr class="board">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style=" text-align: right;font-weight: bold;"><span>Quantity</span></td>
                        <td style=" text-align: right;font-weight: bold;"><span>{{ $order->order_qty }}</span></td>
                    </tr>

                    <tr class="board">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style=" text-align: right;font-weight: bold;"><span>Subtotal</span></td>
                        <td style=" text-align: right;font-weight: bold;"><span>THB {{ $order->order_total }}</span></td>
                    </tr>

                    <tr class="board">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style=" text-align: right;font-weight: bold;"><span>Discount({{ $order->activity_discount }}%)</span></td>
                        <td style=" text-align: right;font-weight: bold;"><span> - THB {{ $order->order_total-$order->order_amount }}</span></td>
                    </tr>
                    @if($order->payment_type == 'reservation')
                    <tr class="board">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style=" text-align: right;font-weight: bold;"><span>Reservation({{ $order->reservation }}%)</span></td>
                        <td style=" text-align: right;font-weight: bold;"><span> - THB {{ ($order->order_amount* $order->reservation)/100 }}</span></td>
                    </tr>
                    <?php 
                    $finalamount = ($order->order_amount* $order->reservation)/100;
                    ?>

                    @else
                    <?php $finalamount =$order->order_amount; ?>
                    @endif

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style=" text-align: right;font-weight: bold;"><span>TOTAL</span></td>
                        <td style=" text-align: right;font-weight: bold;"><span>THB {{ $finalamount }}</span></td>
                    </tr>

                    @if($order->payment_type == 'reservation')
                    <tr class="board">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style=" text-align: right;font-weight: bold;"><span>Pending Payment</span></td>
                        <td style=" text-align: right;font-weight: bold;"><span>THB {{ $order->order_amount-$finalamount}}</span></td>
                    </tr>
                    @endif
                    
                    </tbody>
                </table>

            </td>
        </tr>
    </table>

<br><br>
    <h1 class="footer" style="font-size:16px;text-align:center;color: #fff;background-color: #000;">
            <?php $today = getdate(); ?>
        Copyright © {{$today['year']}} All rights reserved
        

    </h1>

</div>
</body>

</html>
