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
Route::get('/', [\App\Http\Controllers\FrondEnd\post\ClientPostController::class , 'home'])->name("frontend.index");

Route::get('/post/{id}', [\App\Http\Controllers\FrondEnd\post\ClientPostController::class , 'detail'])->name("frontend.detail");


