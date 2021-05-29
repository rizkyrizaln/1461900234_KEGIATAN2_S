<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WhereController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\GabunganController;

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

#Route::get('/', function () {
#    return view('welcome');
#});


Route::get('/', function () { 
    return view('0234_home');
});
Route::get('/select', function () { 
    return view('0234_home');
});
Route::get('/where', function () { 
    return view('0234_where');
});
Route::get('/join', function () { 
    return view('0234_join');
});
Route::get('/gabungan', function () { 
    return view('0234_gabungan');
});

Route::resource('/select', SiswaController::class);
Route::resource('/where', WhereController::class);
Route::resource('/join', JoinController::class);
Route::resource('/gabungan', GabunganController::class);