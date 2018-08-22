<?php

Route::get('/home', 'HomeController@index')->name('admin.home');

Route::group(['prefix' => 'products'], function () {
    Route::get('/', 'ProductController@index')->name('admin.product.index');
    Route::get('/new', 'ProductController@create')->name('admin.product.new');
    Route::post('/{id}/update', 'ProductController@update')->name('admin.product.update');
    Route::get('/{id}/', 'ProductController@getSubCategory')->name('admin.product.getSubCategory');
    Route::post('/store', 'ProductController@store')->name('admin.product.store');
    Route::post('/{id}/delete', 'ProductController@delete')->name('admin.product.delete');
    Route::get('/{id}/edit', 'ProductController@edit')->name('admin.product.edit');
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
    Route::post('/{id}/delete', 'ColorController@delete')->name('admin.color.delete');
});

Route::group(['prefix' => 'sizes'], function () {
    Route::post('/store', 'SizeController@store')->name('admin.size.store');
    Route::put('/{id}/update', 'SizeController@update')->name('admin.size.update');
    Route::post('/{id}/delete', 'SizeController@delete')->name('admin.size.delete');

});

Route::group(['prefix' => 'materials'], function () {
    Route::post('/store', 'MaterialController@store')->name('admin.material.store');
    Route::put('/{id}/update', 'MaterialController@update')->name('admin.material.update');
    Route::post('/{id}/delete', 'MaterialController@delete')->name('admin.material.delete');

});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', 'CategoryController@index')->name('admin.category.index');
    Route::post('/store', 'CategoryController@store')->name('admin.category.store');
    Route::post('/{id}/delete', 'CategoryController@destroy')->name('admin.category.delete');
    Route::post('/{id}/subDelete', 'SubCategoryController@destroy')->name('admin.subCategory.delete');
    Route::post('/store/subCategory', 'SubCategoryController@store')->name('admin.subCategory.store');
    Route::post('/store/subMiniCategory', 'SubMiniCategoryController@store')->name('admin.subMiniCategory.store');
});

Route::resource('banner', 'BannerController')->names([
    'create' => 'admin.banner.create',
    'store' => 'admin.banner.store',
    'destroy' => 'admin.banner.delete',
    'index' => 'admin.banner.index',
    'update' => 'admin.banner.update',
    'edit' => 'admin.banner.edit',
    'show' => 'admin.banner.show',
]);

Route::resource('bill', 'BillController')->names([
    'create' => 'admin.bill.create',
    'store' => 'admin.bill.store',
    'destroy' => 'admin.bill.delete',
    'index' => 'admin.bill.index',
    'update' => 'admin.bill.update',
    'edit' => 'admin.bill.edit',
    'show' => 'admin.bill.show',
]);
