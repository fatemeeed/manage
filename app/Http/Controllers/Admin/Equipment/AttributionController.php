<?php

namespace App\Http\Controllers\Admin\Equipment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttributionController extends Controller
{
    public function create(){

        return view('admin.equipment.attribution.create');
    }

    public function changeStatus(){

        return view('admin.equipment.attribution.changeStatus');

    }

    public function attributionHistory(){

        return view('admin.equipment.attribution.attributionHistory');
    }

    public function equipmentControl(){

        return view('admin.equipment.attribution.equipmentControl');
    }

    public function attributionConflict(){

        return view('admin.equipment.attribution.attributionConflict');
    }
}
