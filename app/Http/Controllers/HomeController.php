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
        $sessionSet = session()->get('cart');
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $products = Product::all();
        $banners = Banner::all();

        $featuresItems = Product::where('show', '=', 'sản phẩm bán chạy')->get();

        $safeDevices = Product::join('categories', 'products.category_id', 'categories.id')
                            ->where([['products.show', 'sản phẩm nổi bật'], ['categories.name', 'Thiết bị an toàn']])->select('products.*')->get();

        $clothes = Product::join('categories', 'products.category_id', 'categories.id')
                            ->where([['products.show', 'sản phẩm nổi bật'], ['categories.name', 'Quần áo bảo hộ']])->select('products.*')->get();

        $fireProtectionEquipments = Product::join('categories', 'products.category_id', 'categories.id')
                            ->where([ ['products.show', 'sản phẩm nổi bật'], ['categories.name', 'Thiết bị PCCC']])->select('products.*')->get();

        $metallicEquipments = Product::join('categories', 'products.category_id', 'categories.id')
                            ->where([ ['products.show', 'sản phẩm nổi bật'], ['categories.name', 'Thiết bị kim khí']])->select('products.*')->get();
        $shoeProtections = Product::join('categories', 'products.category_id', 'categories.id')
                            ->where([['products.show', 'sản phẩm nổi bật'], ['categories.name', 'Giày BHLĐ']])->select('products.*')->get();

        return view('web.temp.layout', compact('categories', 'subCategories', 'products', 'banners', 'featuresItems', 'safeDevices', 'clothes', 'fireProtectionEquipments', 'metallicEquipments', 'shoeProtections', 'sessionSet'));
    }

    public function show($slug)
    {

        $string  = str_replace('-',' ', $slug);

        $array = explode(' ',$string);

        $id = $array[count($array)-1];


        $sessionSet = session()->get('cart');

        $categories = Category::all();

        $product = Product::findOrFail($id);
        $products = Product::findOrFail($id);

        $colors = Color::all();

        $sizes = Size::all();

        $materials = Material::all();


        return view('web.temp.detail', compact('product', 'colors', 'sizes', 'materials', 'sessionSet', 'categories', 'products'));
    }

     public function showCategories($slug)
     {
        $string  = str_replace('-',' ', $slug);

        $array = explode(' ',$string);

        $id = $array[count($array)-1];
        
        $sessionSet = session()->get('cart');

        $banners = Banner::all();

        $subCategories = SubCategory::findOrFail($id);

        $sameCategory = SubCategory::where('category_id',$subCategories->category_id)->get();

        $categories = Category::all();

        $products = $subCategories->products;

        foreach($products as $product)
        {
            array_add($product, 'image', $product->images[0]->image);
        }
        return view('web.temp.subCategory', compact('categories','subCategories', 'banners', 'products', 'sessionSet', 'sameCategory'));
     }

     public function search(Request $request)
     {
        $sessionSet = session()->get('cart');

        $banners = Banner::all();

        $subCategories = SubCategory::findOrFail(1);

        $sameCategory = SubCategory::where('category_id',$subCategories->id)->get();

        $categories = Category::all();
        $products = Product::where('name', 'like', '%'.$request->key.'%')->orWhere('price','like','%'.$request->key.'%')->get();
        foreach($products as $product)
        {
            array_add($product, 'image', $product->images[0]->image);
        }

        return view('web.temp.search', compact('categories', 'banners', 'products', 'sessionSet', 'sameCategory'));
     }

}
