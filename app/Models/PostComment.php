<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostComment
 * 
 * @property int $id
 * @property int|null $created_by
 * @property string|null $content
 * @property int|null $post_id
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class PostComment extends Model
{
	protected $table = 'post_comment';
	public $timestamps = false;

	protected $casts = [
		'created_by' => 'int',
		'post_id' => 'int'
	];

	protected $fillable = [
		'created_by',
		'content',
		'post_id'
	];
}
