<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Material;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        foreach($products as $product)
        {
        	$arr = [];
        	foreach($product->materials as $material)
        	{
        		
        		array_push($arr, $material->name);
        	}
        	$product->material = implode(",",$arr);
        	$product->save();
        }
    }
}
