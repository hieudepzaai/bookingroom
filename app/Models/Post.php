<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Post
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string $type
 * @property int|null $street_id
 * @property int|null $ward_id
 * @property int|null $district_id
 * @property int|null $province_id
 * @property string|null $address_detail
 * @property float|null $price
 * @property string $price_type
 * @property int|null $is_disabled
 * @property float|null $area area in m2
 * @property int|null $priority mức độ ưu tiên
 * @property string|null $expired_at
 * @property float|null $deposit_amount
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property int|null $created_by
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereAddressDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDepositAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereExpiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIsDisabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePriceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereStreetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereWardId($value)
 * @mixin \Eloquent
 * @property int|null $category_id
 * @method static \Database\Factories\PostFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 */
class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $guarded = [];
    public $timestamps = false;
}

