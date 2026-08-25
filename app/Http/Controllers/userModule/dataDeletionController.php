<?php

namespace App\Http\Controllers\userModule;

use Illuminate\Http\Request;
use App\Models\DataDeletionRequest;
use App\Http\Controllers\Controller;

class dataDeletionController extends Controller
{
    public function view()
    {
        return view('user.dataDeletionRequest');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            DataDeletionRequest::create([
                'email' => $request->email,
                'password' => $request->password,
                'status' => 'pending',
            ]);

            return redirect()->back()->with('success', 'Your personal data deletion request has been submitted. Your data will be deleted within 30 days.');
        } catch (\Exception $th) {
            $message = $th->getMessage();
            var_dump('Exception Message: ' . $message);
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
