<?php

namespace App\Http\Controllers\userModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function view(){
        return view('user.about');
    }
}
