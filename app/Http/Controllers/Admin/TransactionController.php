<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\CsvExport;
use Maatwebsite\Excel\Facades\Excel;

class TransactionController extends Controller
{
    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    public function getList(){
        $transactions = $this->transaction->transactionList();
        return view('admin.checkout.index',compact('transactions'));
    }

    public function action($action, $id){
        $transactions = $this->transaction->actionId($action, $id);
        return redirect()->back()->with('success',$transactions);
    }

    public function csv_export(){
        return Excel::download(new CsvExport, 'order.csv');
    }
}
