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
 * App\Models\Partners
 *
 * @property int $id
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Partners newModelQuery()
 * @method static Builder|Partners newQuery()
 * @method static Builder|Partners query()
 * @method static Builder|Partners whereCreatedAt($value)
 * @method static Builder|Partners whereId($value)
 * @method static Builder|Partners whereImage($value)
 * @method static Builder|Partners whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Partners extends Model implements UiAttributes
{
    use HasFactory;
    public function getUiAttributes(): array
    {
        return [
          'image'=>UiConstants::FILE
        ];
    }
}
