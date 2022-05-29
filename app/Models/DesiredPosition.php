<?php

namespace App\Models;

use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UiInterface\UiAttributes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\DesiredPosition
 *
 * @property int $id
 * @property string $position
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|DesiredPosition newModelQuery()
 * @method static Builder|DesiredPosition newQuery()
 * @method static Builder|DesiredPosition query()
 * @method static Builder|DesiredPosition whereCreatedAt($value)
 * @method static Builder|DesiredPosition whereId($value)
 * @method static Builder|DesiredPosition wherePosition($value)
 * @method static Builder|DesiredPosition whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DesiredPosition extends Model implements UiAttributes
{
    use HasFactory;

    protected $table = 'desired_position';
    public function getUiAttributes(): array
    {
        // TODO: Implement getUiAttributes() method.
    }
}
