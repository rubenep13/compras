<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::get('/items', [ItemController::class, 'lista']);
Route::get('/items/{id}', [ItemController::class, 'detail']);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/items/add', [ItemController::class, 'add']);
Route::delete('items/delete/{id}', [ItemController::class, 'delete']);
