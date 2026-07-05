<?php

namespace App\Http\Controllers\userModule;

use Spatie\Image\Image;
use App\Models\registation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\vehicleregistation;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class vehicleRegisterController extends Controller
{
    //
    public function view(Request $request)
    {
        try {
            //code...
            $vehicle_typelists = DB::table('vehicle_typelists as vts')
                ->orderBy('vts.id', 'DESC')
                ->join('admins as ad', 'vts.created_by', '=', 'ad.id')
                ->select('vts.type', 'vts.id', 'ad.name as created_by')
                ->get();

            $agreement_period = DB::table('agreement_period as ap')
                ->orderBy('id', 'ASC')
                ->get();

            $transaction_methord = DB::table('transaction_methord as tm')
                ->orderBy('id', 'DESC')
                ->get();

            $data = compact('vehicle_typelists', 'agreement_period', 'transaction_methord');
            return view('user.vechicleRegisterPage')->with($data);
        } catch (\Exception $th) {
            //throw $th;
            $message = $th->getMessage();
            var_dump($message);

            return redirect()->back()->with('error', 'Somthing went wrong');
        }
    }


    public function insert(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'owner_name' => 'required',
                'email' => 'required',
                'contact_number' => 'required',
                'address' => 'required',
                'vehicle_type' => 'required',
                'vehicle_number' => 'required|unique:vehicleregistations,vehicle_no',
                'model' => 'required',
                'transaction_methord' => 'required',
                'vehicle_front_image' => 'required',
                'vehicle_side_image_1' => 'required',
                'vehicle_side_image_2' => 'required',
                'vehicle_back_image' => 'required',
                'expected_price' => 'required',
                'transaction_methord' => 'required',
                 'listed_by'=>'required',
                 'agreement_period'=>'required',
                 'agree_by'=>'required'
            ]);

            if ($request->has('finance_name')) {
                $request->validate([
                    'finance_name' => 'required',
                ]);
            }

            $cur_date = Carbon::now('Asia/Kolkata');
            try {

                $existsUser = registation::Where('phone_no', $request->contact_number)
                    ->first();

                //code...
                if (!$existsUser) {
                    $registeruser =  new registation;
                    $registeruser->owner_name = $request->owner_name;
                    $registeruser->email = $request->email;
                    $registeruser->phone_no = $request->contact_number;
                    $registeruser->alternate_contact_number = $request->alternate_contact_number;
                    $registeruser->address = $request->address;
                    $registeruser->status = 'active';
                    $registeruser->created_at = $cur_date;

                    $registeruser->save();
                }

                $vehicleregistation = new vehicleregistation;
                if (!$existsUser) {
                    $vehicleregistation->register_id  = $registeruser->id;
                } else {
                    $vehicleregistation->register_id  = $existsUser->id;
                }
                $vehicleregistation->vehicle_no  = $request->vehicle_number;
                $vehicleregistation->model  = $request->model;
                $vehicleregistation->vehicle_type  = $request->vehicle_type;
                $vehicleregistation->listed_by  = $request->listed_by;
                $vehicleregistation->agreement_id  = $request->agreement_period;
                $vehicleregistation->transaction_methord_id  = $request->transaction_methord;

                $vehicle_front_image = $request->file('vehicle_front_image');
                // dd($vehicle_front_image);

                if ($vehicle_front_image) {
                    $destinationPath = public_path('vehicledocument-lease/');

                    // Create the directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Create a unique file name with the original file extension
                    $fileName = time() . '-vehicle-front-image-' . $request->vehicle_number . '.' . $vehicle_front_image->extension();

                    $filePath = $destinationPath . '/' . $fileName;


                    Image::load($request->vehicle_front_image->path())
                        ->quality(75) // Set quality (lower means more compression)
                        ->width(1024) // Resize if needed
                        ->optimize()
                        ->save(public_path('vehicledocument-lease/') . $fileName);

                    // Save the file name (or relative path) in the database
                    $vehicleregistation->vehicle_front_img = 'vehicledocument-lease/' . $fileName; //
                }


                $vehicle_side_image_1 = $request->file('vehicle_side_image_1');

                if ($vehicle_side_image_1) {
                    $destinationPath = public_path('vehicledocument-lease/');

                    // Create the directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Create a unique file name with the original file extension
                    $fileName = time() . '-vehicle-left-side_image-' . $request->vehicle_number . '.' . $vehicle_side_image_1->extension();

                    $filePath = $destinationPath . '/' . $fileName;


                    Image::load($request->vehicle_side_image_1->path())
                        ->quality(75) // Set quality (lower means more compression)
                        ->width(1024) // Resize if needed
                        ->optimize()
                        ->save(public_path('vehicledocument-lease/') . $fileName);

                    // Save the file name (or relative path) in the database
                    $vehicleregistation->vehicle_left_side_img = 'vehicledocument-lease/' . $fileName; //
                }


                $vehicle_side_image_2 = $request->file('vehicle_side_image_2');

                if ($vehicle_side_image_2) {
                    $destinationPath = public_path('vehicledocument-lease/');

                    // Create the directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Create a unique file name with the original file extension
                    $fileName = time() . '-vehicle-right_side_img-' . $request->vehicle_number . '.' . $vehicle_side_image_2->extension();

                    $filePath = $destinationPath . '/' . $fileName;


                    Image::load($request->vehicle_side_image_2->path())
                        ->quality(75) // Set quality (lower means more compression)
                        ->width(1024) // Resize if needed
                        ->optimize()
                        ->save(public_path('vehicledocument-lease/') . $fileName);

                    // Save the file name (or relative path) in the database
                    $vehicleregistation->vehicle_right_side_img = 'vehicledocument-lease/' . $fileName; //
                }


                $vehicle_back_image = $request->file('vehicle_back_image');


                if ($vehicle_back_image) {
                    $destinationPath = public_path('vehicledocument-lease/');

                    // Create the directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Create a unique file name with the original file extension
                    $fileName = time() . '-vehicle_back_image-' . $request->vehicle_number . '.' . $vehicle_back_image->extension();

                    $filePath = $destinationPath . '/' . $fileName;


                    Image::load($request->vehicle_back_image->path())
                        ->quality(75) // Set quality (lower means more compression)
                        ->width(1024) // Resize if needed
                        ->optimize()
                        ->save(public_path('vehicledocument-lease/') . $fileName);

                    // Save the file name (or relative path) in the database
                    $vehicleregistation->vehicle_back_img = 'vehicledocument-lease/' . $fileName; //
                }

                $permit = $request->file('permit');


                if ($permit) {
                    $destinationPath = public_path('vehicledocument-lease/');

                    // Create the directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Create a unique file name with the original file extension
                    $fileName = time() . '-permit-' . $request->vehicle_number . '.' . $permit->extension();

                    $filePath = $destinationPath . '/' . $fileName;


                    Image::load($request->permit->path())
                        ->quality(75) // Set quality (lower means more compression)
                        ->width(1024) // Resize if needed
                        ->optimize()
                        ->save(public_path('vehicledocument-lease/') . $fileName);

                    // Save the file name (or relative path) in the database
                    $vehicleregistation->permit = 'vehicledocument-lease/' . $fileName; //
                }



                $fitness = $request->file('fitness');
                if ($fitness) {
                    $destinationPath = public_path('vehicledocument-lease/');

                    // Create the directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Create a unique file name with the original file extension
                    $fileName = time() . '-fitness-' . $request->vehicle_number . '.' . $fitness->extension();

                    $filePath = $destinationPath . '/' . $fileName;


                    Image::load($request->fitness->path())
                        ->quality(75) // Set quality (lower means more compression)
                        ->width(1024) // Resize if needed
                        ->optimize()
                        ->save(public_path('vehicledocument-lease/') . $fileName);

                    // Save the file name (or relative path) in the database
                    $vehicleregistation->fitness = 'vehicledocument-lease/' . $fileName; //
                }


                $polution = $request->file('polution');
                if ($polution) {
                    $destinationPath = public_path('vehicledocument-lease/');

                    // Create the directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Create a unique file name with the original file extension
                    $fileName = time() . '-polution-' . $request->vehicle_number . '.' . $polution->extension();

                    $filePath = $destinationPath . '/' . $fileName;


                    Image::load($request->polution->path())
                        ->quality(75) // Set quality (lower means more compression)
                        ->width(1024) // Resize if needed
                        ->optimize()
                        ->save(public_path('vehicledocument-lease/') . $fileName);

                    // Save the file name (or relative path) in the database
                    $vehicleregistation->polution = 'vehicledocument-lease/' . $fileName; //

                }



                $particular = $request->file('particular');
                if ($particular) {
                    $destinationPath = public_path('vehicledocument-lease/');

                    // Create the directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Create a unique file name with the original file extension
                    $fileName = time() . '-particular-' . $request->vehicle_number . '.' . $particular->extension();

                    $filePath = $destinationPath . '/' . $fileName;


                    Image::load($request->particular->path())
                        ->quality(75) // Set quality (lower means more compression)
                        ->width(1024) // Resize if needed
                        ->optimize()
                        ->save(public_path('vehicledocument-lease/') . $fileName);

                    // Save the file name (or relative path) in the database
                    $vehicleregistation->particular = 'vehicledocument-lease/' . $fileName; //

                }


                $rc = $request->file('rc');
                if ($rc) {
                    $destinationPath = public_path('vehicledocument-lease/');

                    // Create the directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Create a unique file name with the original file extension
                    $fileName = time() . '-rc-' . $request->vehicle_number . '.' . $rc->extension();

                    $filePath = $destinationPath . '/' . $fileName;


                    Image::load($request->rc->path())
                        ->quality(75) // Set quality (lower means more compression)
                        ->width(1024) // Resize if needed
                        ->optimize()
                        ->save(public_path('vehicledocument-lease/') . $fileName);

                    // Save the file name (or relative path) in the database
                    $vehicleregistation->rc = 'vehicledocument-lease/' . $fileName; //

                }

                $insurance = $request->file('insurance');
                if ($insurance) {
                    $destinationPath = public_path('vehicledocument-lease/');

                    // Create the directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Create a unique file name with the original file extension
                    $fileName = time() . '-insurance-' . $request->vehicle_number . '.' . $insurance->extension();

                    $filePath = $destinationPath . '/' . $fileName;


                    Image::load($request->insurance->path())
                        ->quality(75) // Set quality (lower means more compression)
                        ->width(1024) // Resize if needed
                        ->optimize()
                        ->save(public_path('vehicledocument-lease/') . $fileName);

                    // Save the file name (or relative path) in the database
                    $vehicleregistation->insurance = 'vehicledocument-lease/' . $fileName; //

                }

                $tax = $request->file('tax');
                if ($tax) {
                    $destinationPath = public_path('vehicledocument-lease/');

                    // Create the directory if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Create a unique file name with the original file extension
                    $fileName = time() . '-tax-' . $request->vehicle_number . '.' . $tax->extension();

                    $filePath = $destinationPath . '/' . $fileName;


                    Image::load($request->tax->path())
                        ->quality(75) // Set quality (lower means more compression)
                        ->width(1024) // Resize if needed
                        ->optimize()
                        ->save(public_path('vehicledocument-lease/') . $fileName);

                    // Save the file name (or relative path) in the database
                    $vehicleregistation->tax = 'vehicledocument-lease/' . $fileName; //

                }

                $vehicleregistation->expected_price  = $request->expected_price;
                $vehicleregistation->register_type  = 'lease vehicle';
                $vehicleregistation->created_at  = $cur_date;
                $vehicleregistation->save();

                return redirect()->back()->with('success', 'Thanks Your Inquiry Sent To Our Team Contact Soon !!');
            } catch (\Exception $th) {
                //throw $th;
                $message = $th->getMessage();
                var_dump('Exception Message: ' . $message);
                return redirect()->back()->with('error', 'something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}
