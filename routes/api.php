<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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
Route::get('books',[ApiController::class,"listBook"]);
Route::post('books/store',[ApiController::class,"storeBook"]);
Route::post('books/update/{id}',[ApiController::class,"updateBook"]);
Route::get('books/destroy/{id}',[ApiController::class,"destroy"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
