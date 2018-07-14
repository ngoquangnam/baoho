<?php
use Illuminate\Http\Request;
use App\Category;
use App\Banner;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/checkout', function(){

		$sessionSet = [
	 	'cart' => session()->get('cart'),
	 	'total' => session()->get('total')
	 ];

	 return view('web.temp.checkout', compact('sessionSet'));
})->name('checkout');

Route::post('/post-cart', function(Request $request){

	$cart = $request->cart;
	$total = $request->total;

	session()->put('cart', $cart);
	session()->put('total', $total);


	return redirect()->route('checkout');
	// return view('web.temp.checkout', compact('carts', 'total'));

})->name('getSession');


Route::post('/buy', 'BuyController@buy')->name('buy');

Route::get('/product/{id}/{slug}', 'HomeController@show')->name('detail');

Route::get('/categories/{id}/{slug}', 'HomeController@showCategories')->name('showCategories');

Route::get('/test', function() {
	$categories = Category::all();
	$banners = Banner::all();
	return view('web.temp.category', compact('categories', 'banners'));
});

// Route::get('/category/{id}', 'HomeController@category')->name('category');



