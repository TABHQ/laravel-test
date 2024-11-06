<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'to_id',
        'type',
        'amount'
    ];

    public $incrementing = false;
}
