<?php

use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('product', [ProductController::class, 'index']);
Route::post('product/store', [ProductController::class, 'store']);
Route::get('product/show/{id}', [ProductController::class, 'show']);
Route::post('product/update/{id}', [ProductController::class, 'update']);
Route::get('product/destroy/{id}', [ProductController::class, 'destroy']);


Route::get('service', [ServiceController::class, 'index']);
Route::post('service/store', [ServiceController::class, 'store']);
Route::get('service/show/{id}', [ServiceController::class, 'show']);
Route::post('service/update/{id}', [ServiceController::class, 'update']);
Route::get('service/destroy/{id}', [ServiceController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
