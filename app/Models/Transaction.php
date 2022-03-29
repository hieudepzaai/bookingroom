<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 * 
 * @property int $id
 * @property float $amount
 * @property string $transaction_type
 * @property float|null $balance_before_transaction
 * @property float|null $balance_after_success_transaction
 * @property int $created_by
 * @property string $comment
 * @property Carbon $created_at
 * @property string $status
 * @property string $payment_method
 *
 * @package App\Models
 */
class Transaction extends Model
{
	protected $table = 'transaction';
	public $timestamps = false;

	protected $casts = [
		'amount' => 'float',
		'balance_before_transaction' => 'float',
		'balance_after_success_transaction' => 'float',
		'created_by' => 'int'
	];

	protected $fillable = [
		'amount',
		'transaction_type',
		'balance_before_transaction',
		'balance_after_success_transaction',
		'created_by',
		'comment',
		'status',
		'payment_method'
	];
}
