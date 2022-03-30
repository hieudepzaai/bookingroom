<?php

use App\Http\Controllers\BackEnd\address\DistrictController;

Route::get('post/create', [\App\Http\Controllers\BackEnd\post\PostController::class , 'Create']);


Route::get('district', [DistrictController::class , 'index']);
//Route::get('district', [\App\Http\Controllers\address\DistrictController::class , 'getAll']);
Route::get('district/{id}', [DistrictController::class , 'getById']);
