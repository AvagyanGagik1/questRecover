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
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\TourHistory
 *
 * @property int $id
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TourHistory newModelQuery()
 * @method static Builder|TourHistory newQuery()
 * @method static Builder|TourHistory query()
 * @method static Builder|TourHistory whereCreatedAt($value)
 * @method static Builder|TourHistory whereId($value)
 * @method static Builder|TourHistory whereTitleName($value)
 * @method static Builder|TourHistory whereUpdatedAt($value)
 * @mixin Eloquent
 */
class TourHistory extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'tour_histories';


    protected $fillable = ['title'];

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'title' => UiConstants::INPUT,
            'images' => UiConstants::FILE
        ];
    }

    /**
     * @return MorphMany
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Pictures::class,'pictureable');
    }
}
