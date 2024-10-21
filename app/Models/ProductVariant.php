<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'color',
        'price',
        'rental_price',
        'stock',
        'status'
    ];

    protected $table = 'products_variants';

    public function products () {
        return $this->belongsTo(Product::class);
    }
}
