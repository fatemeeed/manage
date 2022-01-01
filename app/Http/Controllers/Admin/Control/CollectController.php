<?php

namespace App\Http\Controllers\Admin\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectController extends Controller
{
    public function collect(){

        return view('admin.control.collect.collectReport');
    }
}
