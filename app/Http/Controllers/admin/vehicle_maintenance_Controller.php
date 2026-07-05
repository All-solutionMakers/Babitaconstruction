<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vehicle_maintenance_Controller extends Controller
{
    public function view(){
        return view('admin.vehicle_maintenance');
    }
}
