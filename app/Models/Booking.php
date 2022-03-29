<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Booking
 * 
 * @property int $id
 * @property int $room_id
 * @property int $booking_user_id
 * @property Carbon $created_at
 * @property string|null $status
 *
 * @package App\Models
 */
class Booking extends Model
{
	protected $table = 'booking';
	public $timestamps = false;

	protected $casts = [
		'room_id' => 'int',
		'booking_user_id' => 'int'
	];

	protected $fillable = [
		'room_id',
		'booking_user_id',
		'status'
	];
}
