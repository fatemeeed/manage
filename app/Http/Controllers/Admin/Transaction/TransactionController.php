<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function performance(){

        return view('admin.transaction.performance');

    }
    
    public function notTransaction(){

        return view('admin.transaction.notTransaction');

    }
    
    
}
