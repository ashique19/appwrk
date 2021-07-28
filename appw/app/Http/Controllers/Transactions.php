<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Http\Requests\transactionStoreRequest;
use \Carbon\Carbon;

class Transactions extends Controller
{
    
    public function index()
    {
        
        return response()->json( Transaction::orderBy('transaction_date', 'desc')->get() );
        
    }

    public function store(transactionStoreRequest $request)
    {
        
        $data = [
            'description'       => $request->description,
            'transaction_date'  => Carbon::now(),
            'credit'            => $request->credit == 'credit' ? $request->debit : 0,
            'debit'             => $request->credit == 'debit' ? $request->debit : 0
        ];

        $latestTransaction = Transaction::orderBy('transaction_date', 'desc')->first();

        $balance = $latestTransaction ? $latestTransaction->running_balance : 0;

        $data['running_balance'] = $request->credit == 'credit' ? $balance + $request->debit : $balance - $request->debit;

        return Transaction::create( $data );
        
    }

}
