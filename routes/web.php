<?php

use Illuminate\Support\Facades\Route;

// import controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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


Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
// controller path
//  ---login GET & POST route
Route::post('/login', [UserController::class, 'login']);
Route::get('search', [ProductController::class, 'search']);
Route::get('/', [ProductController::class, 'allProducts']);

Route::get('productDetails/{id}', [ProductController::class, 'productDetails']);
Route::post('add_To_Cart', [ProductController::class, 'addToCart']);

Route::get('cart', [ProductController::class, 'cart']);
Route::get('remove_Item_From_Cart/{id}', [ProductController::class, 'removeItemFromCart']);

Route::get('orderNow', [ProductController::class, 'orderNow']);
Route::post('orderPlaced', [ProductController::class, 'orderPlaced']);