<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostGallary
 * 
 * @property int $id
 * @property int|null $post_id
 * @property int|null $file_id
 * @property string|null $path
 * @property string|null $gallary_type
 * @property int|null $gallary_order
 *
 * @package App\Models
 */
class PostGallary extends Model
{
	protected $table = 'post_gallary';
	public $timestamps = false;

	protected $casts = [
		'post_id' => 'int',
		'file_id' => 'int',
		'gallary_order' => 'int'
	];

	protected $fillable = [
		'post_id',
		'file_id',
		'path',
		'gallary_type',
		'gallary_order'
	];
}
