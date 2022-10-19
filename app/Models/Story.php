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
 * @property string $author
 * @property string $short_description
 * @property string $text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Home newModelQuery()
 * @method static Builder|Home newQuery()
 * @method static Builder|Home query()
 * @method static Builder|Home whereCreatedAt($value)
 * @method static Builder|Home whereHeader($value)
 * @method static Builder|Home whereId($value)
 * @method static Builder|Home whereImage($value)
 * @method static Builder|Home whereText($value)
 * @method static Builder|Home whereTitle($value)
 * @method static Builder|Home whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Story extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'stories';


    protected $fillable = ['text', 'author', 'short_description'];

    public function getUiAttributes(): array
    {
        return [
            'text' => UiConstants::EDITOR,
            'author' => UiConstants::INPUT,
            'short_description' => UiConstants::INPUT,
        ];
    }
}
