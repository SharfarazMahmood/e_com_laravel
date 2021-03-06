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
// controller path
//  ---login GET & POST route
Route::post('/login', [UserController::class, 'login']);
Route::get('/', [ProductController::class, 'allProducts']);