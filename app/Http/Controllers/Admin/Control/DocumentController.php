<?php

namespace App\Http\Controllers\Admin\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function merchDocument(){

        return view('admin.control.document.merchDocument');
    }

    public function projectDetail(){

        return view('admin.control.document.projectDetail');
    }


}
