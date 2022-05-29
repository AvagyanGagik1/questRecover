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
 * App\Models\Content
 *
 * @property int $id
 * @property string $content
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
 * @mixin \Eloquent
 */
class Content extends Model implements UiAttributes
{
    use HasFactory;

    public function getUiAttributes(): array
    {
        return [
            'content' => UiConstants::EDITOR,
            'article_id' => UiConstants::SELECT
        ];
    }
}
