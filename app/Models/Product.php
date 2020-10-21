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
        'category_id',
        'image_url',
        'desc',
        'price',
        'sale_percent',
        'stocks',
        'is_active'
    ];

    public function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }
}
