<?php

namespace App\Models;

use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UiInterface\UiAttributes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Slider
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Slider newModelQuery()
 * @method static Builder|Slider newQuery()
 * @method static Builder|Slider query()
 * @method static Builder|Slider whereCreatedAt($value)
 * @method static Builder|Slider whereId($value)
 * @method static Builder|Slider whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Slider extends Model implements UiAttributes
{
    use HasFactory;
    public function getUiAttributes(): array
    {
        // TODO: Implement getUiAttributes() method.
    }
}
