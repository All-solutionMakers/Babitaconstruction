<?php

namespace App\Http\Controllers\API;

use App\Models\Attendance;
use App\Models\usertype;
use Illuminate\Validation\Rules\Password;
use App\Http\Controllers\Controller;
use App\Models\registation;
use App\Models\vehicle_typelist;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\vehiclepurchase_inquary;
use Illuminate\Support\Facades\DB;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Spatie\Image\Image;
use App\Models\vehicleregistation;
use Illuminate\Support\Facades\Validator;
use App\Models\VehicleRequest;

class VehicleController extends Controller
{

    public function globalAPIFunction(Request $request) {
        try {
            $validator = Validator::make($request->all(),[
                'apiCall'=>'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors(),
                ], 422);
            }

            $apiActions = [
                'get-vehicle-types' => 'getVehicleTypes',
                'get-transaction-methods' => 'get_txn_methods',
                'get-aggrement-periods' => 'get_aggrement_period',
                'get-drivers' => 'get_drivers',
                'login' => 'login_api',
                'vehicle-purchase-enquiry-form' => 'VehiclePurchaseEnq',
                'sell-defaulter-vehicle-form' => 'sellDefaulterVehicle',
                'lease-vehicle-form' => 'RequestLeaseVehicle',
                'pending-vehicle-purchase-enquiries' => 'PendingVehiclePurchaseEnq',
                'pending-sell-defaulter-vehicles' => 'PendingSellDefaulterVehicle',
                'pending-lease-vehicle-requests' => 'PendingLeaseVehicleRequest',
                'action-vehicle-purchase-enquiry' => 'ActionVehiclePurchaseEnq',
                'action-sell-defaulter-vehicle' => 'ActionSellDefaulterVehicle',
                'action-lease-vehicle-request' => 'ActionLeaseVehicleRequest',
                'get-vehicle-purchase-enquiry' => 'GetVehiclePurchaseEnq',
                'get-sell-defaulter-vehicle' => 'GetSellDefaulterVehicle',
                'get-lease-vehicle-request' => 'GetLeaseVehicleRequest',
                'get-driver-allocation-requests' => 'GetDriverAllocations',
                'allocate-reallocate-drivers' => 'AllocateReallocateDrivers',
                'get-my-allocation' => "GetMyAllocation",
                'tick-attendance' => "TickAttendance",
                'get-my-attendance' => "GetAttendance",
                'view-attendances' => "AttendanceList",
            ];

            $apiCall = $request->input('apiCall');

            // Check if the apiCall is valid
            if (!array_key_exists($apiCall, $apiActions)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid API call.',
                ], 400);
            }

            // Call the corresponding function dynamically
            return $this->{$apiActions[$apiCall]}($request);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function getVehicleTypes(Request $request)
    {
        try {
            // Fetch all vehicle types
             $vehicleTypes = vehicle_typelist::select('id', 'type')->get();
            // $vehicleTypes = vehicle_typelist::all();

            // Return response
            return response()->json([
                'success' => true,
                'data' => $vehicleTypes,
            ], 200);
        } catch (\Exception $e) {
            // Handle any errors
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while fetching vehicle types.',
                // 'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function get_txn_methods(Request $request) {
        try {
            // Fetch all transaction methods from the database
            $txnMethods = DB::table('transaction_methord')->select('id', 'methord')->get();

            // Return the transaction methods as a JSON response
            return response()->json([
                'success' => true,
                'data' => $txnMethods,
            ], 200);
        } catch (\Exception $exception) {
            // Handle any errors
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch transaction methods.',
                // 'error' => $exception->getMessage(),
            ], 500);
        }        
    }

    public function get_aggrement_period(Request $request) {
        try {
            // Fetch all transaction methods from the database
            $aggrementPrds = DB::table('agreement_period')->select('id', 'aggrement_period')->get();

            // Return the transaction methods as a JSON response
            return response()->json([
                'success' => true,
                'data' => $aggrementPrds,
            ], 200);
        } catch (\Exception $exception) {
            // Handle any errors
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch aggrement periods.',
                // 'error' => $exception->getMessage(),
            ], 500);
        }
    }

    public function get_drivers(Request $request) {
        try {
            $flag = $this->validateAdmin($request);
            if (!$flag) {
                return response()->json(['success' => false, 'message' => 'Access denied'], 403);
            }

            $admins = DB::table('admins')
                ->where('designation', 3)
                ->whereNotIn('id', function ($query) {
                    $query->select('allocated_to')
                        ->from('vehicle_requests')
                        ->whereNotNull('allocated_to'); // Exclude NULL values
                })
                ->get();

            // Return the result or process it as needed
            return response()->json([
                'success' => true,
                'data' => $admins,
            ], 200);
        } catch (\Exception $exception) {
            // Handle any errors
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch drivers.',
                // 'error' => $exception->getMessage(),
            ], 500);
        }
    }

    public function VehiclePurchaseEnq(Request $request) {
        $validationRules = [
            'name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'address' => 'required',
            'vehicle_type' => 'required',
            'transaction_methord' => 'required',
            'min_range' => 'required|numeric',
            'max_range' => 'required|numeric',
        ];

        if ($request->has('finance_name')) {
            $validationRules['finance_name'] = 'required';
        }

        $validatedData = $request->validate($validationRules);

        $cur_date = Carbon::now('Asia/Kolkata');

        try {
            $vehiclePurchaseInquiry = new vehiclepurchase_inquary();
            $vehiclePurchaseInquiry->name = $validatedData['name'];
            $vehiclePurchaseInquiry->email = $validatedData['email'];
            $vehiclePurchaseInquiry->phone_no = $validatedData['contact_number'];
            $vehiclePurchaseInquiry->alternate_contact_number = $request->alternate_contact_number;
            $vehiclePurchaseInquiry->address = $validatedData['address'];
            $vehiclePurchaseInquiry->vehicle_type = $validatedData['vehicle_type'];
            $vehiclePurchaseInquiry->transaction_methord_id = $validatedData['transaction_methord'];
            $vehiclePurchaseInquiry->budget_from = $validatedData['min_range'];
            $vehiclePurchaseInquiry->budget_to = $validatedData['max_range'];
            $vehiclePurchaseInquiry->finance_name = $request->finance_name;
            $vehiclePurchaseInquiry->created_at = $cur_date;
            $vehiclePurchaseInquiry->save();

            return response()->json([
                'success' => true,
                'message' => 'Thanks! Your inquiry has been sent to our team. We will contact you soon.',
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.',
                // 'error' => $exception->getMessage(),
            ], 500);
        }
    }

    public function sellDefaulterVehicle(Request $request) {
        $validator = Validator::make($request->all(), [
            'owner_name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'address' => 'required',
            'vehicle_type' => 'required',
            'vehicle_number' => 'required|unique:vehicleregistations,vehicle_no',
            'model' => 'required',
            'transaction_methord' => 'required',
            'vehicle_front_image' => 'required|file',
            'vehicle_side_image_1' => 'required|file',
            'vehicle_side_image_2' => 'required|file',
            'vehicle_back_image' => 'required|file',
            'expected_price' => 'required',
            'listed_by' => 'required',
            'finance_name' => 'sometimes|required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        $cur_date = Carbon::now('Asia/Kolkata');

        try {
            // Check if user already exists
            $existsUser = registation::where('phone_no', $request->contact_number)->first();

            // Create a new user if not exists
            if (!$existsUser) {
                $registeruser = new registation;
                $registeruser->owner_name = $request->owner_name;
                $registeruser->email = $request->email;
                $registeruser->phone_no = $request->contact_number;
                $registeruser->address = $request->address;
                $registeruser->status = 'active';
                $registeruser->created_at = $cur_date;
                $registeruser->save();
            }

            // Create a new vehicle registration
            $vehicleregistation = new vehicleregistation;
            $vehicleregistation->register_id = $existsUser ? $existsUser->id : $registeruser->id;
            $vehicleregistation->vehicle_no = $request->vehicle_number;
            $vehicleregistation->model = $request->model;
            $vehicleregistation->vehicle_type = $request->vehicle_type;
            $vehicleregistation->transaction_methord_id = $request->transaction_methord;
            $vehicleregistation->expected_price = $request->expected_price;
            $vehicleregistation->register_type = 'sale default vehicle';
            $vehicleregistation->listed_by = $request->listed_by;
            $vehicleregistation->created_at = $cur_date;

            // Handle file uploads
            $fileFields = [
                'vehicle_front_image' => 'vehicle_front_img',
                'vehicle_side_image_1' => 'vehicle_left_side_img',
                'vehicle_side_image_2' => 'vehicle_right_side_img',
                'vehicle_back_image' => 'vehicle_back_img',
                'permit' => 'permit',
                'fitness' => 'fitness',
                'polution' => 'polution',
                'particular' => 'particular',
                'rc' => 'rc',
                'insurance' => 'insurance',
                'tax' => 'tax',
            ];

            foreach ($fileFields as $field => $dbColumn) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $destinationPath = public_path('vehicledocument/');

                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    $fileName = time() . "-{$field}-" . $request->vehicle_number . '.' . $file->extension();
                    $filePath = $destinationPath . $fileName;

                    // Save the file
                    $file->move($destinationPath, $fileName);

                    // Optimize the image
                    $optimizerChain = OptimizerChainFactory::create();
                    $optimizerChain->optimize($filePath);

                    // Resize and save using Spatie\Image
                    Image::load($filePath)
                        ->width(1024)
                        ->optimize()
                        ->save();

                    // Save the path to the database
                    $vehicleregistation->$dbColumn = 'vehicledocument/' . $fileName;
                }
            }
            // Save vehicle registration
            $vehicleregistation->save();

            return response()->json([
                'success' => true,
                'message' => 'Vehicle registration successful.',
                'data' => $vehicleregistation,
            ], 201);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong.',
                // 'error' => $exception->getMessage(),
            ], 500);
        }

    }


    public function RequestLeaseVehicle(Request $request)   {

        $validator = Validator::make($request->all(), [
            'owner_name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'address' => 'required',
            'vehicle_type' => 'required',
            'vehicle_number' => 'required|unique:vehicleregistations,vehicle_no',
            'model' => 'required',
            'transaction_methord' => 'required',
            'vehicle_front_image' => 'required|image',
            'vehicle_side_image_1' => 'required|image',
            'vehicle_side_image_2' => 'required|image',
            'vehicle_back_image' => 'required|image',
            'expected_price' => 'required|numeric',
            'listed_by' => 'required',
            'agreement_period' => 'required',
            'agree_by' => 'required',
            'finance_name' => 'sometimes|required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        $cur_date = Carbon::now('Asia/Kolkata');

        try {
            $existsUser = registation::where('phone_no', $request->contact_number)->first();

            if (!$existsUser) {
                $registeruser = new registation();
                $registeruser->owner_name = $request->owner_name;
                $registeruser->email = $request->email;
                $registeruser->phone_no = $request->contact_number;
                $registeruser->alternate_contact_number = $request->alternate_contact_number ?? null;
                $registeruser->address = $request->address;
                $registeruser->status = 'active';
                $registeruser->created_at = $cur_date;
                $registeruser->save();
            }

            $vehicleregistation = new vehicleregistation();
            $vehicleregistation->register_id = $existsUser ? $existsUser->id : $registeruser->id;
            $vehicleregistation->vehicle_no = $request->vehicle_number;
            $vehicleregistation->model = $request->model;
            $vehicleregistation->vehicle_type = $request->vehicle_type;
            $vehicleregistation->listed_by = $request->listed_by;
            $vehicleregistation->agreement_id = $request->agreement_period;
            $vehicleregistation->transaction_methord_id = $request->transaction_methord;

            // dd("okay");

            $this->uploadImages($request, $vehicleregistation);

            $vehicleregistation->expected_price = $request->expected_price;
            $vehicleregistation->register_type = 'lease vehicle';
            $vehicleregistation->created_at = $cur_date;
            $vehicleregistation->save();

            return response()->json(['success' => true, 'message' => 'Vehicle registered successfully.'], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    private function uploadImages($request, $vehicleregistation)
    {
        $images = [
            'vehicle_front_image' => 'vehicle_front_img',
            'vehicle_side_image_1' => 'vehicle_left_side_img',
            'vehicle_side_image_2' => 'vehicle_right_side_img',
            'vehicle_back_image' => 'vehicle_back_img',
            'permit' => 'permit',
            'fitness' => 'fitness',
            'polution' => 'polution',
            'particular' => 'particular',
            'rc' => 'rc',
            'insurance' => 'insurance',
            'tax' => 'tax',
        ];

        foreach ($images as $field => $dbField) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $destinationPath = public_path('vehicledocument-lease/');
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }

                $fileName = time() . "-{$field}-" . $request->vehicle_number . '.' . $file->extension();
                $filePath = $destinationPath . '/' . $fileName;

                Image::load($file->path())
                    ->quality(75)
                    ->width(1024)
                    ->optimize()
                    ->save($filePath);

                $vehicleregistation->$dbField = 'vehicledocument-lease/' . $fileName;
            }
        }
    }

    private function validateAdmin($request) {
        $request->validate([
            'user' => 'required|digits:10',
        ]);

        $mobileNumber = $request->input('user');

        $admin = DB::table('admins')
        ->where('mobile_no', $mobileNumber)
        ->first();

        if (!$admin) {
            return false;
        }

        if (!in_array($admin->designation, [1, 5])) {
            return false;
        }

        return true;
    }

    public function PendingVehiclePurchaseEnq(Request $request) {
        
        $flag = $this->validateAdmin($request);
        if (!$flag) {
            return response()->json(['success' => false, 'message' => 'Access denied'], 403);
        }

        // Get all IDs from vehicle_requests where vehicle_request_type is 'vehiclepurchase_inquary'
        $linkedIds = DB::table('vehicle_requests')
            ->where('vehicle_request_type', 'vehiclepurchase_inquaries')
            ->pluck('vehicle_request_id');

        // Get all vehiclepurchase_inquary records that are not linked
        $unlinkedInquaries = vehiclepurchase_inquary::whereNotIn('id', $linkedIds)->get();

        // return $unlinkedInquaries;

        return response()->json([
            'success' => true,
            'data' => $unlinkedInquaries,
        ]);

        // return response()->json(['message' => 'Access granted'], 200);
    }

    public function ActionVehiclePurchaseEnq(Request $request) {
        try {
            $flag = $this->validateAdmin($request);
            if (!$flag) {
                return response()->json(['success' => false, 'message' => 'Access denied'], 403);
            }

            $request->validate([
                'id' => 'required|integer',
                'action' => 'required|in:accepted,rejected',
            ]);

            // Find the object in the vehiclepurchase_inquary table by ID
            $inquiry = vehiclepurchase_inquary::find($request->id);
            if (!$inquiry) {
                return response()->json(['success' => false, 'message' => 'Vehicle Purchase Inquiry not found'], 404);
            }

            // Add a new object to the vehicle_requests table
            $vehicleRequest = VehicleRequest::create([
                'vehicle_request_id' => $inquiry->id,
                'vehicle_request_type' => 'vehiclepurchase_inquaries',
                'request_type' => 'purchase sale', // Adjust this based on your business logic
                'status' => $request->action,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Vehicle request created successfully',
                'data' => $vehicleRequest,
                ], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }        
    }

    public function GetVehiclePurchaseEnq(Request $request) {
        $flag = $this->validateAdmin($request);
        
        $request->validate([
            'type' => 'required|in:accepted,rejected',
        ]);

        $type = $request->input('type');
        
        if (!$flag) {
            $mobileNumber = $request->input('user');
                                                
            // Query to get all matching inquiries
            $matchingInquiries = vehiclepurchase_inquary::where('phone_no', $mobileNumber)->whereIn('id', function ($query) use ($type) {
                $query->select('vehicle_request_id')
                    ->from('vehicle_requests')
                    ->where('vehicle_request_type', 'vehiclepurchase_inquaries')
                    ->where('status', $type);
            })->orderBy('created_at', 'desc')->get();  // asc
    
            return response()->json([
                'success' => true,
                'data' => $matchingInquiries,
            ]);            
        }

        // Query to get all matching inquiries
        $matchingInquiries = vehiclepurchase_inquary::whereIn('id', function ($query) use ($type) {
            $query->select('vehicle_request_id')
                ->from('vehicle_requests')
                ->where('vehicle_request_type', 'vehiclepurchase_inquaries')
                ->where('status', $type);
        })->orderBy('created_at', 'desc')->get();  // asc

        return response()->json([
            'success' => true,
            'data' => $matchingInquiries,
        ]);
    }

    public function PendingSellDefaulterVehicle(Request $request) {
        $flag = $this->validateAdmin($request);
        if (!$flag) {
            return response()->json(['success' => false, 'message' => 'Access denied'], 403);
        }

        $linkedIds = DB::table('vehicle_requests')
            ->where('vehicle_request_type', 'vehicleregistations')
            ->pluck('vehicle_request_id');

        $unlinkedInquaries = vehicleregistation::whereNotIn('id', $linkedIds)->where('register_type', 'sale default vehicle')->get();
        
        // Attach registation data
        $unlinkedInquariesWithRegistation = $unlinkedInquaries->map(function ($inquiry) {
            // Fetch the related registation data
            $inquiry->registation = registation::find($inquiry->register_id);
            return $inquiry;
        });        
        
        return response()->json([
            'success' => true,
            'data' => $unlinkedInquariesWithRegistation,
        ]);
    }

    public function ActionSellDefaulterVehicle(Request $request) {
        try {
                $flag = $this->validateAdmin($request);
                if (!$flag) {
                    return response()->json(['success' => false, 'message' => 'Access denied'], 403);
                }

                $request->validate([
                    'id' => 'required|integer',
                    'action' => 'required|in:accepted,rejected',
                ]);

                $inquiry = vehicleregistation::where('id', $request->id)
                    ->where('register_type', 'sale default vehicle')
                    ->first();
                if (!$inquiry) {
                    return response()->json(['success' => false, 'message' => 'Vehicle Request not found'], 404);
                }

                $vehicleRequest = VehicleRequest::create([
                    'vehicle_request_id' => $inquiry->id,
                    'vehicle_request_type' => 'vehicleregistations',
                    'request_type' => 'sale default vehicle', // Adjust this based on your business logic
                    'status' => $request->action,
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Vehicle request created successfully',
                    'data' => $vehicleRequest,
                    ], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }        
    }

    public function GetSellDefaulterVehicle(Request $request) {
        $flag = $this->validateAdmin($request);
        $request->validate([
            'type' => 'required|in:accepted,rejected',
        ]);

        $type = $request->input('type');
        
        if (!$flag) {
            $mobileNumber = $request->input('user');
        
            // Query to get all matching inquiries
            $matchingInquiries = vehicleregistation::whereIn('id', function ($query) use ($type) {
                $query->select('vehicle_request_id')
                    ->from('vehicle_requests')
                    ->where('vehicle_request_type', 'vehicleregistations')
                    ->where('register_type', 'sale default vehicle')
                    ->where('status', $type);
            })->orderBy('created_at', 'desc')->get();  // asc
    
            // Attach registation data and filter by phone_no
            $unlinkedInquariesWithRegistation = $matchingInquiries->map(function ($inquiry) use ($mobileNumber) {
                // Fetch the related registation data
                $registation = registation::where('id', $inquiry->register_id)
                    ->where('phone_no', $mobileNumber)
                    ->first();
            
                // Attach registation data only if phone_no matches
                if ($registation) {
                    $inquiry->registation = $registation;
                    return $inquiry;
                }
            
                return null; // Exclude inquiries with no matching registation
            })->filter(); // Remove null entries

            return response()->json([
                'success' => true,
                'data' => $unlinkedInquariesWithRegistation,
            ]);
        }

        // Query to get all matching inquiries
        $matchingInquiries = vehicleregistation::whereIn('id', function ($query) use ($type) {
            $query->select('vehicle_request_id')
                ->from('vehicle_requests')
                ->where('vehicle_request_type', 'vehicleregistations')
                ->where('register_type', 'sale default vehicle')
                ->where('status', $type);
        })->orderBy('created_at', 'desc')->get();  // asc

        // Attach registation data
        $unlinkedInquariesWithRegistation = $matchingInquiries->map(function ($inquiry) {
            // Fetch the related registation data
            $inquiry->registation = registation::find($inquiry->register_id);
            return $inquiry;
        });        


        return response()->json([
            'success' => true,
            'data' => $unlinkedInquariesWithRegistation,
        ]);

    }

    public function PendingLeaseVehicleRequest(Request $request) {
        $flag = $this->validateAdmin($request);
        if (!$flag) {
            return response()->json(['success' => false, 'message' => 'Access denied'], 403);
        }

        $linkedIds = DB::table('vehicle_requests')
            ->where('vehicle_request_type', 'vehicleregistations')
            ->pluck('vehicle_request_id');

        $unlinkedInquaries = vehicleregistation::whereNotIn('id', $linkedIds)->where('register_type', 'lease vehicle')->get();
        
        // Attach registation data
        $unlinkedInquariesWithRegistation = $unlinkedInquaries->map(function ($inquiry) {
            // Fetch the related registation data
            $inquiry->registation = registation::find($inquiry->register_id);
            return $inquiry;
        });                
        
        return response()->json([
            'success' => true,
            'data' => $unlinkedInquariesWithRegistation,
        ]);
    }

    public function ActionLeaseVehicleRequest(Request $request) {
        try {
            $flag = $this->validateAdmin($request);
            if (!$flag) {
                return response()->json(['success' => false, 'message' => 'Access denied'], 403);
            }

            $request->validate([
                'id' => 'required|integer',
                'action' => 'required|in:accepted,rejected',
            ]);

            $inquiry = vehicleregistation::where('id', $request->id)
                ->where('register_type', 'lease vehicle')
                ->first();
            if (!$inquiry) {
                return response()->json(['success' => false, 'message' => 'Vehicle Request not found'], 404);
            }

            $vehicleRequest = VehicleRequest::create([
                'vehicle_request_id' => $inquiry->id,
                'vehicle_request_type' => 'vehicleregistations',
                'request_type' => 'lease vehicle', // Adjust this based on your business logic
                'status' => $request->action,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Vehicle request created successfully',
                'data' => $vehicleRequest,
                ], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function GetLeaseVehicleRequest(Request $request) {
        $flag = $this->validateAdmin($request);
        $request->validate([
            'type' => 'required|in:accepted,rejected',
        ]);

        $type = $request->input('type');
        
        if (!$flag) {
            $mobileNumber = $request->input('user');
        
            // Query to get all matching inquiries
            $matchingInquiries = vehicleregistation::whereIn('id', function ($query) use ($type) {
                $query->select('vehicle_request_id')
                    ->from('vehicle_requests')
                    ->where('vehicle_request_type', 'vehicleregistations')
                    ->where('register_type', 'lease vehicle')
                    ->where('status', $type);
            })->orderBy('created_at', 'desc')->get();  // asc
        
            // Attach registation data and filter by phone_no
            $unlinkedInquariesWithRegistation = $matchingInquiries->map(function ($inquiry) use ($mobileNumber) {
                // Fetch the related registation data
                $registation = registation::where('id', $inquiry->register_id)
                    ->where('phone_no', $mobileNumber)
                    ->first();
            
                // Attach registation data only if phone_no matches
                if ($registation) {
                    $inquiry->registation = $registation;
                    return $inquiry;
                }
            
                return null; // Exclude inquiries with no matching registation
            })->filter(); // Remove null entries
        
            return response()->json([
                'success' => true,
                'data' => $unlinkedInquariesWithRegistation,
            ]);
        }

        // Query to get all matching inquiries
        $matchingInquiries = vehicleregistation::whereIn('id', function ($query) use ($type) {
            $query->select('vehicle_request_id')
                ->from('vehicle_requests')
                ->where('vehicle_request_type', 'vehicleregistations')
                ->where('register_type', 'lease vehicle')
                ->where('status', $type);
        })->orderBy('created_at', 'desc')->get();  // asc

        // Attach registation data
        $unlinkedInquariesWithRegistation = $matchingInquiries->map(function ($inquiry) {
            // Fetch the related registation data
            $inquiry->registation = registation::find($inquiry->register_id);
            return $inquiry;
        });

        return response()->json([
            'success' => true,
            'data' => $unlinkedInquariesWithRegistation,
        ]);
    }

    public function login_api(Request $login)
    {
        // Validate the incoming request
        $login->validate([
            'mobile_number' => 'required',
            'password' => [
                'required',
                'string',
                Password::min(8)
            ],
        ]);

        try {
            // Check if the user exists based on the mobile number
            $user = DB::table('admins')->where('mobile_no', $login->mobile_number)->first();

            if ($user != null) {
                // Check if the user is active
                if ($user->status == 'active') {
                    // Verify the password (use Hash::check if passwords are hashed)
                    if ($login->password == $user->password) {
                        // Prepare the response data
                        $userType = usertype::find($user->designation);
                        
                        $response = [
                            'name' => $user->name,
                            'email' => $user->email,
                            'mobile_no' => $user->mobile_no,  // mobile number
                            'designation' => $userType ? $userType->role : 'Unknown', // user type (designation)
                        ];

                        // Return a success response with user data
                        return response()->json([
                            'success' => true,
                            'message' => 'Login successful',
                            'data' => $response,
                        ], 200);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Password does not match',
                        ], 400);
                    }
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Your account is temporarily blocked. Contact admin.',
                    ], 403);
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid credentials. Please check your mobile number or password.',
                ], 400);
            }
        } catch (\Exception $th) {
            // Catch any exception and return a generic error message
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.',
            ], 500);
        }
    }

    public function GetDriverAllocations(Request $request) {
        $flag = $this->validateAdmin($request);
        if (!$flag) {
            return response()->json(['success' => false, 'message' => 'Access denied'], 403);
        }
        
        $data = DB::table('vehicle_requests')
            ->leftJoin('admins', 'vehicle_requests.allocated_to', '=', 'admins.id') // Left join to handle null allocated_to
            ->where('vehicle_requests.status', 'accepted')
            ->whereIn('vehicle_requests.request_type', ['sale default vehicle', 'lease vehicle'])
            ->select(
                'vehicle_requests.*',
                'admins.name as admin_name',
                'admins.email as admin_email'
            )
            ->get()
            ->map(function ($request) {
                // Dynamically fetch data from the table specified in vehicle_request_type
                $tableName = $request->vehicle_request_type;

                try {
                    $relatedData = DB::table($tableName)
                        ->where('id', $request->vehicle_request_id)
                        ->first();
                } catch (\Exception $e) {
                    // If the table does not exist or an error occurs, set relatedData to null
                    $relatedData = null;
                }

                // Add the related data to the request object
                $request->vehicle_data = $relatedData;

                // Add admin details or null if not allocated
                $request->admin = $request->allocated_to ? [
                    'name' => $request->admin_name,
                    'email' => $request->admin_email,
                ] : null;

                // Remove admin_name and admin_email to clean up the object
                unset($request->admin_name, $request->admin_email);

                return $request;
            });

        // Return the response
        return response()->json([
            'success' => true,
            'data' => $data,
        ], 200);

    }

    public function AllocateReallocateDrivers(Request $request) {
        $flag = $this->validateAdmin($request);
        if (!$flag) {
            return response()->json(['success' => false, 'message' => 'Access denied'], 403);
        }

        $validator = Validator::make($request->all(), [
            "driver_id" => "required|integer",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        $driverId = $request->input('driver_id');
        $driver = DB::table('admins')
            ->where('id', $driverId)
            ->where('designation', 3)
            ->first();

        if (!$driver) {
            return response()->json([
                'success' => false,
                'message' => 'Not a driver.',
            ], 404);
        }

        $requestId = $request->input('vehicle_request_id');
        
        if(!$requestId) {
            
            $vehicleRequest = DB::table('vehicle_requests')
                ->where('allocated_to', $driver->id)    
                ->first();
            
            if (!$vehicleRequest) {
                return response()->json([
                    'success' => false,
                    'message' => 'No Vehicle allocation found for this driver.',
                ], 404);
            }
            
            // Update the fields to null
            DB::table('vehicle_requests')
                ->where('id', $vehicleRequest->id)
                ->update([
                    'allocated_to' => null,
                    'allocated_datetime' => null,
                ]);
            
            return response()->json([
                'success' => true,
                'message' => 'Vehicle allocation has been updated to not allocated.',
            ]);
        }        


        // Fetch the vehicle request by vehicle_request_id
        $vehicleRequest = DB::table('vehicle_requests')
            ->where('id', $requestId)
            ->first();

        if (!$vehicleRequest) {
            return response()->json([
                'success' => false,
                'message' => 'Vehicle allocation not found.',
            ], 404);
        }
        
        $cur_date = Carbon::now('Asia/Kolkata');

        $updated = DB::table('vehicle_requests')
        ->where('id', $requestId)
        ->update([
            'allocated_to' => $driver->id,
            'allocated_datetime' => $cur_date, // Set current timestamp
        ]);

        if ($updated) {
            return response()->json([
                'success' => true,
                'message' => 'Vehicle request updated successfully.',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update vehicle request.',
            ], 500);
        }
    }

    public function GetMyAllocation(Request $request){
        $validator = Validator::make($request->all(), [
            'user' => 'required|digits:10',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        $mobileNumber = $request->input('user');

        $admin = DB::table('admins')
            ->where('mobile_no', $mobileNumber)
            ->where('designation', 3)
            ->first();

        if (!$admin) {
            return response()->json([
                'success' => false,
                'message' => 'Not a driver.',
            ], 404);
        }
        
        // Fetch the vehicle request data based on the allocated_to admin id
        $data = DB::table('vehicle_requests')
            ->where('vehicle_requests.status', 'accepted')
            ->whereIn('vehicle_requests.request_type', ['sale default vehicle', 'lease vehicle'])
            ->where(function ($query) use ($admin) {
                // Check if allocated_to matches admin id or is NULL
                $query->where('vehicle_requests.allocated_to', $admin->id);
                    // ->orWhereNull('vehicle_requests.allocated_to');
            })
            ->get()
            ->map(function ($request) use ($admin) {
                // Dynamically fetch data from the table specified in vehicle_request_type
                $tableName = $request->vehicle_request_type;
                $relatedData = DB::table($tableName)
                    ->where('id', $request->vehicle_request_id)
                    ->first();

                // Add the related data to the request object
                $request->vehicle_data = $relatedData;

                // If allocated_to matches the admin id, fetch the admin data separately
                if ($request->allocated_to == $admin->id) {
                    $request->admin = $admin;
                } else {
                    // If not allocated to this admin, set admin to null
                    $request->admin = null;
                }

                return $request;
            });

        // Return the response with the filtered data
        return response()->json([
            'success' => true,
            'data' => $data,
        ], 200);
    }

    public function TickAttendance(Request $request) {
        $validator = Validator::make($request->all(), [
            'user' => 'required|digits:10',
            'type' => 'required|in:in,out',
            'selfie_photo' => 'required|image',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        $mobileNumber = $request->input('user');
        $type = $request->input('type');
        $location = $request->input('location') ?? null;
        $latitude = $request->input('latitude') ?? null;
        $longitude = $request->input('longitude') ?? null;
        $photoPath = null;

        $admin = DB::table('admins')
            ->where('mobile_no', $mobileNumber)
            ->first();

        if (!$admin) {
            return response()->json([
                'success' => false,
                'message' => 'User not found.',
            ], 404);
        }

        // Fetch today's date in the 'Asia/Kolkata' timezone
        $today = Carbon::now('Asia/Kolkata')->startOfDay();      
        
        $latestAttendance = null;
        
        if ($type == 'in') {
           
            // Fetch the latest attendance records for the admin by type for today
            $latestAttendance = DB::table('attendance')
                ->where('admin', $admin->id)
                ->where('type', $type)
                ->whereDate('created_at', '=', $today)
                ->orderBy('created_at', 'desc')
                ->get(['admin', 'type', 'created_at'])
                ->first();
            
            if ($latestAttendance) {
                return response()->json([
                    'success' => false,
                    'message' => 'Attendance already marked as "in" for today.',
                ], 400);
            }

            $photoPath = $this->uploadSelfie($request, $photoPath);

            DB::table('attendance')->insert([
                'admin' => $admin->id,
                'selfie_photo' => $photoPath,
                'type' => $type,
                'location' => $location,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'created_at' => Carbon::now('Asia/Kolkata'),
                'updated_at' => Carbon::now('Asia/Kolkata'),
            ]);

            DB::table('attendance')->insert([
                'admin' => $admin->id,
                'type' => "out",
                'created_at' => Carbon::now('Asia/Kolkata')->endOfDay(),
                'updated_at' => Carbon::now('Asia/Kolkata')->endOfDay(),
            ]);

        } else if ($type == 'out') {
            $inRecord = DB::table('attendance')
                ->where('admin', $admin->id)
                ->where('type', 'out')
                ->whereDate('created_at', '=', $today)
                ->orderBy('created_at', 'desc')
                ->first();

            if (!$inRecord) {
                return response()->json([
                    'success' => false,
                    'message' => 'No corresponding "in attendance" found for today',
                ], 404);
            }

            $photoPath = $this->uploadSelfie($request, $photoPath);

            DB::table('attendance')
                ->where('id', $inRecord->id)
                ->update([
                    'selfie_photo' => $photoPath,
                    'location' => $location,
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'created_at' => Carbon::now('Asia/Kolkata'),
                    'updated_at' => Carbon::now('Asia/Kolkata'),
                ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Attendance marked as '.$type.'.',
        ]);        
    }

    private function uploadSelfie($request, $photoPath) {
        if ($request->hasFile('selfie_photo')) {
            $file = $request->file('selfie_photo');

            $destinationPath = public_path('attendance-photos/');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $fileName = time() . "-selfie-" . $request->user . '.' . $file->extension();
            $filePath = $destinationPath . '/' . $fileName;

            Image::load($file->path())
                ->quality(75)
                ->width(1024)
                ->optimize()
                ->save($filePath);

            $photoPath = 'attendance-photos/' . $fileName;
        }
        return $photoPath;
    }

    public function GetAttendance(Request $request) {
        $validator = Validator::make($request->all(), [
            'user' => 'required|digits:10',
            'date' => 'required|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        $mobileNumber = $request->input('user');
        $date = $request->input('date');

        $admin = DB::table('admins')
            ->where('mobile_no', $mobileNumber)
            ->first();

        if (!$admin) {
            return response()->json([
                'success' => false,
                'message' => 'User not found.',
            ], 404);
        }

        $attendanceRecords = DB::table('attendance')
            ->where('attendance.admin', $admin->id) // Filter by admin ID
            ->whereDate('created_at', $date)
            ->get()
            ->map(function ($record) {
                // Fetch admin details dynamically for each attendance record
                $adminDetails = DB::table('admins')
                    ->where('id', $record->admin)
                    ->select('name','email','mobile_no')
                    ->first();

                // Attach admin details to the attendance record
                $record->user_data = $adminDetails;

                // return $record;
                // Return only selected fields from the attendance record
                return (object) [
                    // 'id' => $record->id,
                    'user_id' => $record -> admin,
                    'type' => $record->type,
                    'location' => $record->location,
                    'created_at' => $record->created_at,
                    'user_data' => $record->user_data,
                ];
            });

            // You can now return or process the attendance records
        return response()->json([
            'success' => true,
            'data' => $attendanceRecords,
        ]);

    }

    public function AttendanceList(Request $request) {
        $flag = $this->validateAdmin($request);
        if (!$flag) {
            return response()->json(['success' => false, 'message' => 'Access denied'], 403);
        }

        $validator = Validator::make($request->all(), [
            'date' => 'required|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        $date = $request->input('date');

        $attendanceRecords = DB::table('attendance')
            ->whereDate('created_at', $date) // Filter by the exact date
            ->get()
            ->map(function ($record) {
                // Fetch admin details dynamically for each attendance record
                $adminDetails = DB::table('admins')
                    ->where('id', $record->admin)
                    ->select('name','email','mobile_no')
                    ->first();

                // Attach admin details to the attendance record
                $record->user_data = $adminDetails;

                // return $record;
                // Return only selected fields from the attendance record
                return (object) [
                    // 'id' => $record->id,
                    'user_id' => $record -> admin,
                    'type' => $record->type,
                    'location' => $record->location,
                    'created_at' => $record->created_at,
                    'user_data' => $record->user_data,
                ];
        });


        return response()->json([
            'success' => true,
            'data' => $attendanceRecords,
        ]);
    }

}
