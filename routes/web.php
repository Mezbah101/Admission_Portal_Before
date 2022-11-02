<?php

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

Route::get('/index', [\App\Http\Controllers\Frontend\HomeController::class, 'index']);
  
Route::get('/login', [\App\Http\Controllers\Frontend\SignupController::class, 'login']);


Route::get('/basic', [\App\Http\Controllers\Frontend\BasicController::class, 'basic']);


Route::get('/moreinfo', [\App\Http\Controllers\Frontend\MoreinfoController::class, 'moreinfo']);

Route::get('/upload', [\App\Http\Controllers\Frontend\UploadController::class, 'upload']);

Route::get('/payment', [\App\Http\Controllers\Frontend\PaymentController::class, 'payment']);

Route::post('/store-form',[\App\Http\Controllers\Frontend\SignupController::class,'store_form']);
