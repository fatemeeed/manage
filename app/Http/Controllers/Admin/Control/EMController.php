<?php

namespace App\Http\Controllers\Admin\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EMController extends Controller
{
    public function index(){

        return view('admin.control.em.index');
    }

    public function newEM(){

        return view('admin.control.em.newEM');
    }
}
