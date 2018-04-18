<?php

Route::get('/', 'HomeController@index')->name('admin.home');

Route::group(['prefix' => 'products'], function () {
   Route::get('/', 'ProductController@index')->name('admin.product.index');
   Route::get('/new', 'ProductController@create')->name('admin.product.new');
   Route::put('/{id}/update', 'ProductController@update')->name('admin.product.update');

});

Route::get('/list-item', function () {

    $colors = \App\Color::all();
    $sizes = \App\Size::all();
    $materials = \App\Material::all();

    return view('admin.list-product.list-item',
        compact('colors', 'sizes', 'materials'));
})->name('admin.list-item');

Route::group(['prefix' => 'colors'], function () {
    Route::post('/store', 'ColorController@store')->name('admin.color.store');
    Route::put('/{id}/update', 'ColorController@update')->name('admin.color.update');
});

Route::group(['prefix' => 'sizes'], function () {
    Route::post('/store', 'SizeController@store')->name('admin.size.store');
    Route::put('/{id}/update', 'SizeController@update')->name('admin.size.update');
});

Route::group(['prefix' => 'materials'], function () {
    Route::post('/store', 'MaterialController@store')->name('admin.material.store');
    Route::put('/{id}/update','MaterialController@update')->name('admin.material.update');
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', 'CategoryController@index')->name('admin.category.index');
});

