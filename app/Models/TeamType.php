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
 * App\Models\TeamType
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TeamType newModelQuery()
 * @method static Builder|TeamType newQuery()
 * @method static Builder|TeamType query()
 * @method static Builder|TeamType whereCategory($value)
 * @method static Builder|TeamType whereCreatedAt($value)
 * @method static Builder|TeamType whereId($value)
 * @method static Builder|TeamType whereUpdatedAt($value)
 * @mixin Eloquent
 */
class TeamType extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'team_types';


    protected $fillable = ['name'];

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'name' => UiConstants::INPUT
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
