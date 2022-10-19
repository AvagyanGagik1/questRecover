<?php

namespace App\Models;

use App\Http\Helpers\UiInterface\UiAttributes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\UserAccess
 *
 * @property int $id
 * @property int $user_id
 * @property int $is_access
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|UserAccess newModelQuery()
 * @method static Builder|UserAccess newQuery()
 * @method static Builder|UserAccess query()
 * @method static Builder|UserAccess whereCreatedAt($value)
 * @method static Builder|UserAccess whereId($value)
 * @method static Builder|UserAccess whereIsAccess($value)
 * @method static Builder|UserAccess whereUpdatedAt($value)
 * @method static Builder|UserAccess whereUserId($value)
 * @mixin \Eloquent
 */
class UserAccess extends Model
{
    use HasFactory;

    protected $table = 'user_accesses';

    protected $fillable = [ 'route_name', 'name', 'is_access'];
}
