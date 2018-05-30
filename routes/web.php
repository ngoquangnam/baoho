<?php
use Illuminate\Http\Request;
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



Route::post('/post-cart', function(Request $request){

	$cart = $request->cart;
	$total = $request->total;

	session()->put('cart', $cart);
	session()->put('total', $total);


	return redirect()->route('checkout');
	// return view('web.temp.checkout', compact('carts', 'total'));

})->name('getSession');
Route::get('/checkout', function(){

		$sessionSet = [
	 	'cart' => session()->get('cart'),
	 	'total' => session()->get('total')
	 ];

	 return view('web.temp.checkout', compact('sessionSet'));
})->name('checkout');


Route::post('/buy', 'BuyController@buy')->name('buy');

Route::get('/detail/{id}', 'HomeController@show')->name('detail');

// Route::get('/category/{id}', 'HomeController@category')->name('category');



