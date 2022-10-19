<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Pictures
 *
 * @property int $id
 * @property string $image
 * @property int $pictureable_id
 * @property string $pictureable_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Pictures newModelQuery()
 * @method static Builder|Pictures newQuery()
 * @method static Builder|Pictures query()
 * @method static Builder|Pictures whereCreatedAt($value)
 * @method static Builder|Pictures whereId($value)
 * @method static Builder|Pictures whereImage($value)
 * @method static Builder|Pictures wherePicturableId($value)
 * @method static Builder|Pictures wherePicturableType($value)
 * @method static Builder|Pictures whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Pictures extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'pictureable_id', 'pictureable_type'];

    /**
     * @return MorphTo
     */
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}
