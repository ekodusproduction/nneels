<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';
    protected $guarded = [];

    public function product_gallery(){
        return $this->hasMany(ProductGallery::class, 'product_id', 'product_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }

    public function subCategory(){
        return $this->belongsTo(SubCategory::class, 'sub_categories_id', 'id');
    }
}
