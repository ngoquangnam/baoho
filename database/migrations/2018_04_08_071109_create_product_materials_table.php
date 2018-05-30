<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('products')) {

            Schema::create('product_materials', function (Blueprint $table) {
                $table->increments('id');
                // $table->integer('product_id');
                $table->integer('product_id')->unsigned();
                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
                // $table->integer('material_id');
                $table->integer('material_id')->unsigned();
                $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product__materials');
    }
}
