<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataDeletionRequest extends Model
{
    protected $table = "data_deletion_requests";

    protected $fillable = ['email', 'password', 'status'];

    protected $casts = [
        'password' => 'encrypted',
    ];
}
