<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string|null $name
 * @property int|null $slug
 * @property string|null $description
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'role';
	public $timestamps = false;

	protected $casts = [
		'slug' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'description'
	];
}
