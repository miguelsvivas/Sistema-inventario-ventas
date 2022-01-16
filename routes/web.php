<?php

use App\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('providers', ProviderController::class)->names('providers');
Route::resource('products', ProductController::class)->names('products');
Route::resource('clients', ClientController::class)->names('clients');
Route::resource('purchases', PurchaseController::class)->names('purchases');
Route::resource('sales', SaleController::class)->names('sales');

Auth::routes();


Route::get('get_products_by_id', 'ProductController@get_products_by_id')->name('get_products_by_id');


Route::get('/home', 'HomeController@index')->name('home');
