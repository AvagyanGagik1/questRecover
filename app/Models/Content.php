<?php

namespace App\Models;

use App\Http\Helpers\UiInterface\UiAttributes;
use App\Models\Helpers\GetModel;
use App\Models\Helpers\UiConstants;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Content
 *
 * @property int $id
 * @property string $content
 * @property string $title
 * @property int $parent_id
 * @property int $article_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Content newModelQuery()
 * @method static Builder|Content newQuery()
 * @method static Builder|Content query()
 * @method static Builder|Content whereArticleId($value)
 * @method static Builder|Content whereContent($value)
 * @method static Builder|Content whereCreatedAt($value)
 * @method static Builder|Content whereId($value)
 * @method static Builder|Content whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Content extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'contents';


    protected $fillable = ['title', 'content', 'parent_id', 'article_id'];


    public function getUiAttributes(): array
    {
        return [
            'title' => UiConstants::INPUT,
            'content' => UiConstants::EDITOR,
            'parent_id' => UiConstants::SELECT,
            'article_id' => UiConstants::SELECT,
        ];
    }

    /**
     * @return BelongsTo
     */
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
