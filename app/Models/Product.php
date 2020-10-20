<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    
    protected $fillable = [
        'name',
        'cateogry_id',
        'image_url',
        'desc',
        'price',
        'sale_percent',
        'stocks',
        'is_active'
    ];
}
