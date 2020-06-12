<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EraserTaken extends Model
{
    protected $table = 'eraser_taken';

    protected $fillable = [
        'buyer_id',
        'amount'
    ];
}
