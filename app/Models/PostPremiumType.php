<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostPremiumType
 * 
 * @property int $id
 * @property string $premium_type
 * @property int $priority
 *
 * @package App\Models
 */
class PostPremiumType extends Model
{
	protected $table = 'post_premium_type';
	public $timestamps = false;

	protected $casts = [
		'priority' => 'int'
	];

	protected $fillable = [
		'premium_type',
		'priority'
	];
}
