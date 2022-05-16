<?php

use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\TemplateController;
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
    return view('frontend/master');
});

Route::resource('product', 'App\Http\Controllers\ProductController');
Route::resource('service', 'App\Http\Controllers\ServiceController');

Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::apiResource('product', 'ProductController');
Route::apiResource('service', 'ServiceController');