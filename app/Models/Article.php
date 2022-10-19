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
 * App\Models\Article
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Article newModelQuery()
 * @method static Builder|Article newQuery()
 * @method static Builder|Article query()
 * @method static Builder|Article whereCreatedAt($value)
 * @method static Builder|Article whereId($value)
 * @method static Builder|Article whereImage($value)
 * @method static Builder|Article whereText($value)
 * @method static Builder|Article whereTitle($value)
 * @method static Builder|Article whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Article extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'articles';


    protected $fillable = ['image', 'title', 'header'];


    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'image'=>UiConstants::FILE,
            'title'=>UiConstants::INPUT,
            'header'=>UiConstants::INPUT,
        ];
    }

    /**
     * @return string
     */
    public function slug(): string
    {
        return $this->id . '-' . str_replace(' ', '-', $this->title);
    }

    /**
     * @return HasMany
     */
    public function contents(): HasMany
    {
        return $this->hasMany(Content::class,'article_id','id');
    }
}
