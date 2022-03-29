<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $category_id
 * @property int|null $street_id
 * @property int|null $ward_id
 * @property int|null $district_id
 * @property int|null $province_id
 * @property string|null $address_detail
 * @property float|null $price
 * @property string $price_type
 * @property int|null $is_disabled
 * @property float|null $area
 * @property int|null $priority
 * @property Carbon|null $expired_at
 * @property float|null $deposit_amount
 * @property string|null $status
 * @property Carbon|null $created_at
 * @property int|null $created_by
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'post';
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'street_id' => 'int',
		'ward_id' => 'int',
		'district_id' => 'int',
		'province_id' => 'int',
		'price' => 'float',
		'is_disabled' => 'int',
		'area' => 'float',
		'priority' => 'int',
		'deposit_amount' => 'float',
		'created_by' => 'int'
	];

	protected $dates = [
		'expired_at'
	];

	protected $fillable = [
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
}
