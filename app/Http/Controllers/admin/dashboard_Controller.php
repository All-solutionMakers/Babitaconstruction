<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class dashboard_Controller extends Controller
{
    public function view()
    {

        try {
            //code...
            $adminData = [];
            if (session::has('admin_id')) {
                $adminData = DB::table('admins as ad')
                    ->where('ad.id', session::get('admin_id'))
                    ->first();
            } else {
                return redirect()->back()->with('error', 'unauthorized access');
            }

            $data = compact('adminData');

            return view('admin_dashboard.dashboard')->with($data);
        } catch (\Exception $th) {
            //throw $th;

            return redirect()->back()->with('error', 'something went wrong');
        }


    }
}