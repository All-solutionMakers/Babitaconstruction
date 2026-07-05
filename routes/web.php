<?php

use Illuminate\Support\Facades\Route;

// USER CONTROLLER IMPORT

use App\Http\Controllers\admin\login_Controller;
use App\Http\Controllers\admin\branch_Controller;
use App\Http\Controllers\admin\profileController;
use App\Http\Controllers\admin\vehicle_controller;
use App\Http\Controllers\admin\dashboard_Controller;
use App\Http\Controllers\admin\salevehicleListController;

use App\Http\Controllers\userModule\aboutController;
use App\Http\Controllers\userModule\home_controller;

use App\Http\Controllers\userModule\contactController;
use App\Http\Controllers\userModule\projectController;
use App\Http\Controllers\admin\vehicleTypeAddController;
use App\Http\Controllers\admin\purchaseVehicleController;
use App\Http\Controllers\admin\defaulterVehicleController;
use App\Http\Controllers\admin\user_management_Controller;
use App\Http\Controllers\admin\daily_load_report_Controller;
use App\Http\Controllers\admin\defaultervehicleadminController;
use App\Http\Controllers\admin\driver_allocation_Controller;
use App\Http\Controllers\admin\vehicle_maintenance_Controller;
use App\Http\Controllers\userModule\vehicleRegisterController;
use App\Http\Controllers\userModule\services\minningController;
use App\Http\Controllers\userModule\services\constructionController;
use App\Http\Controllers\userModule\services\transporatationController;


// ADMIN ROUTEING START ****************

Route::controller(login_Controller::class)->group(function () {
    Route::get('login', 'view')->name('login.view')->middleware('alreadylogin');
    Route::post('login', 'login')->name('login.insert');
    Route::get('logout', 'logout')->name('logout');
});


Route::controller(dashboard_Controller::class)->middleware(['logincheck'])->group(function () {
    Route::get('dashboard', 'view')->name('dashboard.view');
});

Route::controller(profileController::class)->middleware(['logincheck'])->group(function () {
    Route::get('profile', 'view')->name('profile.view');
});

Route::controller(user_management_Controller::class)->group(function () {
    Route::get('user-management', 'view')->name('user_management.view');
    Route::get('user-create', 'createPage')->name('user_management.create');
    Route::Post('user-insert', 'insert')->name('user_management.insert');
});
Route::controller(branch_Controller::class)->group(function () {
    Route::get('branch', 'view')->name('branch.view');
    Route::get('branch-create', 'createPage')->name('branch.create');
    Route::post('branch-insert', 'insert')->name('branch.insert');
});
Route::controller(vehicle_controller::class)->group(function () {
    Route::get('vehicle-registration-list', 'view')->name('vehicle_registration.view');
});
Route::controller(driver_allocation_Controller::class)->group(function () {
    Route::get('driver-allocation', 'view')->name('driver_allocation.view');
});
Route::controller(daily_load_report_Controller::class)->group(function () {
    Route::get('daily-load_report', 'view')->name('daily_load_report.view');
});
Route::controller(vehicle_maintenance_Controller::class)->group(function () {
    Route::get('vehicle-maintenance', 'view')->name('vehicle_maintenance.view');
});


Route::controller(vehicleTypeAddController::class)->group(function () {
    Route::get('vehicle-type-view', 'view')->name('add.vehicle.type.view');
    Route::post('vehicle-type-insert', 'insert')->name('vehicle.type.insert');
    Route::post('vehicle-type-update', 'update')->name('vehicle.type.update');
});



Route::controller(salevehicleListController::class)->group(function () {
    Route::get('sale-inquery-vehicle-list', 'view')->name('sale.inquery.vehicle.view');
    // Route::post('vehicle-type-insert', 'insert')->name('vehicle.type.insert');
    // Route::post('vehicle-type-update', 'update')->name('vehicle.type.update');
});

Route::controller(defaultervehicleadminController::class)->group(function () {
    Route::get('defaulter-vehicle-list', 'view')->name('defaulter.vehicle.view');
    // Route::post('vehicle-type-insert', 'insert')->name('vehicle.type.insert');
    // Route::post('vehicle-type-update', 'update')->name('vehicle.type.update');
});


// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(home_controller::class)->group(
    function () {
        Route::get('/', 'view')->name('index.view');
    }
);

Route::controller(aboutController::class)->group(
    function () {
        Route::get('about', 'view')->name('about.view');
    }
);

Route::controller(constructionController::class)->group(
    function () {
        Route::get('construction', 'view')->name('construction.view');
    }
);

Route::controller(minningController::class)->group(
    function () {
        Route::get('minning', 'view')->name('minning.view');
    }
);

Route::controller(transporatationController::class)->group(
    function () {
        Route::get('transporatation', 'view')->name('transporatation.view');
    }
);

Route::controller(projectController::class)->group(
    function () {
        Route::get('projects', 'view')->name('project.view');
    }
);

Route::controller(contactController::class)->group(
    function () {
        Route::get('contact', 'view')->name('contact.view');
    }
);


Route::controller(vehicleRegisterController::class)->group(
    function () {
        Route::get('vehicle-registration', 'view')->name('vehicleregistration.form');
        Route::post('vehicle-registration', 'insert')->name('vehicleregistration.insert');

    }
);

Route::controller(defaulterVehicleController::class)->group(
    function () {
        Route::get('default-vehicle-registration', 'view')->name('defaulter.vehicleregistration..sale.form');
        Route::post('default-vehicle-registration', 'insert')->name('default.vehicleregistration.insert');

    }
);


Route::controller(purchaseVehicleController::class)->group(
    function () {
        Route::get('purchase-vehicle-registration', 'view')->name('purchase.vehicleregistration.form');
        Route::post('purchase-vehicle-registration', 'insert')->name('purchase.vehicleregistration.insert');
    }
);