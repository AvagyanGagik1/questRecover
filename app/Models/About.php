<?php

namespace App\Models;

use App\Http\Helpers\UiInterface\UiAttributes;
use App\Models\Helpers\GetModel;
use App\Models\Helpers\UiConstants;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\About
 *
 * @property int $id
 * @property string $header
 * @property string $image
 * @property string $title
 * @property string $text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|About newModelQuery()
 * @method static Builder|About newQuery()
 * @method static Builder|About query()
 * @method static Builder|About whereCreatedAt($value)
 * @method static Builder|About whereHeader($value)
 * @method static Builder|About whereId($value)
 * @method static Builder|About whereImage($value)
 * @method static Builder|About whereText($value)
 * @method static Builder|About whereTitle($value)
 * @method static Builder|About whereUpdatedAt($value)
 * @mixin Eloquent
 */
class About extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'header' => UiConstants::INPUT,
            'image' => UiConstants::FILE,
            'title' => UiConstants::INPUT,
            'text' => UiConstants::EDITOR,
        ];
    }
}
