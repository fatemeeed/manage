<?php

namespace App\Http\Controllers\Admin\Vip;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VipController extends Controller
{
    public function slumpVip(){

        return view('admin.vip.slumpVip');
    }

    public function stopVip(){

        return view('admin.vip.stopVip');
    }

    public function plansVip(){

        return view('admin.vip.plansVip');
    }
}
