<?php

namespace App\Models;

use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UiInterface\UiAttributes;
use App\Models\Helpers\UiConstants;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Team
 *
 * @property int $id
 * @property int $category_id
 * @property int $position_id
 * @property string $name
 * @property string $avatar
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
 * @mixin \Eloquent
 */
class Team extends Model implements UiAttributes
{
    use HasFactory;
    public function getUiAttributes(): array
    {
        return [
            'category_id'=>UiConstants::SELECT,
            'position_id'=>UiConstants::SELECT,
            'name'=>UiConstants::INPUT,
            'avatar'=>UiConstants::FILE,
        ];
    }
}
