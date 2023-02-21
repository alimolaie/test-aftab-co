<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MadahController;
use App\Http\Controllers\MonaSebatController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\NotificationSweetAlert;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BookController;
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
    return redirect('login');
});
Route::group(['middleware' => ['Admin']], function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });



    Route::resource('admin/books', BookController::class);


});
