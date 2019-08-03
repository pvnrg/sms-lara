<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','transaction_id','client_id', 'trans_type_id', 'sec_id', 'trade_date', 'sattle_date' ,'curreny_id' ,'qty', 'price', 'amount', 'fx_rate', 'commission_percentage', 'commission_ammount', 'spread', 'total', 'gross_cash', 'broker_commission', 'anul_bank_amt', 'sattlement_charge', 'net_cash', 'banked', 'cash_through_cib', 'cash_through_rbc', 'income', 'expense', 'ticket_charge', 'dwac_dtc', 'cert_clearance', 'wires', 'tp_wires', 'management_fees', 'fed_ex'];


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
    }
}
