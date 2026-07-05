<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class driver_allocation_Controller extends Controller
{
    public function view(){
        return view('admin.driver_allocation');
    }
}
