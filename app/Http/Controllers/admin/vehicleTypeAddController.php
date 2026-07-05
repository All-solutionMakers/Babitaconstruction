<?php

namespace App\Http\Controllers\admin;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\vehicle_typelist;

class vehicleTypeAddController extends Controller
{
    public function view(Request $request)
    {
        try {
            $adminData = [];
            if (session::has('admin_id')) {
                $adminData = DB::table('admins as ad')
                    ->where('ad.id', session::get('admin_id'))
                    ->first();
            } else {
                return redirect()->back()->with('error', 'unauthorized access');
            }

            $vehicle_typelists = DB::table('vehicle_typelists as vts')
            ->orderBy('vts.id','DESC')
                ->join('admins as ad', 'vts.created_by', '=', 'ad.id')
                ->select('vts.type', 'vts.id', 'ad.name as created_by')
                ->get();

            // dd($vehicle_typelist);
            $data = compact('adminData', 'vehicle_typelists');

            if ($request->ajax()) {
                # code...
                return view('admin_dashboard.masterAddvehicleType.vehicletypeAddAjax')->with($data)->render();
            } else {
                # code...
                return view('admin_dashboard.masterAddvehicleType.vehicletypeAdd')->with($data);
            }


            // }
        } catch (Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            var_dump('Exception Code: ' . $message);
            return redirect()->back()->with('error', 'something went wrong');
        }
    }



    public function insert(Request $request)
    {
        $request->validate([
            'vehicle_type_name' => 'required|unique:vehicle_typelists,type',
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


            $vehicle_typelist = new vehicle_typelist;

            $vehicle_typelist->type = $request->vehicle_type_name;
            $vehicle_typelist->created_by = $adminData->id;
            $vehicle_typelist->save();

            return response()->json(['success' => true]);
        } catch (Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            var_dump('Exception Code: ' . $message);
            return redirect()->back()->with('error', 'something went wrong');
        }
    }



    public function update(Request $request)
    {
        $request->validate([
            'vehicle_type_name' => 'required|unique:vehicle_typelists,type,'.$request->id,
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

            $vehicle_typelist =  vehicle_typelist::find($request->id);

            $vehicle_typelist->type = $request->vehicle_type_name;
            $vehicle_typelist->update();

            return response()->json(['success' => true]);
        } catch (Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            var_dump('Exception Code: ' . $message);
            // return redirect()->back()->with('error', 'something went wrong');
        }
    }

}