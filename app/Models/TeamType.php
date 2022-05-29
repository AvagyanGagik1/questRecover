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
 * App\Models\TeamType
 *
 * @property int $id
 * @property string $category
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TeamType newModelQuery()
 * @method static Builder|TeamType newQuery()
 * @method static Builder|TeamType query()
 * @method static Builder|TeamType whereCategory($value)
 * @method static Builder|TeamType whereCreatedAt($value)
 * @method static Builder|TeamType whereId($value)
 * @method static Builder|TeamType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TeamType extends Model implements UiAttributes
{
    use HasFactory;

    public function getUiAttributes(): array
    {
        return [
            'category' => UiConstants::INPUT
        ];
    }
}
