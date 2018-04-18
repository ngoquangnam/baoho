<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'price', 'warranties', 'producer', 'description', 'sub_category_id-1'
    ];

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function Sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }
}
