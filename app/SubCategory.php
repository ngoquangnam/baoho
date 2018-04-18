<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';

    protected $fillable = ['name'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategories1()
    {
        return $this->hasMany(SubCategory1::class);
    }
}
