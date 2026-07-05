<?php

namespace App\Http\Controllers\admin;


use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class salevehicleListController extends Controller
{
    //
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

            $customerLists = DB::table('vehiclepurchase_inquaries as viqr')
                ->orderBy('viqr.id', 'DESC')
                ->join('vehicle_typelists as vtlist', 'viqr.vehicle_type', '=', 'vtlist.id') // Assuming `vehicle_type_id` is correct
                ->join('transaction_methord as transm', 'viqr.transaction_methord_id', '=', 'transm.id') // Assuming `transaction_methord_id` is correct
                ->select([
                    'viqr.id',
                    'viqr.name',
                    'viqr.email',
                    'viqr.phone_no',
                    'viqr.alternate_contact_number',
                    'viqr.address',
                    'viqr.finance_name',
                    'viqr.budget_from',
                    'viqr.budget_to',
                    'viqr.created_at',
                    'vtlist.type as vehicle_type',
                    'transm.methord as transaction_methord'
                ])
                ->get();

            //
            // dd($customerLists);
            $data = compact('adminData','customerLists');

            return view('admin_dashboard.saleVehicle.salevehiclelist')->with($data);
        } catch (\Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            var_dump('Exception Code: ' . $message);
            // return redirect()->back()->with('error', 'something went wrong');
        }
    }
}