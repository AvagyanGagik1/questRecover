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
 * @property string $header
 * @property string $image
 * @property string $title
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
class Home extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'homes';


    protected $fillable = ['header', 'image', 'title', 'text'];

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'header' => UiConstants::INPUT,
            'image' => UiConstants::FILE,
            'title' => UiConstants::INPUT,
            'text' => UiConstants::EDITOR,
        ];
    }
}
