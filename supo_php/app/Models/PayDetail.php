<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PayDetail extends Model
{
    use HasFactory;
    protected $table = "payment";
    protected $fillable = [
        'id',
        'status',
        'user_id',
        'user_name',
        'user_email',
        'user_phone',
        'payment_cart',
        'payment_info',
        'message',
        'created',
    ] ;


     public $timestamps = false;
}