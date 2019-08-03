<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_id')->nullable();
            $table->integer('client_id')->nullable();
            $table->integer('trans_type_id')->nullable();
            $table->integer('sec_id')->nullable();
            $table->datetime('trade_date')->nullable(); 
            $table->datetime('sattle_date')->nullable(); 
            $table->integer('curreny_id')->nullable();
            $table->string('qty')->nullable(); 
            $table->string('price')->nullable(); 
            $table->string('actual_price')->nullable(); 
            $table->string('amount')->nullable(); // qty * price
            $table->string('fx_rate')->nullable(); 
            $table->string('commission_percentage')->nullable(); 
            $table->string('commission_ammount')->nullable(); 
            $table->string('spread')->nullable(); 
            $table->string('wire_fees_income')->nullable();
            $table->string('wire_fees_bank')->nullable();
            $table->string('total')->nullable(); 
            $table->string('total_usd')->nullable(); 
            $table->string('gross_cash')->nullable(); 
            $table->string('broker_commission')->nullable(); 
            $table->string('anul_bank_amt')->nullable(); 
            $table->string('sattlement_charge')->nullable();
            $table->string('net_cash')->nullable();
            $table->string('banked')->nullable();
            $table->string('cash_through_cib')->nullable();
            $table->string('cash_through_rbc')->nullable();
            $table->string('income')->nullable();
            $table->string('expense')->nullable();
            $table->string('ticket_charge')->nullable();
            $table->string('dwac_dtc')->nullable();
            $table->string('cert_clearance')->nullable();
            $table->string('wires')->nullable();
            $table->string('tp_wires')->nullable();
            $table->string('management_fees')->nullable();
            $table->string('fed_ex')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
