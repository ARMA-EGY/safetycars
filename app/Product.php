<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;
use App\ProductImages;
use App\Visit;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = 
    [
        'name', 'description', 'price', 'category_id', 'url', 'token', 'image'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImages::class);
    }

    public function visits()
    {
        return $this->hasMany(Visit::class, 'page_token', 'token');
    }
}
