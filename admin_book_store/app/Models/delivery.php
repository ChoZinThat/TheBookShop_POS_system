<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_name',
        'delivery_fees',
        'long_time'
    ];
}
