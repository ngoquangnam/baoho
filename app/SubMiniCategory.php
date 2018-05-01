<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMiniCategory extends Model
{

    protected $fillable = ['name'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
