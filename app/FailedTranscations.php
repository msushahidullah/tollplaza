<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FailedTranscations extends Model
{
    //
    protected $fillable = [
        'txn_id',
        'order_id',
        'user_id',
        'created_at',
        'updated_at',
    ];
}
