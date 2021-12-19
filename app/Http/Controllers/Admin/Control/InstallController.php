<?php

namespace App\Http\Controllers\Admin\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstallController extends Controller
{
    public function waitingInstall(){

        return view('admin.control.install.waitingInstall');

    }

    public function installNoTransaction(){

        return view('admin.control.install.installNoTransaction');
        
    }

    public function installEvaluation(){

        return view('admin.control.install.installEvalution');
        
    }
}
