<?php

namespace App\Models;

use App\Http\Helpers\UiInterface\UiAttributes;
use App\Models\Helpers\GetModel;
use App\Models\Helpers\UiConstants;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Position
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Position newModelQuery()
 * @method static Builder|Position newQuery()
 * @method static Builder|Position query()
 * @method static Builder|Position whereCreatedAt($value)
 * @method static Builder|Position whereId($value)
 * @method static Builder|Position whereName($value)
 * @method static Builder|Position whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Position extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'positions';


    protected $fillable = ['name'];

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'name'=>UiConstants::INPUT,
        ];
    }

    /**
     * @return HasMany
     */
    public function team(): HasMany
    {
        return $this->hasMany(Team::class);
    }
}
