<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    use HasFactory;

    protected $fillable = ([
        'user_id',
        'menu_id',
        'order_date',
        'qty',
        'total_amount',
    ]);
}
