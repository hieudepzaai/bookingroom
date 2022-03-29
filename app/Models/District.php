<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $prefix
 * @property int|null $province_id
 *
 * @package App\Models
 */
class District extends Model
{
	protected $table = 'district';
	public $timestamps = false;

	protected $casts = [
		'province_id' => 'int'
	];

	protected $fillable = [
		'name',
		'prefix',
		'province_id'
	];
}
