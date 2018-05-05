<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';

    protected $fillable = ['color'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_colors');
    }
}
