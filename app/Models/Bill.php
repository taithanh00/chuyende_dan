<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'bill';
    protected $fillable = [
        'bill_id',
        'bill_day',
        'bill_time',
        'bill_total',
        'payment',
        'client_id',
        'oder_id',
        'billdetail_id'
    ];
    protected $primaryKey = 'bill_id';
}
