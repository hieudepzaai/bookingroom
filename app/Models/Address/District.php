<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Address\District
 *
 * @method static \Illuminate\Database\Eloquent\Builder|District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District query()
 * @mixin \Eloquent
 * @property int $id
 * @property string|null $name
 * @property string|null $prefix
 * @property int|null $province_id
 * @method static \Illuminate\Database\Eloquent\Builder|District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District wherePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereProvinceId($value)
 */
class District extends Model
{
    use HasFactory;
    protected $table = 'district';
    protected $fillable = ['id' , 'name' , 'prefix' , 'province_id'];
    public $timestamps = false;

}
