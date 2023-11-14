<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Registers the API routes for CRUD operations on products.
 *
 * @return void
 */
Route::get('/products', [ProductosController::class, 'index']);
Route::get('/product/{id}', [ProductosController::class, 'show']);
Route::post('/product', [ProductosController::class, 'store']);
Route::put('/product/{id}', [ProductosController::class, 'update']);
Route::delete('product/{id}', [ProductosController::class, 'destroy']);
