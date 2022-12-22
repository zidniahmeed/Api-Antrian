<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RiwayatController;
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

Route::get('/antrian-active',[AntrianController::class, 'AntrianActive']);
Route::post('/add-antrian',[AntrianController::class, 'AddAntrian']);
Route::get('/antrian-nonactive',[AntrianController::class, 'AntrianNonActive']);
Route::any('/update-antrian/{id}',[AntrianController::class, 'UpdateAntrian']);
Route::any('/undo-antrian/{id}',[AntrianController::class, 'UndoAntrian']);

Route::any('/view-product',[ProductController::class, 'index']);
Route::any('/add-product',[ProductController::class, 'AddProduct']);


Route::any('/view-cart',[CartController::class, 'index']);
Route::any('/add-cart',[CartController::class, 'store']);

Route::any('/add-riwayat',[RiwayatController::class, 'store']);
Route::any('/view-riwayat',[RiwayatController::class, 'index']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
