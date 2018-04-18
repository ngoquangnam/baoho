<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory1 extends Model
{
    protected $table = 'sub_category1s';

    protected $fillable = ['name'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
