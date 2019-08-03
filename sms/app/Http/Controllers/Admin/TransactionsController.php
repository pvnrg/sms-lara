<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\ActivationMail;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use App\Transactions;
use App\TransactionTypes;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\FeeSchedules;
use App\ClientClasses;
use App\SecIds;
use DB;
use App\Notifications\Signup;

class TransactionsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('permission:access.users');
        // $this->middleware('permission:access.user.edit')->only(['edit', 'update']);
        // $this->middleware('permission:access.user.create')->only(['create', 'store']);
        // $this->middleware('permission:access.user.delete')->only('destroy');
    }
    
    public function index(Request $request)
    {
        $transactions = DB::select('select T.id, T.trade_date, U.name as client_name from transactions T left join users U on U.id = T.client_id where T.deleted_at IS NULL ORDER BY T.created_at DESC');
        // dd($transactions);
        
        return view('admin.transactions.index',compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $clients_rec = DB::select('select U.name, U.id from users U left join role_user UR on U.id = UR.role_id left join roles R on R.id = UR.role_id WHERE R.id NOT IN ("1","4") ORDER BY U.name ASC');
        $clients = [];
        $clients[0] = "Select client name";
        foreach ($clients_rec as $client) {
            $clients[$client->id] = $client->name;
        }

        $transaction_types_rec = TransactionTypes::select('id', 'name')->get();
        $transaction_types = [];
        $transaction_types[0] = "Select transcation type";
        foreach ($transaction_types_rec as $ty) {
            $transaction_types[$ty->id] = $ty->name;
        }

        $sec_ids_rec = SecIds::select('id', 'name')->get();
        $sec_ids = [];
        $sec_ids[0] = "Select SEC ID";
        foreach ($sec_ids_rec as $sec_id) {
            $sec_ids[$sec_id->id] = $sec_id->name;
        }

        $fee_schedules_rec = FeeSchedules::select('id', 'name', 'fees')->get();
        $fee_schedules = [];
        $fee_schedules_fee = [];
        foreach ($fee_schedules_rec as $fee_schedule) {
            $fee_schedules[$fee_schedule->id] = $fee_schedule->name;
        }
        foreach ($fee_schedules_rec as $fee_schedule) {
            $fee_schedules_fee[$fee_schedule->name] = $fee_schedule->fees;
        }
        $transactions = Transactions::select()->pluck('id','transaction_id','client_id', 'trans_type_id', 'sec_id', 'trade_date', 'sattle_date' ,'curreny_id' ,'qty', 'price', 'amount', 'fx_rate', 'commission_percentage', 'commission_ammount', 'spread', 'total', 'gross_cash', 'broker_commission', 'anul_bank_amt', 'sattlement_charge', 'net_cash', 'banked', 'cash_through_cib', 'cash_through_rbc', 'income', 'expense', 'ticket_charge', 'dwac_dtc', 'cert_clearance', 'wires', 'tp_wires', 'management_fees', 'fed_ex');

        $curreny_id = ['0' => 'Select currency', '1' => 'USD', '2' => 'CAD'];
        $banked = ['0' => 'Select banked', 'YES' => 'YES', 'REC' => 'REC'];
       
        return view('admin.transactions.create', compact('fee_schedules_fee', 'clients', 'transaction_types', 'sec_ids', 'fee_schedules', 'curreny_id', 'banked', 'transactions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
            'clients_id' => 'required',
            'transaction_types' => 'required'
            ]
        );
        
        $transaction = new Transactions();
        // dd($request->all());
        $transaction_id = time().'SMS';

        $transaction->transaction_id = $transaction_id;
        $transaction->client_id = $request->clients_id;
        $transaction->trans_type_id = $request->transaction_types;
        $transaction->sec_id = $request->sec_ids;
        $transaction->description = $request->description;
        $transaction->trade_date = date("Y-m-d", strtotime($request->trade_date));
        $transaction->sattle_date = date("Y-m-d", strtotime($request->sattle_date));
        $transaction->curreny_id = $request->curreny_id;
        $transaction->qty = $request->qty;
        $transaction->price = $request->price;
        $transaction->actual_price = $request->actual_price;
        $transaction->amount = $request->amount;
        $transaction->fx_rate = $request->fx_rate;
        $transaction->commission_percentage = $request->commission_percentage;
        $transaction->commission_ammount = $request->commission_ammount;
        $transaction->spread = $request->spread;
        $transaction->wire_fees_income = $request->wire_fees_income;
        $transaction->wire_fees_bank = $request->wire_fees_bank;
        $transaction->total = $request->total;
        $transaction->total_usd = $request->total_usd;
        $transaction->gross_cash = $request->gross_cash;
        $transaction->broker_commission = $request->broker_commission;
        $transaction->anul_bank_amt = $request->anul_bank_amt;
        $transaction->sattlement_charge = $request->sattlement_charge;
        $transaction->net_cash = $request->net_cash;
        $transaction->banked = $request->banked;
        $transaction->cash_through_cib = $request->cash_through_cib;
        $transaction->cash_through_rbc = $request->cash_through_rbc;
        $transaction->income = $request->income;
        $transaction->expense = $request->expense;
        $transaction->dwac_dtc = $request->dwac_dtc;
        $transaction->cert_clearance = $request->cert_clearance;
        $transaction->management_fees = $request->management_fees;
        $transaction->fed_ex = $request->fed_ex;
        $transaction->save();
        
        Session::flash('flash_message', __('Transcation created successfully!'));
        return redirect('admin/transactions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function show($id)
    {
        $transaction = DB::select('select T.*, U.name as client_name, TY.name as trans_type_name from transactions T left join users U on U.id = T.client_id left join transaction_types TY on TY.id = T.trans_type_id ORDER BY T.created_at DESC');
        // dd($transaction);
        $transaction = $transaction[0];
        if($transaction) {
            return view('admin.transactions.show', compact('transaction'));
        }else{
            return redirect('admin/transactions');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return void
     */
    public function edit($id)
    {
        $transactions = Transactions::findOrFail($id);
   
        if($transactions) {

            $clients_rec = DB::select('select U.name, U.id from users U left join role_user UR on U.id = UR.role_id left join roles R on R.id = UR.role_id WHERE R.id NOT IN ("1","4") ORDER BY U.name ASC');
            $clients = [];
            $clients[0] = "Select client name";
            foreach ($clients_rec as $client) {
                $clients[$client->id] = $client->name;
            }

            $transaction_types_rec = TransactionTypes::select('id', 'name')->get();
            $transaction_types = [];
            $transaction_types[0] = "Select transcation type";
            foreach ($transaction_types_rec as $ty) {
                $transaction_types[$ty->id] = $ty->name;
            }

            $sec_ids_rec = SecIds::select('id', 'name')->get();
            $sec_ids = [];
            $sec_ids[0] = "Select SEC ID";
            foreach ($sec_ids_rec as $sec_id) {
                $sec_ids[$sec_id->id] = $sec_id->name;
            }

            $fee_schedules_rec = FeeSchedules::select('id', 'name', 'fees')->get();
            $fee_schedules = [];
            $fee_schedules_fee = [];
            foreach ($fee_schedules_rec as $fee_schedule) {
                $fee_schedules[$fee_schedule->id] = $fee_schedule->name;
            }
            foreach ($fee_schedules_rec as $fee_schedule) {
                $fee_schedules_fee[$fee_schedule->name] = $fee_schedule->fees;
            }

            $curreny_id = ['0' => 'Select currency', '1' => 'USD', '2' => 'CAD'];
            $banked = ['0' => 'Select banked', 'YES' => 'YES', 'REC' => 'REC'];

            return view('admin.transactions.edit', compact('transactions','fee_schedules_fee', 'clients', 'transaction_types', 'sec_ids', 'fee_schedules', 'curreny_id', 'banked'));
        } else {
            return redirect('admin/transactions');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function update($id, Request $request)
    {  
        $this->validate($request,
            [
            'clients_id' => 'required',
            'transaction_types' => 'required'
            ]
        );
        $transaction = Transactions::findOrFail($id);
        
        $transaction->client_id = $request->clients_id;
        $transaction->trans_type_id = $request->transaction_types;
        $transaction->sec_id = $request->sec_ids;
        $transaction->description = $request->description;
        $transaction->trade_date = date("Y-m-d", strtotime($request->trade_date));
        $transaction->sattle_date = date("Y-m-d", strtotime($request->sattle_date));
        $transaction->curreny_id = $request->curreny_id;
        $transaction->qty = $request->qty;
        $transaction->price = $request->price;
        $transaction->actual_price = $request->actual_price;
        $transaction->amount = $request->amount;
        $transaction->fx_rate = $request->fx_rate;
        $transaction->commission_percentage = $request->commission_percentage;
        $transaction->commission_ammount = $request->commission_ammount;
        $transaction->spread = $request->spread;
        $transaction->wire_fees_income = $request->wire_fees_income;
        $transaction->wire_fees_bank = $request->wire_fees_bank;
        $transaction->total = $request->total;
        $transaction->total_usd = $request->total_usd;
        $transaction->gross_cash = $request->gross_cash;
        $transaction->broker_commission = $request->broker_commission;
        $transaction->anul_bank_amt = $request->anul_bank_amt;
        $transaction->sattlement_charge = $request->sattlement_charge;
        $transaction->net_cash = $request->net_cash;
        $transaction->banked = $request->banked;
        $transaction->cash_through_cib = $request->cash_through_cib;
        $transaction->cash_through_rbc = $request->cash_through_rbc;
        $transaction->income = $request->income;
        $transaction->expense = $request->expense;
        $transaction->dwac_dtc = $request->dwac_dtc;
        $transaction->cert_clearance = $request->cert_clearance;
        $transaction->management_fees = $request->management_fees;
        $transaction->fed_ex = $request->fed_ex;
        $transaction->save();

        Session::flash('flash_message', __('Transaction updated successfully!'));        
        return redirect('admin/transactions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return void
     */
    public function destroy(Request $request, $id)
    {
        $result = array();
        try {
            $res = Transactions::where("id", $id)->first();
            if ($res) {
                
                Transactions::where("id", $id)->delete();

                $result['message'] = "Record Deleted Successfully.";
                $result['code'] = 200;
            } else {
                $result['message'] = "Something went wrong , Please try again later.";
                $result['code'] = 400;
            }
        } catch (\Exception $e) {
            $result['message'] = $e->getMessage();
            $result['code'] = 400;
        }

        if($request->ajax()) {
            return response()->json($result, $result['code']);
        } else {
            Session::flash('flash_message','Transaction Deleted Successfully!');
            return redirect('admin/transactions');
        }
    } 
}
