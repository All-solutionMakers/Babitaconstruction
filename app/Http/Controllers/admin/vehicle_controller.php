<?php

namespace App\Http\Controllers\admin;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class vehicle_controller extends Controller
{


    public function view()

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



            $leaseVehicleLists = DB::table('vehicleregistations as vreg')
                ->orderBy('vreg.id', 'DESC')
                ->join('registations as reg', 'vreg.register_id', '=', 'reg.id')
                ->join('vehicle_typelists as vhList', 'vreg.vehicle_type', '=', 'vhList.id')
                ->join('agreement_period as aggm', 'vreg.agreement_id', '=', 'aggm.id')
                ->join('transaction_methord as trnsm', 'vreg.transaction_methord_id', '=', 'trnsm.id')
                ->where('vreg.register_type', '=', 'lease vehicle')
                ->select(['reg.id', 'reg.owner_name', 'reg.email', 'reg.phone_no','reg.alternate_contact_number', 'reg.address', 'reg.status', 'reg.created_at', 'vreg.id as vreg_id', 'vreg.vehicle_no', 'vreg.model','vreg.finance_name', 'vreg.vehicle_front_img', 'vreg.vehicle_left_side_img', 'vreg.vehicle_right_side_img', 'vreg.vehicle_back_img', 'vreg.permit', 'vreg.polution', 'vreg.particular', 'vreg.fitness', 'vreg.rc', 'vreg.insurance', 'vreg.tax', 'vreg.listed_by', 'vreg.expected_price','vreg.created_at', 'vhList.type as vehicle_type', 'aggm.aggrement_period', 'trnsm.methord as transaction_methord'])
                ->get();

            $data = compact('adminData', 'leaseVehicleLists');

            // dd($leaseVehicleLists);

            return view('admin_dashboard.registationVehicle.leasevehicleList')->with($data);
        } catch (Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            var_dump('Exception Code: ' . $message);
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}
