<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostCategory
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $desciption
 * @property string|null $category_img
 *
 * @package App\Models
 */
class PostCategory extends Model
{
	protected $table = 'post_category';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'desciption',
		'category_img'
	];
}
