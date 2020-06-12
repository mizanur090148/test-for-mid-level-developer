<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenTaken extends Model
{
    protected $table = 'pen_taken';

    protected $fillable = [
        'buyer_id',
        'amount'
    ];
}
