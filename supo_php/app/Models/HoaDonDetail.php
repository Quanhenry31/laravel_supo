<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class HoaDonDetail extends Model
{
    use HasFactory;
    protected $table = "oder_details";
    protected $fillable = [
        'id',
        'product_id',
        'quantity',
        'allMonney',
        'order_id',
    ] ;


     public $timestamps = false;
}