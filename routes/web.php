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

Route::resource('categories', 'CategoryController')->names('categories');
Route::resource('providers', ProviderController::class)->names('providers');
Route::resource('products', ProductController::class)->names('products');
Route::resource('clients', ClientController::class)->names('clients');
Route::resource('purchases', PurchaseController::class)->names('purchases');
Route::resource('sales', 'SaleController')->names('sales');
Route::resource('users', UserController::class)->names('users');

Auth::routes();

Route::get('purchases/pdf/{purchase}', 'PurchaseController@pdf')->name('purchases.pdf');
Route::get('sales/pdf/{sale}', 'SaleController@pdf')->name('sales.pdf');

Route::get('get_products_by_id', 'ProductController@get_products_by_id')->name('get_products_by_id');


Route::get('change_status/products/{product}', 'ProductController@change_status')->name('change.status.products');
Route::get('change_status/purchases/{purchase}', 'PurchaseController@change_status')->name('change.status.purchases');
Route::get('change_status/sales/{sale}', 'SaleController@change_status')->name('change.status.sales');


Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('permisos', 'PermissionController')->names('permission');

Route::resource('permisos', 'PermissionController')
->names('permission')
->parameters(['permisos' => 'permission']);


Route::resource('roles', 'RoleController')
->names('roles')
->parameters(['permisos' => 'roles']);