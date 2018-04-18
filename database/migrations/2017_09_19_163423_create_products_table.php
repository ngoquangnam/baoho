<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('price');
            $table->integer('warranties');
            $table->string('producer')->nullable();
            $table->string('description');
            $table->integer('sub_category_id-1')->unsigned();
            $table->foreign('sub_category_id-1')->references('id')->on('sub_category1s')->onDelete('cascade');

        });
    }

    /**0
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
