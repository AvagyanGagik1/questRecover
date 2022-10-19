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
 * App\Models\TestimonialsHistory
 *
 * @property int $id
 * @property string $video_link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TestimonialsHistory newModelQuery()
 * @method static Builder|TestimonialsHistory newQuery()
 * @method static Builder|TestimonialsHistory query()
 * @method static Builder|TestimonialsHistory whereCreatedAt($value)
 * @method static Builder|TestimonialsHistory whereId($value)
 * @method static Builder|TestimonialsHistory whereUpdatedAt($value)
 * @method static Builder|TestimonialsHistory whereVideoLink($value)
 * @mixin Eloquent
 */
class TestimonialsHistory extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'home_videos';

    protected $fillable = ['video_link'];

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'video_link' =>UiConstants::INPUT
        ];
    }
}
