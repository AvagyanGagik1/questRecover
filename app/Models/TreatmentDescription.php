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
 * App\Models\TreatmentDescription
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TreatmentDescription newModelQuery()
 * @method static Builder|TreatmentDescription newQuery()
 * @method static Builder|TreatmentDescription query()
 * @method static Builder|TreatmentDescription whereCreatedAt($value)
 * @method static Builder|TreatmentDescription whereId($value)
 * @method static Builder|TreatmentDescription whereText($value)
 * @method static Builder|TreatmentDescription whereTitle($value)
 * @method static Builder|TreatmentDescription whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TreatmentDescription extends Model implements UiAttributes
{
    use HasFactory;

    public function getUiAttributes(): array
    {
        return [
            'title' => UiConstants::INPUT,
            'text' => UiConstants::EDITOR
        ];
    }
}
