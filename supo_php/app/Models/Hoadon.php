<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Hoadon extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $fillable = [
        'id',

        'payment_id',
        'product_id',
        'qty',
        'price',
        'information',
        'status',
        'user_id',
    ] ;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function details()
    {
        return $this->hasMany(HoaDonDetail::class, 'order_id');
    }

     public $timestamps = false;
}