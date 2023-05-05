<?php

namespace App\Http\Controllers;
use App\Models\transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showTransactions($id){

        $transaction = Transaction::where('user_id',$id)->get();

        return view('transaction', [
            'transaction' => $transaction,
        ]);
    }
}
