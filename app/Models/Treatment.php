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
 * App\Models\Treatment
 *
 * @property int $id
 * @property string $header
 * @property string $image
 * @property string $text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Treatment newModelQuery()
 * @method static Builder|Treatment newQuery()
 * @method static Builder|Treatment query()
 * @method static Builder|Treatment whereCreatedAt($value)
 * @method static Builder|Treatment whereHeader($value)
 * @method static Builder|Treatment whereId($value)
 * @method static Builder|Treatment whereImage($value)
 * @method static Builder|Treatment whereText($value)
 * @method static Builder|Treatment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Treatment extends Model implements UiAttributes
{
    use HasFactory;

    public function getUiAttributes(): array
    {
        return [
            'header' => UiConstants::INPUT,
            'image' => UiConstants::FILE,
            'text' => UiConstants::EDITOR
        ];
    }
}
