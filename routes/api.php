<?php

use App\Http\Controllers\AntrianController;
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
Route::post('/update-antrian',[AntrianController::class, 'UpdateAntrian']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
