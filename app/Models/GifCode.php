<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GifCode extends Model
{
    protected $fillable = [
        'gif_code',
        'status',
        'amount',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
