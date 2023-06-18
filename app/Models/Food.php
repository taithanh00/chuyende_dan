<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'food_name',
        'food_money',
        'image',
        'type_id',
        'Change'
    ];
    protected $primaryKey = 'food_id';
}
