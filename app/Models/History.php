<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\History
 *
 * @method static \Illuminate\Database\Eloquent\Builder|History newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|History newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|History query()
 * @mixin \Eloquent
 * @property int $id
 * @property string|null $type
 * @property int|null $booking_id
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property int|null $created_by
 * @property string|null $note
 * @method static \Illuminate\Database\Eloquent\Builder|History whereBookingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereType($value)
 */
class History extends Model
{
    use HasFactory;
    protected $table = "history";

}
