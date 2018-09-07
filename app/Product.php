<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'price', 'warranties', 'producer', 'description', 'priority',
        'category_id', 'sub_category_id', 'show', 'link_video', 'discount','material'
    ];

    const PRIORITY = [
        1 => 'ưu tiên cao',
        2 => 'ưu tiên thấp',
    ];
    const SHOW = [
        1 => 'sản phẩm nổi bật',
        2 => 'sản phẩm bán chạy',
        3 => 'sản phẩm còn lại',
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

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function billdetails()
    {
        return $this->hasMany(BillDetail::class);
    }
}
