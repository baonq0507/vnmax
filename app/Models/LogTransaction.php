<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogTransaction extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'log_type',
        'log_message',
        'transaction_id',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
