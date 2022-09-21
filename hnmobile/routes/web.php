<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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

//index
Route::get('/', function () {
    return view('client/index');
});
//products
//Route::get('/product/{id}',[productController::class,'product']);
Route::get('/product/details/{id}',[productController::class,'details']);
// categories
Route::get('/product-by-category', function () {
    return view('client/categories/list');
});

