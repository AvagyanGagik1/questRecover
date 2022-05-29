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
 * App\Models\Testimonials
 *
 * @property int $id
 * @property string $header
 * @property string $image
 * @property string $text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Testimonials newModelQuery()
 * @method static Builder|Testimonials newQuery()
 * @method static Builder|Testimonials query()
 * @method static Builder|Testimonials whereCreatedAt($value)
 * @method static Builder|Testimonials whereHeader($value)
 * @method static Builder|Testimonials whereId($value)
 * @method static Builder|Testimonials whereImage($value)
 * @method static Builder|Testimonials whereText($value)
 * @method static Builder|Testimonials whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Testimonials extends Model implements UiAttributes
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
