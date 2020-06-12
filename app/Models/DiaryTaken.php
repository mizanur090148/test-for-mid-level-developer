<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaryTaken extends Model
{
    protected $table = 'diary_taken';

    protected $fillable = [
        'buyer_id',
        'amount'
    ];
}
