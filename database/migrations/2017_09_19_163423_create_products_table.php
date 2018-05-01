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
            $table->string('priority');
            $table->integer('sub_mini_category_id')->unsigned();
            $table->foreign('sub_mini_category_id')->references('id')->on('sub_categories')->onDelete('cascade');

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
