<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class File
 * 
 * @property int $id
 * @property int|null $file_name
 * @property string|null $file_type
 * @property string|null $file_ext
 * @property string|null $path
 * @property string|null $source
 * @property Carbon|null $created_at
 * @property int|null $created_by
 *
 * @package App\Models
 */
class File extends Model
{
	protected $table = 'file';
	public $timestamps = false;

	protected $casts = [
		'file_name' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'file_name',
		'file_type',
		'file_ext',
		'path',
		'source',
		'created_by'
	];
}
