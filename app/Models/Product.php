<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        //adding user controlled columns
        'name',
        'qty',
        'price',
        'description'
        // we are not adding id and timestamp becoz they are not user controlled and are auto generated
    ];
}
