<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\SubCategory;
use App\Color;
use App\Size;
use App\Material;
use App\Product;
use App\ProductColor;
use App\ProductSize;
use App\ProductMaterial;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $colors = Color::all();
        $sizes = Size::all();
        $materials = Material::all();
        return view('production.category.index',compact('categories', 'subCategories', 'colors', 'sizes', 'materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ], [
            'name.required' => 'vui lòng nhập loại sản phẩm chính'
        ]);
        if ($validator->fails())
        {
           return redirect()->back()
           ->withErrors($validator)
           ->withInput();
        }
        else
        {
            $category = new Category();
            $category->name = $request->name;
            $category->save();
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $category = Category::findOrFail($id);

        $category->delete();

        foreach($category->subCategories as $subCategories)
        {
            $subCategories->delete();
        }

        

        

        return redirect()->back();
    }
}
