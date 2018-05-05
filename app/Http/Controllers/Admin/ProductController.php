<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Color;
use App\Size;
use App\Material;
use App\SubCategory;
use App\Product;
use App\ProductColor;
use App\ProductSize;
use App\ProductMaterial;
use App\Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.list-product.content');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();
        $sizes = Size::all();
        $materials = Material::all();
        $subCategories = SubCategory::all();
        return view('admin.list-product.new', compact('categories', 'colors', 'sizes', 'materials', 'subCategories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->save();
        
        $colors = [];
        $colors = $request->color;
        foreach($request->color as $pc)
        {
            $productColor = new ProductColor();
            $productColor->color_id = $pc;
            $productColor->product_id = $product->id;
            $productColor->save();
        }

        $sizes = [];
        $sizes = $request->size;
        foreach($sizes as $ps)
        {
            $productSize = new ProductSize();
            $productSize->size_id = $ps;
            $productSize->product_id = $product->id;
            $productSize->save();
        }

        $materials = [];
        $materials = $request->material;
        foreach($materials as $pm)
        {
            $productMaterial = new ProductMaterial();
            $productMaterial->material_id = $pm;
            $productMaterial->product_id = $product->id;
            $productMaterial->save();
        }
        if($request->hasFile('images'))
        {
            foreach($request->file('images') as $file)
            {
                $nameFile = $file->getClientOriginalName();
                $path = $file->store('public/products');
                Storage::url($path);
                $image = new Image();
                $image->product_id = $product->id;
                $image->image = $nameFile;
                $image->save();
            }
        }

        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.list-product.product-detail');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getSubCategory(Request $request)
    {
        $subCategory = SubCategory::where('category_id', $request->id)->get();
        return json_encode($subCategory);
    }
}
