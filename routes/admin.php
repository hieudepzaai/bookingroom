<?php

use App\Http\Controllers\BackEnd\address\DistrictController;

Route::get('district', [DistrictController::class , 'index']);
//Route::get('district', [\App\Http\Controllers\address\DistrictController::class , 'getAll']);
Route::get('district/{id}', [DistrictController::class , 'getById']);
