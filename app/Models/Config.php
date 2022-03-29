<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Config
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Config newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Config newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Config query()
 * @mixin \Eloquent
 * @method static \Database\Factories\ConfigFactory factory(...$parameters)
 */
class Config extends Model
{
    use HasFactory;
    protected $table = 'config';
    protected $guarded = [];
    public $timestamps = false;
}
