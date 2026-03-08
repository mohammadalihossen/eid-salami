<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salami extends Model
{
   protected $fillable = [
        'sender_name',
        'total_amount',
        'receiver_count',
        'token'
    ];
}
