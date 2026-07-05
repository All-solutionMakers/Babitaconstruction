<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendance';

    protected $fillable = [
        'admin',
        'selfie_photo',
        'type',
        'location',
        'latitude',
        'longitude'
    ];
}
