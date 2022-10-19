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
 * App\Models\HomeDescription
 *
 * @property int $id
 * @property string $video_link
 * @property string $title
 * @property string $text
 * @property string $header
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|HomeDescription newModelQuery()
 * @method static Builder|HomeDescription newQuery()
 * @method static Builder|HomeDescription query()
 * @method static Builder|HomeDescription whereCreatedAt($value)
 * @method static Builder|HomeDescription whereId($value)
 * @method static Builder|HomeDescription whereUpdatedAt($value)
 * @mixin Eloquent
 */
class HomeVideo extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'home_videos';

    protected $fillable = ['header', 'video_link', 'title', 'text'];

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'header' => UiConstants::INPUT,
            'video_link' => UiConstants::INPUT,
            'title' => UiConstants::INPUT,
            'text' => UiConstants::EDITOR,
        ];
    }
}
