<?php

use App\Http\Controllers\BackEnd\address\DistrictController;
Route::get("array" ,  function () {
    $arr = [

        'created_by'
    ];
    return view("test" , [
        'arr' => $arr
    ]);
});
//Route::get('post/create', [\App\Http\Controllers\BackEnd\post\PostController::class , 'Create']);
Route::any('post/create', [\App\Http\Controllers\BackEnd\post\PostController::class , 'Create'])->name("post.create");

Route::get('provinces', [\App\Http\Controllers\BackEnd\address\ProvinceController::class , 'getAll']);
Route::get('provinces/getByName', [\App\Http\Controllers\BackEnd\address\ProvinceController::class , 'getByName'])->name("province.getByName");

Route::get('districts', [DistrictController::class , 'getAll']);
Route::get('district/provinces/{id}', [DistrictController::class , 'getDistrictByProvinceId'])->name('district.getByProvinceID');
Route::get('district/{id}', [DistrictController::class , 'getById']);

Route::get('ward/{id}', [\App\Http\Controllers\BackEnd\address\WardController::class , 'getById']);
Route::get('ward/getWardByDistrictId/{id}', [\App\Http\Controllers\BackEnd\address\WardController::class , 'getWardByDistrictId'])->name('ward.getByDistrictID');

Route::get('street/getByName', [\App\Http\Controllers\BackEnd\address\StreetController::class , 'getStreetByName'])->name('street.getByName');

Route::get('categories', [\App\Http\Controllers\BackEnd\PostCategory\PostCategoryController::class, 'getAll'])->name('category.getAll');


