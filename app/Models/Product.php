<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'brand',
        'category'
    ];

    protected $table = 'products';

    public function products_variant() {
        return $this->hasMany(ProductVariant::class, 'product_id', 'id');
    }
}
