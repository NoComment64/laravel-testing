<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    
    protected $fillable = ['name', 'title', 'price', 'product_type_id'];

    protected $hidden = ['created_at', 'updated_at'];

    public function productType()
{
    return $this->hasOne(
        'App\Models\ProductType',
        'id',
        'product_type_id'
    );
}
}
