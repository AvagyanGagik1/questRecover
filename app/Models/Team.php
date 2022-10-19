<?php

namespace App\Models;

use App\Http\Helpers\UiInterface\UiAttributes;
use App\Models\Helpers\GetModel;
use App\Models\Helpers\UiConstants;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Team
 *
 * @property int $id
 * @property int $team_type_id
 * @property int $position_id
 * @property string $name
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Team newModelQuery()
 * @method static Builder|Team newQuery()
 * @method static Builder|Team query()
 * @method static Builder|Team whereAvatar($value)
 * @method static Builder|Team whereCategoryId($value)
 * @method static Builder|Team whereCreatedAt($value)
 * @method static Builder|Team whereId($value)
 * @method static Builder|Team whereName($value)
 * @method static Builder|Team wherePositionId($value)
 * @method static Builder|Team whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Team extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'teams';


    protected $fillable = ['team_type_id', 'position_id', 'name', 'image'];

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'team_type_id' => UiConstants::SELECT,
            'position_id' => UiConstants::SELECT,
            'name' => UiConstants::INPUT,
            'image' => UiConstants::FILE,
        ];
    }

    /**
     * @return BelongsTo
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    /**
     * @return BelongsTo
     */
    public function TeamType(): BelongsTo
    {
        return $this->belongsTo(TeamType::class);
    }
}
