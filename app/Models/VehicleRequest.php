<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleRequest extends Model
{
    //
    protected $table = 'vehicle_requests';
    protected $primarykey ="id";

    protected $fillable = [
        'vehicle_request_id',
        'vehicle_request_type',
        'request_type',
        'allocated_to',
        'allocated_date',
        'status',
    ];
}
