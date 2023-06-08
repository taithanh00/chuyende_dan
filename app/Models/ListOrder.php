<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOrder extends Model
{
    protected $table = 'list_order';
    use HasFactory;

    protected $fillable = [
        'food_name',
        'food_money',
        'total_price',
        'quantity'
    ];
}
