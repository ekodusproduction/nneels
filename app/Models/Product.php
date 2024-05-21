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

    public function getRateOfDiscountAttribute($value)
    {
        if (intval($value) == $value) {
            // If it is a whole number, cast it to an integer to remove the decimal part
            return $value = intval($value);
        }else{
            return $value;
        }
    }
}
