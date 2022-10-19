<?php

namespace App\Models;

use App\Http\Helpers\UiInterface\UiAttributes;
use App\Models\Helpers\GetModel;
use App\Models\Helpers\UiConstants;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\TreatmentType
 *
 * @property int $id
 * @property string $name
 * @property string $header
 * @property string $image
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
 * @mixin Eloquent
 */
class TreatmentType extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'treatment_types';


    protected $fillable = ['header', 'image', 'name', 'text'];

    public function getUiAttributes(): array
    {
        return [
            'header' => UiConstants::INPUT,
            'image' => UiConstants::FILE,
            'name' => UiConstants::INPUT,
            'text' => UiConstants::EDITOR
        ];
    }

    /**
     * @return HasMany
     */
    public function treatmentContent(): HasMany
    {
        return $this->hasMany(TreatmentTypeContent::class);
    }

    /**
     * @return string
     */
    public function slug(): string
    {
        return $this->id . '-' . str_replace(' ', '-', $this->header);
    }
}
