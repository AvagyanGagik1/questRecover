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
 * App\Models\TreatmentType
 *
 * @property int $id
 * @property string $name
 * @property string $header
 * @property string $image
 * @property string $image_parallax
 * @property string $text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TreatmentType newModelQuery()
 * @method static Builder|TreatmentType newQuery()
 * @method static Builder|TreatmentType query()
 * @method static Builder|TreatmentType whereCreatedAt($value)
 * @method static Builder|TreatmentType whereHeader($value)
 * @method static Builder|TreatmentType whereId($value)
 * @method static Builder|TreatmentType whereImage($value)
 * @method static Builder|TreatmentType whereImageParallax($value)
 * @method static Builder|TreatmentType whereName($value)
 * @method static Builder|TreatmentType whereText($value)
 * @method static Builder|TreatmentType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TreatmentType extends Model implements UiAttributes
{
    use HasFactory;
    public function getUiAttributes(): array
    {
        return [
            'header' => UiConstants::INPUT,
            'image' => UiConstants::FILE,
            'image_parallax' => UiConstants::FILE,
            'name' => UiConstants::INPUT,
            'text' => UiConstants::EDITOR
        ];
    }
}
