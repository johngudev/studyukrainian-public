<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PremiumStatus extends Model
{
    protected $table = 'premium_status';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'is_premium',
    ];
}
