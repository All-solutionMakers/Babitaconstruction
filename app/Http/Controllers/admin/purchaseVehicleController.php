<?php

namespace App\Http\Controllers\admin;


use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

use App\Models\vehiclepurchase_inquary;

class purchaseVehicleController extends Controller
{
    public function view(Request $request)
    {
        try {

            $vehicle_typelists = DB::table('vehicle_typelists as vts')
                ->orderBy('vts.id', 'DESC')
                ->join('admins as ad', 'vts.created_by', '=', 'ad.id')
                ->select('vts.type', 'vts.id', 'ad.name as created_by')
                ->get();

            $transaction_methord = DB::table('transaction_methord as tm')
                ->orderBy('id', 'DESC')
                ->get();

            $data = compact('vehicle_typelists', 'transaction_methord');

            return view('user.purchaseVehicleRegisterPage')->with($data);
        } catch (Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            // var_dump('Exception Code: ' . $message);
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    public function insert(Request $request)
    {

        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'contact_number' => 'required',
                'address' => 'required',
                'vehicle_type' => 'required',
                'transaction_methord' => 'required',
                'min_range' => 'required',
                'max_range' => 'required',
            ]);

            // dd('ok');

            if ($request->has('finance_name')) {
                $request->validate([
                    'finance_name' => 'required',
                ]);
            }

            $cur_date = Carbon::now('Asia/Kolkata');

            try {
                //code...

                $vehiclepurchase_inquary =  new vehiclepurchase_inquary;
                $vehiclepurchase_inquary->name = $request->name;
                $vehiclepurchase_inquary->email = $request->email;
                $vehiclepurchase_inquary->phone_no = $request->contact_number;
                $vehiclepurchase_inquary->alternate_contact_number = $request->alternate_contact_number;
                $vehiclepurchase_inquary->address = $request->address;
                $vehiclepurchase_inquary->vehicle_type = $request->vehicle_type;
                $vehiclepurchase_inquary->transaction_methord_id = $request->transaction_methord;
                $vehiclepurchase_inquary->budget_from = $request->min_range;
                $vehiclepurchase_inquary->budget_to = $request->max_range;
                $vehiclepurchase_inquary->finance_name = $request->finance_name;
                $vehiclepurchase_inquary->created_at = $cur_date;
                $vehiclepurchase_inquary->save();

                return redirect()->back()->with('success', 'Thanks Your Inquiry Sent To Our Team Contact Soon !!');
            } catch (\Exception $th) {
                //throw $th;

                $message = $th->getMessage();
                var_dump('Exception Code: ' . $message);
                // return redirect()->back()->with('error', 'something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}