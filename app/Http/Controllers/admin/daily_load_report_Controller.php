<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class daily_load_report_Controller extends Controller
{
    public function view(){
        return view('admin.daily_load_report');
    }
}
