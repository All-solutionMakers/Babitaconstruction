<?php

namespace App\Http\Controllers\admin;


use App\Models\branch;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class branch_Controller extends Controller
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


            $branches = DB::table('branches as brnch')
                ->orderBy('brnch.id', 'DESC')
                ->join('admins as ads', 'brnch.created_by', '=', 'ads.id')
                ->select(['brnch.id as id', 'brnch.name as branch_name', 'brnch.branch_code', 'brnch.address', 'ads.name'])
                ->paginate(5);

            // dd($branches);

            $data  = compact('adminData', 'branches');


            return view('admin_dashboard.branch.branch')->with($data);
        } catch (\Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            var_dump($message);
            // return redirect()->back()->with('error', 'something went wrong');
        }
    }


    public function createPage()
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


            return view('admin_dashboard.branch.create_branch')->with($data);
        } catch (\Exception $th) {
            //throw $th;
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    public function insert(Request $request)
    {

        $request->validate([
            'branch_name' => 'required|unique:branches,name',
            'branch_code' => 'required|unique:branches,branch_code',
            'address' => 'required',
        ]);
        try {
            $cur_date = Carbon::now('Asia/Kolkata');
            //code...
            $adminData = [];
            if (session::has('admin_id')) {
                $adminData = DB::table('admins as ad')
                    ->where('ad.id', session::get('admin_id'))
                    ->first();
            } else {
                return redirect()->back()->with('error', 'unauthorized access');
            }


            $branch = new branch();
            $branch->name = trim($request->branch_name);
            $branch->branch_code = trim($request->branch_code);
            $branch->address = trim($request->address);
            $branch->created_by = trim($adminData->id);
            $branch->created_at = trim($cur_date);
            $branch->save();

            return redirect()->route('branch.view')->with('success', 'Branch Create Successfull');
        } catch (\Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            var_dump($message);
            // return  redirect()->back()->with('error', 'Something Went Wrong');
        }
    }
}