<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'bank_name',
        'bank_account_name',
        'bank_account_number',
        'status',
        'type',
    ];
}
