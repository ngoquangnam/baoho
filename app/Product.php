<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'price', 'warranties', 'producer', 'description', 'priority',
         'category_id', 'sub_category_id'
    ];

    const PRIORITY = [
        1 => 'ưu tiên cao',
        2 => 'ưu tiên thấp',
    ];
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_sizes');
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'product_materials');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
