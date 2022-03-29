<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ward
 * 
 * @property int $id
 * @property string $name
 * @property string|null $prefix
 * @property int|null $province_id
 * @property int|null $district_id
 *
 * @package App\Models
 */
class Ward extends Model
{
	protected $table = 'ward';
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
