<?php

Route::get('district', [\App\Http\Controllers\address\DistrictController::class , 'index']);
//Route::get('district', [\App\Http\Controllers\address\DistrictController::class , 'getAll']);
Route::get('districts/{id}', [\App\Http\Controllers\address\DistrictController::class , 'getById']);
