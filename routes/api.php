<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/index', [CustomerController::class, 'index']);
Route::delete('/delete/{id}', [CustomerController::class, 'destroy']);
Route::get('/show/{id}', [CustomerController::class, 'show']);
Route::put('/update/{id}', [CustomerController::class, 'update']);
Route::post('/store', [CustomerController::class, 'store']);