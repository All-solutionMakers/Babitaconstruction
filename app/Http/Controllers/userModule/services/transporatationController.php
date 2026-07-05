<?php

namespace App\Http\Controllers\userModule\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class transporatationController extends Controller
{
    public function view(){
        return view('user.transportation');
    }
}