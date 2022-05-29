<?php

namespace App\Models;

use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UiInterface\UiAttributes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\HomeDescription
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|HomeDescription newModelQuery()
 * @method static Builder|HomeDescription newQuery()
 * @method static Builder|HomeDescription query()
 * @method static Builder|HomeDescription whereCreatedAt($value)
 * @method static Builder|HomeDescription whereId($value)
 * @method static Builder|HomeDescription whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HomeDescription extends Model implements UiAttributes
{
    use HasFactory;
    public function getUiAttributes(): array
    {
        // TODO: Implement getUiAttributes() method.
    }
}
