<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LogTransaction;
use Illuminate\Support\Facades\Log;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'bank_id',
        'transaction_date',
        'transaction_time',
        'transaction_type',
        'transaction_amount',
        'transaction_note',
        'transaction_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function logTransactions()
    {
        return $this->hasMany(LogTransaction::class);
    }
}
