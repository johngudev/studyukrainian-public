<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PremiumStatus extends Model
{
    protected $table = 'premium_status';
    public $timestamps = false;

    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'user_id',
        'is_premium',
    ];
}
