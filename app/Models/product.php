<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'product_name',
        'display_image',
        'preview_image',
        'product_type',
        'product_category',
        'product_price',
        'product_description',
        'product_background',
        'product_size',
        'product_quote',
        'product_quantity',
        'product_sku',
        'available_quantity',
        'compare_price',   
    ];
}
