<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';

    protected $fillable = ['size'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_sizes');
    }
}
