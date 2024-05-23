<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog;


class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'catalog_id',
        'name',
        'price',
        'image_link',
        'created',
        'view',
        'title',
    ] ;
   // Định nghĩa mối quan hệ "belongsTo" với model Catalog
public function catalog()
{


    return $this->belongsTo(Catalog::class, 'catalog_id');
}

     public $timestamps = false;
}