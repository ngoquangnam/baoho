<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\SubMiniCategory;
use App\Banner;
use App\Product;
use App\Color;
use App\Size;
use App\Material;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $products = Product::all();
        $banners = Banner::all();

        $featuresItems = Product::where('show', '=', 'sản phẩm bán chạy')->get();

        $salesItem = Product::join('categories', 'products.category_id', 'categories.id')
                            ->where([['products.show', 'sản phẩm nổi bật'], ['categories.name', 'Thiết bị an toàn']])->select('products.*')->get();
        $clothes = Product::join('categories', 'products.category_id', 'categories.id')
                            ->where([['products.show', 'sản phẩm nổi bật'], ['categories.name', 'Quần áo bảo hộ']])->select('products.*')->get();

        return view('web.temp.layout', compact('categories', 'subCategories', 'products', 'banners', 'featuresItems', 'salesItem', 'clothes'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $colors = Color::all();
        $sizes = Size::all();
        $materials = Material::all();
        return view('web.temp.detail', compact('product', 'colors', 'sizes', 'materials'));
    }

     public function showCategories($id)
     {
        $banners = Banner::all();

        $subCategories = SubCategory::findOrFail($id);

        $categories = Category::all();

        $products = $subCategories->products;

        foreach($products as $product)
        {
            array_add($product, 'image', $product->images[0]->image);
        }
        return view('web.temp.category', compact('categories', 'banners', 'products'));
     }

}
