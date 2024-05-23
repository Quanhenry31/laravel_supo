<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    protected $table = 'payment';
    protected $fillable = [
        'id',
        'status',
        'user_id',
        'user_name',
        'user_email',
        'user_phone',
        'all_price',
        'payment_cart',   
        'payment_info',   
        'message',   
        'created',   
    ] ;
     // Thiết lập không sử dụng timestamps (created_at và updated_at)
     public $timestamps = false;
}