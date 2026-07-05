<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\usertype;
use App\Models\admin;
use Illuminate\Validation\Rules\Password;

class user_management_Controller extends Controller
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

            $employee = DB::table('admins as ad')
                ->orderBy('ad.id', 'DESC')
                ->join('usertypes as us', 'ad.designation', '=', 'us.id')
                ->join('branches as brch', 'ad.branch_id', '=', 'brch.id')
                ->select(['ad.id as id', 'reg_no', 'ad.name', 'mobile_no', 'email', 'password', 'status', 'brch.name as branch_name', 'ad.branch_id','us.role as designation'])
                ->paginate(15);
            // dd($employee);

            $branchLists = DB::table('branches as bnchs')
                ->orderBy('bnchs.name', 'ASC')
                ->select('name', 'id')
                ->get();
            // $data = compact('employee');
            // dd($employee);

            $usertype =  usertype::get();

            $data = compact('adminData', 'employee', 'branchLists','usertype');


            return view('admin_dashboard.usermanagement.user_management')->with($data);
        } catch (\Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            var_dump('Exception Code: ' . $message);

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

            $branchLists = DB::table('branches as bnchs')
                ->orderBy('bnchs.name', 'ASC')
                ->select('name', 'id')
                ->get();
            // dd($branchLists);
            $usertype =  usertype::get();



            $data = compact('adminData', 'branchLists', 'usertype');
            return view('admin_dashboard.usermanagement.user_managementcreate')->with($data);
        } catch (Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            var_dump('Exception Code: ' . $message);
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    public function insert(Request $request)
    {

        $validator = $request->validate([
            'name' => 'required',
            'mobile_no' => 'required|unique:admins',
            'email' => 'required|email',
            'password' => [
                'required',
                'string',
                Password::min(8)
                // ->mixedCase()
                // ->numbers()
                // ->symbols()
                // ->uncompromised(),
                // 'confirmed'
            ],
            'designation' => 'required',
            'status' => 'required',
            'branch' => 'required',
        ]);

        try {
            $adminData = [];
            if (session::has('admin_id')) {
                $adminData = DB::table('admins as ad')
                    ->where('ad.id', session::get('admin_id'))
                    ->first();
            } else {
                return redirect()->back()->with('error', 'unauthorized access');
            }



            $employee_list = DB::table('admins')->orderBy('id', 'DESC')->first();

            if ($employee_list == null) {
                $employee_list = 0;
            }

            $last_id = $employee_list->id;
            $user_id = sprintf('%06d', ++$last_id);

            $employee = new admin;
            $employee->reg_no = 'BBT' . $user_id;
            $employee->name = trim($request->name);
            $employee->mobile_no = trim($request->mobile_no);
            $employee->email = trim($request->email);
            $employee->password = trim($request->password);
            $employee->designation  = trim($request->designation);
            $employee->status = trim($request->status);
            $employee->branch_id = trim($request->branch);
            $employee->created_by = trim($adminData->id);
            $employee->save();


            $data = compact('adminData');

            return redirect()->route('user_management.view')->with($data);
        } catch (Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            var_dump('Exception Code: ' . $message);
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}