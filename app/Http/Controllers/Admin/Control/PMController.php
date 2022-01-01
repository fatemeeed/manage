<?php

namespace App\Http\Controllers\Admin\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PMController extends Controller
{
    public function index(){

        return view('admin.control.pm.index');
    }
    public function pmDetail(){

        return view('admin.control.pm.pmDetail');
    }

    public function notPm(){

        return view('admin.control.pm.notPm');
    }
    public function controlVersion(){

        return view('admin.control.pm.controlVersion');
    }
}
