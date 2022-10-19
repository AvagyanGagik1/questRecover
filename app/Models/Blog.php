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
 * App\Models\Blog
 *
 * @property int $id
 * @property string $header
 * @property string $image
 * @property string $title
 * @property string $text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Blog newModelQuery()
 * @method static Builder|Blog newQuery()
 * @method static Builder|Blog query()
 * @method static Builder|Blog whereCreatedAt($value)
 * @method static Builder|Blog whereHeader($value)
 * @method static Builder|Blog whereId($value)
 * @method static Builder|Blog whereText($value)
 * @method static Builder|Blog whereTitle($value)
 * @method static Builder|Blog whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Blog extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'blogs';


    protected $fillable = ['header', 'image', 'title', 'text'];

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'header'=>UiConstants::INPUT,
            'image' => UiConstants::FILE,
            'title'=>UiConstants::INPUT,
            'text'=>UiConstants::EDITOR,
        ];
    }
}
