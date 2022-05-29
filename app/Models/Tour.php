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
 * App\Models\Tour
 *
 * @property int $id
 * @property string $header
 * @property string $title
 * @property string $text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Tour newModelQuery()
 * @method static Builder|Tour newQuery()
 * @method static Builder|Tour query()
 * @method static Builder|Tour whereCreatedAt($value)
 * @method static Builder|Tour whereHeader($value)
 * @method static Builder|Tour whereId($value)
 * @method static Builder|Tour whereText($value)
 * @method static Builder|Tour whereTitle($value)
 * @method static Builder|Tour whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tour extends Model implements UiAttributes
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
