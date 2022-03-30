<?php

use App\Http\Controllers\BackEnd\address\DistrictController;
Route::get("array" ,  function () {
    $arr = [
        'title',
        'description',
        'category_id',
        'street_id',
        'ward_id',
        'district_id',
        'province_id',
        'address_detail',
        'price',
        'price_type',
        'is_disabled',
        'area',
        'priority',
        'expired_at',
        'deposit_amount',
        'status',
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

//Route::get('district', [\App\Http\Controllers\address\DistrictController::class , 'getAll']);
Route::get('district/{id}', [DistrictController::class , 'getById']);
