<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description', 'price', 'price_after_discount', 'reviews', 'total_sales', 'stock', 'tags', 'image_path'];
}
