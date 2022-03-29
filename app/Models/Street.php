<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Street
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $prefix
 * @property int|null $province_id
 * @property int|null $district_id
 *
 * @package App\Models
 */
class Street extends Model
{
	protected $table = 'street';
	public $timestamps = false;

	protected $casts = [
		'province_id' => 'int',
		'district_id' => 'int'
	];

	protected $fillable = [
		'name',
		'prefix',
		'province_id',
		'district_id'
	];
}
