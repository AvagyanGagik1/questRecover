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
 * App\Models\TreatmentTypeContent
 *
 * @property int $id
 * @property int $treatment_type_id
 * @property string $text
 * @property int|null $block_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TreatmentTypeContent newModelQuery()
 * @method static Builder|TreatmentTypeContent newQuery()
 * @method static Builder|TreatmentTypeContent query()
 * @method static Builder|TreatmentTypeContent whereBlockName($value)
 * @method static Builder|TreatmentTypeContent whereCreatedAt($value)
 * @method static Builder|TreatmentTypeContent whereId($value)
 * @method static Builder|TreatmentTypeContent whereText($value)
 * @method static Builder|TreatmentTypeContent whereTreatmentTypeId($value)
 * @method static Builder|TreatmentTypeContent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TreatmentTypeContent extends Model implements UiAttributes
{
    use HasFactory;
    public function getUiAttributes(): array
    {
        return [
            'treatment_type_id'=>UiConstants::SELECT,
            'text'=>UiConstants::EDITOR,
            'block_name'=>UiConstants::INPUT,
        ];
    }
}
