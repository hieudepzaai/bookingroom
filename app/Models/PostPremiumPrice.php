<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostPremiumPrice
 * 
 * @property int $id
 * @property int|null $post_premium_id
 * @property float|null $price
 * @property string|null $price_type
 *
 * @package App\Models
 */
class PostPremiumPrice extends Model
{
	protected $table = 'post_premium_price';
	public $timestamps = false;

	protected $casts = [
		'post_premium_id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'post_premium_id',
		'price',
		'price_type'
	];
}
