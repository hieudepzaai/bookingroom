<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class History
 * 
 * @property int $id
 * @property string|null $type
 * @property int|null $booking_id
 * @property string|null $status
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property string|null $note
 *
 * @package App\Models
 */
class History extends Model
{
	protected $table = 'history';
	public $timestamps = false;

	protected $casts = [
		'booking_id' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'type',
		'booking_id',
		'status',
		'created_by',
		'note'
	];
}
