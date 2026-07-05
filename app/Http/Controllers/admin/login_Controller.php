<?php

namespace App\Http\Controllers\admin;

use App\Models\usertype;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class login_Controller extends Controller
{
    public function view()
    {
        // dd('ok');
        return view('admin_dashboard.login');
    }




    public function login(Request $login)
    {
        // dd($login);
        $login->validate([
            'mobile_number' => 'required',
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
        ]);
        try {
            //code...
            // dd($login->mobile_number);
            $user = DB::table('admins')->where('mobile_no', $login->mobile_number)->first();

            // dd($user);
            if ($user != null) {
                // dd($user);
                if ($user->status == 'active') {
                    if ($user->password == $login->password) {
                        $admin = $user->id;
                        $role = $user->designation;

                        $login->session()->put('admin_id', $admin);
                        $login->session()->put('role_id', $role);
                        // dd('ok');
                        return redirect()->route('dashboard.view');
                    } else {
                        return back()->with('error', 'Password dose not match');
                    }
                } else {
                    return back()->with('error', 'Your id temporary block contact to admin');
                }
            } else {
                return back()->with('error', 'Please Enter valid Credential');
                // return back()->with('error', 'password Dose Not Macth !!');
            }
        } catch (\Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            // var_dump('Exception Message: ' . $message);

            // $code = $e->getCode();
            // var_dump('Exception Code: ' . $code);

            // $string = $e->__toString();
            // var_dump('Exception String: ' . $string);
            // exit;

            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    // logout
    public function logout()
    {
        // dd('okk');
        if (session::has('admin_id')) {
            session::pull('admin_id');

            return redirect()->route('login.view');
        } else {
            // Handle case when admin_id is not in session
            return redirect()->back()->with('error', 'Unauthorized access.');
        }
    }
        
}