<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTableOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'table_number',
        'list_order',
    ];
}
