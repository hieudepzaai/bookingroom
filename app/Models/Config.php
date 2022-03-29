<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Config
 * 
 * @property int $id
 * @property string $key
 * @property string|null $description
 * @property string $value
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class Config extends Model
{
	protected $table = 'config';
	public $timestamps = false;

	protected $fillable = [
		'key',
		'description',
		'value'
	];
}
