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
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereCategoryImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereDesciption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereName($value)
 * @mixin \Eloquent
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
