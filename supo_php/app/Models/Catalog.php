<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    protected $table = 'catalog';
    protected $fillable = [
        'name',
        'id',
    ] ;
     // Thiết lập không sử dụng timestamps (created_at và updated_at)
     public $timestamps = false;
}