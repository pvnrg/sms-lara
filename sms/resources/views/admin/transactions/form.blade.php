<div class="box-body">

        <div class="form-group {{ $errors->has('clients_id') ? 'has-error' : ''}}">
            <label for="clients_id" class="col-md-4 control-label">
                 Client name
            </label> 
            <div class="col-md-6">
                {!! Form::select('clients_id', $clients, !empty($transactions->client_id) ? $transactions->client_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'clients' ]) !!}
                {!! $errors->first('clients_id','<p class="help-block">:message</p>') !!}
            </div> 
        </div>

        <div class="form-group {{ $errors->has('transaction_types') ? 'has-error' : ''}}">
            <label for="transaction_types" class="col-md-4 control-label">
                 Transaction type
            </label> 
            <div class="col-md-6">
                {!! Form::select('transaction_types', $transaction_types, !empty($transactions->trans_type_id) ? $transactions->trans_type_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'transaction_types' ]) !!}
                {!! $errors->first('transaction_types','<p class="help-block">:message</p>') !!}
            </div>
        </div>

         <div class="form-group {{ $errors->has('sec_ids') ? 'has-error' : ''}}">
            <label for="sec_ids" class="col-md-4 control-label">
                 Sec Id
            </label> 
            <div class="col-md-6">
                {!! Form::select('sec_ids', $sec_ids, !empty($transactions->sec_id) ? $transactions->sec_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'sec_ids' ]) !!}
                {!! $errors->first('sec_ids','<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
            <label for="description" class="col-md-4 control-label">Description</label> 
            <div class="col-md-6">
                {!! Form::textarea('description',  !empty($transactions->description) ? $transactions->description : '', ['id' => 'description', 'rows' => 3, 'cols' => 80, 'style' => 'resize:none']) !!}
                {!! $errors->first('description','<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('trade_date') ? 'has-error' : ''}}">
            <label for="trade_date" class="col-md-4 control-label">Trade date</label> 
            <div class="col-md-6">
                {!! Form::datetime('trade_date',  !empty($transactions->trade_date) ? $transactions->trade_date : '', ['id' => 'trade_date', 'class' => 'form-control datepicker', 'style' => 'resize:none']) !!}
                {!! $errors->first('trade_date','<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('sattle_date') ? 'has-error' : ''}}">
            <label for="sattle_date" class="col-md-4 control-label">Settlement date</label> 
            <div class="col-md-6">
                {!! Form::datetime('sattle_date', !empty($transactions->sattle_date) ? $transactions->sattle_date : '', ['id' => 'sattle_date', 'class' => 'form-control datepicker', 'style' => 'resize:none']) !!}
                {!! $errors->first('sattle_date','<p class="help-block">:message</p>') !!}
            </div>
        </div>        

        <div class="form-group {{ $errors->has('curreny_id') ? 'has-error' : ''}}">
            <label for="name" class="col-md-4 control-label">
                 Curreny
            </label> 
            <div class="col-md-6">
                {!! Form::select('curreny_id', $curreny_id, !empty($transactions->curreny_id) ? $transactions->curreny_id : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'curreny_id' ]) !!}
                {!! $errors->first('curreny_id','<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('qty') ? 'has-error' : ''}}">
            <label for="qty" class="col-md-4 control-label">
                 Qty
            </label> 
            <div class="col-md-6">
            {!! Form::text('qty', !empty($transactions->qty) ? $transactions->qty : '', ['class' => 'form-control']) !!}
            {!! $errors->first('qty', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
            <label for="price" class="col-md-4 control-label">
                 Fill Price
            </label> 
            <div class="col-md-6">
            {!! Form::text('price', !empty($transactions->price) ? $transactions->price : '', ['class' => 'form-control']) !!}
            {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

         <div class="form-group {{ $errors->has('actual_price') ? 'has-error' : ''}}">
            <label for="actual_price" class="col-md-4 control-label">
                 Actual price
            </label> 
            <div class="col-md-6">
            {!! Form::text('actual_price', !empty($transactions->actual_price) ? $transactions->actual_price : '', ['class' => 'form-control']) !!}
            {!! $errors->first('actual_price', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
            <label for="amount" class="col-md-4 control-label">
                 Amount
            </label> 
            <div class="col-md-6">
            {!! Form::text('amount', !empty($transactions->amount) ? $transactions->amount : '', ['class' => 'form-control']) !!}
            {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('fx_rate') ? 'has-error' : ''}}">
            <label for="fx_rate" class="col-md-4 control-label">
                 fx Rate
            </label> 
            <div class="col-md-6">
            {!! Form::text('fx_rate', !empty($transactions->fx_rate) ? $transactions->fx_rate : '', ['class' => 'form-control']) !!}
            {!! $errors->first('fx_rate', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('commission_percentage') ? 'has-error' : ''}}">
            <label for="commission_percentage" class="col-md-4 control-label">
                 Commission Percentage %
            </label> 
            <div class="col-md-6">
            {!! Form::text('commission_percentage', !empty($transactions->commission_percentage) ? $transactions->commission_percentage : '', ['class' => 'form-control']) !!}
            {!! $errors->first('commission_percentage', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('commission_ammount') ? 'has-error' : ''}}">
            <label for="commission_ammount" class="col-md-4 control-label">
                 Commission Ammount
            </label> 
            <div class="col-md-6">
            {!! Form::text('commission_ammount', !empty($transactions->commission_ammount) ? $transactions->commission_ammount : '', ['class' => 'form-control']) !!}
            {!! $errors->first('commission_ammount', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('spread') ? 'has-error' : ''}}">
            <label for="spread" class="col-md-4 control-label">
                 Spread
            </label> 
            <div class="col-md-6">
            {!! Form::text('spread', !empty($transactions->spread) ? $transactions->spread : '', ['class' => 'form-control']) !!}
            {!! $errors->first('spread', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div style="display: none" class="form-group {{ $errors->has('wire_fees_income') ? 'has-error' : ''}}">
            <label for="wire_fees_income" class="col-md-4 control-label">
                 Wire fees income
            </label> 
            <div class="col-md-6">
            {!! Form::text('wire_fees_income', !empty($transactions->wire_fees_income) ? $transactions->wire_fees_income : '', ['class' => 'form-control']) !!}
            {!! $errors->first('wire_fees_income', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div style="display: none" class="form-group {{ $errors->has('wire_fees_bank') ? 'has-error' : ''}}">
            <label for="wire_fees_bank" class="col-md-4 control-label">
                 Wire fees bank
            </label> 
            <div class="col-md-6">
            {!! Form::text('wire_fees_bank', !empty($transactions->wire_fees_bank) ? $transactions->wire_fees_bank : '', ['class' => 'form-control']) !!}
            {!! $errors->first('wire_fees_bank', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <!-- <div class="form-group {{ $errors->has('spread') ? 'has-error' : ''}}">
            <label for="spread" class="col-md-4 control-label">
                 Wires
            </label> 
            <div class="col-md-6">
            <input type="checkbox" name="wires" value="{{ $fee_schedules_fee['wires'] }}"/>
            </div>
        </div>

        <div class="form-group {{ $errors->has('tp_wires') ? 'has-error' : ''}}">
            <label for="tp_wires" class="col-md-4 control-label">
                Third party wires
            </label> 
            <div class="col-md-6">
            <input type="checkbox" name="tp_wires" value="{{ $fee_schedules_fee['third_party_wire'] }}"/>
            </div>
        </div> -->

        <div style="display: none" class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
            <label for="total" class="col-md-4 control-label">
                 Total
            </label> 
            <div class="col-md-6">
            {!! Form::text('total', !empty($transactions->total) ? $transactions->total : '', ['class' => 'form-control']) !!}
            {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div style="display: none" class="form-group {{ $errors->has('total_usd') ? 'has-error' : ''}}">
            <label for="total_usd" class="col-md-4 control-label">
                 Total amount USD
            </label> 
            <div class="col-md-6">
            {!! Form::text('total_usd', !empty($transactions->total_usd) ? $transactions->total_usd : '', ['class' => 'form-control']) !!}
            {!! $errors->first('total_usd', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group {{ $errors->has('gross_cash') ? 'has-error' : ''}}">
            <label for="gross_cash" class="col-md-4 control-label">
                 Gross Amount
            </label> 
            <div class="col-md-6">
            {!! Form::text('gross_cash', !empty($transactions->gross_cash) ? $transactions->gross_cash : '', ['class' => 'form-control']) !!}
            {!! $errors->first('gross_cash', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div style="display: none" class="form-group {{ $errors->has('broker_commission') ? 'has-error' : ''}}">
            <label for="broker_commission" class="col-md-4 control-label">
                 Broker commission
            </label> 
            <div class="col-md-6">
            {!! Form::text('broker_commission', !empty($transactions->broker_commission) ? $transactions->broker_commission : '', ['class' => 'form-control']) !!}
            {!! $errors->first('broker_commission', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div style="display: none" class="form-group {{ $errors->has('anul_bank_amt') ? 'has-error' : ''}}">
            <label for="anul_bank_amt" class="col-md-4 control-label">
                 Anual bank ammount
            </label> 
            <div class="col-md-6">
            {!! Form::text('anul_bank_amt', !empty($transactions->anul_bank_amt) ? $transactions->anul_bank_amt : '', ['class' => 'form-control']) !!}
            {!! $errors->first('anul_bank_amt', '<p class="help-block">:message</p>') !!}
            </div>
        </div>  

        <div style="display: none" class="form-group {{ $errors->has('additional_fee_rcved') ? 'has-error' : ''}}">
            <label for="additional_fee_rcved" class="col-md-4 control-label">
                 Additional fees received
            </label> 
            <div class="col-md-6">
            {!! Form::text('additional_fee_rcved', !empty($transactions->additional_fee_rcved) ? $transactions->additional_fee_rcved : '', ['class' => 'form-control']) !!}
            {!! $errors->first('additional_fee_rcved', '<p class="help-block">:message</p>') !!}
            </div>
        </div> 

        <div class="form-group {{ $errors->has('sattlement_charge') ? 'has-error' : ''}}">
            <label for="sattlement_charge" class="col-md-4 control-label">
                 Sattlement charge
            </label> 
            <div class="col-md-6">
            {!! Form::text('sattlement_charge', !empty($transactions->sattlement_charge) ? $transactions->sattlement_charge : '', ['class' => 'form-control']) !!}
            {!! $errors->first('sattlement_charge', '<p class="help-block">:message</p>') !!}
            </div>
        </div>  

        <div class="form-group {{ $errors->has('net_cash') ? 'has-error' : ''}}">
            <label for="net_cash" class="col-md-4 control-label">
                 Net Amount
            </label> 
            <div class="col-md-6">
            {!! Form::text('net_cash', !empty($transactions->net_cash) ? $transactions->net_cash : '', ['class' => 'form-control']) !!}
            {!! $errors->first('net_cash', '<p class="help-block">:message</p>') !!}
            </div>
        </div>  

        <div style="display: none" class="form-group {{ $errors->has('banked') ? 'has-error' : ''}}">
            <label for="banked" class="col-md-4 control-label">
                 Banked
            </label> 
            <div class="col-md-6">
            {!! Form::select('banked', $banked, !empty($banked) ? $banked : '', ['class' => 'form-control select2', 'multiple' =>false ,'id'=> 'banked' ]) !!}
            {!! $errors->first('banked', '<p class="help-block">:message</p>') !!}
            </div>
        </div>  

        <div style="display: none" class="form-group {{ $errors->has('cash_through_cib') ? 'has-error' : ''}}">
            <label for="cash_through_cib" class="col-md-4 control-label">
                 Cash through cib
            </label> 
            <div class="col-md-6">
            {!! Form::text('cash_through_cib', !empty($transactions->cash_through_cib) ? $transactions->cash_through_cib : '', ['class' => 'form-control']) !!}
            {!! $errors->first('cash_through_cib', '<p class="help-block">:message</p>') !!}
            </div>
        </div>  

        <div class="form-group {{ $errors->has('cash_through_rbc') ? 'has-error' : ''}}">
            <label for="cash_through_rbc" class="col-md-4 control-label">
                 Cash through rbc
            </label> 
            <div class="col-md-6">
            {!! Form::text('cash_through_rbc', !empty($transactions->cash_through_rbc) ? $transactions->cash_through_rbc : '', ['class' => 'form-control']) !!}
            {!! $errors->first('cash_through_rbc', '<p class="help-block">:message</p>') !!}
            </div>
        </div>  

        <div style="display: none" class="form-group {{ $errors->has('income') ? 'has-error' : ''}}">
            <label for="income" class="col-md-4 control-label">
                 Income
            </label> 
            <div class="col-md-6">
            {!! Form::text('income', !empty($transactions->income) ? $transactions->income : '', ['class' => 'form-control']) !!}
            {!! $errors->first('income', '<p class="help-block">:message</p>') !!}
            </div>
        </div>  

        <div style="display: none" class="form-group {{ $errors->has('expense') ? 'has-error' : ''}}">
            <label for="expense" class="col-md-4 control-label">
                 Expense
            </label> 
            <div class="col-md-6">
            {!! Form::text('expense', !empty($transactions->expense) ? $transactions->expense : '', ['class' => 'form-control']) !!}
            {!! $errors->first('expense', '<p class="help-block">:message</p>') !!}
            </div>
        </div> 

        <!-- <div class="form-group {{ $errors->has('ticket_charge') ? 'has-error' : ''}}">
            <label for="ticket_charge" class="col-md-4 control-label">
                 Ticket charge
            </label> 
            <div class="col-md-6">
            {!! Form::text('ticket_charge', !empty($transactions->ticket_charge) ? $transactions->ticket_charge : '', ['class' => 'form-control']) !!}
            {!! $errors->first('ticket_charge', '<p class="help-block">:message</p>') !!}
            </div>
        </div>  -->

        <div style="display: none" class="form-group {{ $errors->has('dwac_dtc') ? 'has-error' : ''}}">
            <label for="dwac_dtc" class="col-md-4 control-label">
                Dwac/Dtc 
            </label> 
            <div class="col-md-6">
                {!! Form::checkbox('dwac_dtc', $fee_schedules_fee['dwac_dtc'], !empty($transactions->dwac_dtc) ? 'checked="checked"' : '', array('id'=>'dwac_dtc')) !!}
            </div>
        </div>

        <div style="display: none" class="form-group {{ $errors->has('cert_clearance') ? 'has-error' : ''}}">
            <label for="cert_clearance" class="col-md-4 control-label">
                Certification clearance
            </label> 
            <div class="col-md-6">
                {!! Form::checkbox('cert_clearance', $fee_schedules_fee['certification_clearance'], !empty($transactions->cert_clearance) ? 'checked="checked"' : '', array('id'=>'cert_clearance')) !!}
            </div>
        </div>

        <div style="display: none" class="form-group {{ $errors->has('management_fees') ? 'has-error' : ''}}">
            <label for="management_fees" class="col-md-4 control-label">
                Management fees
            </label> 
            <div class="col-md-6">
                {!! Form::checkbox('management_fees', $fee_schedules_fee['management_fees'], !empty($transactions->management_fees) ? 'checked="checked"' : '', array('id'=>'management_fees')) !!}
            </div>
        </div>

        <div style="display: none" class="form-group {{ $errors->has('fed_ex') ? 'has-error' : ''}}">
            <label for="fed_ex" class="col-md-4 control-label">
                Fed Ex
            </label> 
            <div class="col-md-6">
                {!! Form::checkbox('fed_ex', $fee_schedules_fee['fed_ex'], !empty($transactions->fed_ex) ? 'checked="checked"' : '', array('id'=>'fed_ex'

                )) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-4 col-md-4">
                {!! Form::submit(!empty($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
</div>

@section('footerExtra')
@push('js')
<script>
        $(document).ready(function() {

            $('input[type="text"]').focusout(function(){
                if ($(this).val() == '') {
                    var initVal = 0;
                    $(this).val(initVal.toFixed(2));
                }
            });

            $('input[name="trade_date"]').focusout(function() {
                if ($(this).val() != '') {
                   var d = new Date($(this).val()).getDate() + 2;
                   var m = new Date($(this).val()).getMonth();
                   var y = new Date($(this).val()).getFullYear();
                   var day = new Date($(this).val()).getDay();
                   var finalDate = (m+1)+'/'+d+'/'+y;
                   if (day == 5) {
                        finalDate = (m+1)+'/'+(d+1)+'/'+y;
                   }
                   $('input[name="sattle_date"]').val(finalDate);
                }
            });

            $('input[name="price"]').focusout(function(){
                var price = parseFloat($('input[name="price"]').val());
                var trans_type = $('select[name="transaction_types"]').val();
                var qty = parseFloat($('input[name="qty"]').val());
                var ammount = calculateAmount(qty, price, trans_type);
                $('input[name="amount"]').val(ammount);
                $('input[name="actual_price"]').val(parseFloat(0));
            });

            $('input[name="wire_fees_bank"]').focusout(function(){
                var total = calculateTotal();
                $('input[name="total"]').val(total.toFixed(2));
            });

            $('input[name="broker_commission"]').focusout(function() {
                
                var brokr_commission = parseFloat($('input[name="broker_commission"]').val());
                var gross_cash = parseFloat($('input[name="gross_cash"]').val());

                if (brokr_commission != 0) {
                    var anul_bank_amt = parseFloat(gross_cash - brokr_commission);
                    $('input[name="anul_bank_amt"]').val(anul_bank_amt);
                } else {
                    var amt = $('input[name="total"]').val();
                    $('input[name="anul_bank_amt"]').val(amt);
                }
                
            });

            $('input[name="sattlement_charge"]').focusout(function(){
                var sattlement_charge = parseFloat($('input[name="sattlement_charge"]').val());
                var anul_bank_amt = parseFloat($('input[name="anul_bank_amt"]').val());
                var brokr_commission = parseFloat($('input[name="broker_commission"]').val());
                var net_cash = calculateNetCash(anul_bank_amt, sattlement_charge, brokr_commission);
                if (isNaN(net_cash)){
                    $('input[name="net_cash"]').val(parseFloat(0));
                } else {
                    $('input[name="net_cash"]').val(net_cash);
                }
            });

            $('select[name="banked"]').on('change', function() {
                var banked = $('select[name="banked"]').val();
                var net_cash = $('input[name="net_cash"]').val();
                if (banked == 'YES') {
                    $('input[name="cash_through_cib"]').val(net_cash);
                    $('input[name="cash_through_rbc"]').val(0);
                }
                if (banked == 'REC') {
                    $('input[name="cash_through_rbc"]').val(net_cash);
                    $('input[name="cash_through_cib"]').val(0);
                }
                if (banked == '0') {
                    $('input[name="cash_through_rbc"]').val(0);
                    $('input[name="cash_through_cib"]').val(0);
                }
            });

            $('input[name="additional_fee_rcved"]').focusout(function(){
                calculateIncome();
            });

            $('input[name="sattlement_charge"]').focusout(function(){
                calculateExpense();
            });

            $('select[name="curreny_id"]').on("change", function(){
                var currency = $(this).val();
                if (currency == '1') {
                    $('input[name="fx_rate"]').val(1);
                } else {
                    $('input[name="fx_rate"]').val(0);
                }
            });

            $('input[name="commission_percentage"]').focusout(function(){
                calculateCommissionAmt();
            });

        });

        function calculateAmount(qty = 0, price = 0, trans_type = '') {
            if (trans_type != 10) {
                return parseFloat(qty * price);
            } else {
                return parseFloat(qty * -price);
            }
        }

        function calculateTotal() {
            var commission_ammount = parseFloat($('input[name="commission_ammount"]').val());
            var wire_fees_bank = parseFloat($('input[name="wire_fees_bank"]').val());
            var amt = parseFloat($('input[name="amount"]').val());
            var wire_fees_income = parseFloat($('input[name="wire_fees_income"]').val());
            var fx_rate = parseFloat($('input[name="fx_rate"]').val());

            if (fx_rate == '') {
                fx_rate = 1;
            } else {
                fx_rate = fx_rate;
            }
            var total = (amt - commission_ammount + wire_fees_income + wire_fees_bank) * fx_rate;
            calculateGrossTotal();
            var total_usd = parseFloat(total / fx_rate);
            $('input[name="total_usd"]').val(total_usd.toFixed(2));
            return total;
        }

        function calculateGrossTotal() {
            var actual_price = parseFloat($('input[name="actual_price"]').val());
            var amount = parseFloat($('input[name="amount"]').val());
            var fx_rate = parseFloat($('input[name="fx_rate"]').val());
            var qty = parseFloat($('input[name="qty"]').val());
            if (actual_price == 0) {
                var gross_total = (amount * fx_rate);
                $('input[name="gross_cash"]').val(gross_total.toFixed(2));
            } else {                
                var gross_total = (actual_price * qty) / fx_rate;
                $('input[name="gross_cash"]').val(gross_total.toFixed(2));
            }
        }

        function calculateNetCash(anul_bank_amt = 0, sattlement_charge = 0, brokr_commission = 0) {
            var net_cash = parseFloat(anul_bank_amt - sattlement_charge);
            var expanse = parseFloat(sattlement_charge + brokr_commission);
            if (isNaN(expanse)){
                $('input[name="expense"]').val(parseFloat(0));
            } else {
                $('input[name="expense"]').val(expanse);
            }
            
            return net_cash.toFixed(2);
        }

        function calculateIncome() {
            var comm_amt = parseFloat($('input[name="commission_ammount"]').val());
            var spread = parseFloat($('input[name="spread"]').val());
            var wire_fees_income = parseFloat($('input[name="wire_fees_income"]').val());
            var additional_fee_rcved = parseFloat($('input[name="additional_fee_rcved"]').val());
            var income = parseFloat(comm_amt + spread + wire_fees_income + additional_fee_rcved);
            return $('input[name="income"]').val(income.toFixed(2));
        }

        function calculateExpense() {
            var broker_commission = parseFloat($('input[name="broker_commission"]').val());
            var sattlement_charge = parseFloat($('input[name="sattlement_charge"]').val());

            var expense = broker_commission + sattlement_charge;
            return $('input[name="expense"]').val(expense);
        }

        function calculateCommissionAmt(){
            var commission_percentage = parseFloat($('input[name="commission_percentage"]').val());
            var amount = parseFloat($('input[name="amount"]').val());

            if (commission_percentage == 0) {
                var commission_ammount = 0;
            } else if (Math.abs(parseFloat(amount * commission_percentage) / 100) < 150) {
                var commission_ammount = 150;
            } else {
                var commission_ammount = Math.abs(parseFloat(amount * commission_percentage) / 100);
            }

            $('input[name="commission_ammount"]').val(commission_ammount.toFixed(2));
        }
</script>
@endpush
@endsection
