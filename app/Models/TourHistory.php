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
 * App\Models\TourHistory
 *
 * @property int $id
 * @property string $title_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TourHistory newModelQuery()
 * @method static Builder|TourHistory newQuery()
 * @method static Builder|TourHistory query()
 * @method static Builder|TourHistory whereCreatedAt($value)
 * @method static Builder|TourHistory whereId($value)
 * @method static Builder|TourHistory whereTitleName($value)
 * @method static Builder|TourHistory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TourHistory extends Model implements UiAttributes
{
    use HasFactory;
    public function getUiAttributes(): array
    {
        return [
          'title_name' => UiConstants::INPUT
        ];
    }
}
