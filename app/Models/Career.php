<?php

namespace App\Models;

use App\Http\Helpers\UiInterface\UiAttributes;
use App\Models\Helpers\UiConstants;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Career
 *
 * @property int $id
 * @property string $header
 * @property string $title
 * @property string $text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Career newModelQuery()
 * @method static Builder|Career newQuery()
 * @method static Builder|Career query()
 * @method static Builder|Career whereCreatedAt($value)
 * @method static Builder|Career whereHeader($value)
 * @method static Builder|Career whereId($value)
 * @method static Builder|Career whereText($value)
 * @method static Builder|Career whereTitle($value)
 * @method static Builder|Career whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Career extends Model implements UiAttributes
{
    use HasFactory;

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'header'=>UiConstants::INPUT,
            'title'=>UiConstants::INPUT,
            'text'=>UiConstants::EDITOR,
        ];
    }
}
