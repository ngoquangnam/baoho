<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['id', 'name', 'phone', 'address', 'note'];

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }
}
