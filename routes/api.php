<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\VehicleController;
use App\Http\Controllers\admin\login_Controller;

Route::get('/test-api', function () { return response()->json(['message' => 'API is working!'], 200);});

// Route::post('/test-api-post', function () {
//     return response()->json(['message' => 'API is working!'], 200);
// });

Route::post('',[VehicleController::class,'globalAPIFunction']);