<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price',
        'image', 'category_id'
    ];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
