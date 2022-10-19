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
 * App\Models\Tour
 *
 * @property int $id
 * @property string $header
 * @property string $title
 * @property string $image
 * @property string $text
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Tour newModelQuery()
 * @method static Builder|Tour newQuery()
 * @method static Builder|Tour query()
 * @method static Builder|Tour whereCreatedAt($value)
 * @method static Builder|Tour whereHeader($value)
 * @method static Builder|Tour whereId($value)
 * @method static Builder|Tour whereText($value)
 * @method static Builder|Tour whereTitle($value)
 * @method static Builder|Tour whereUpdatedAt($value)
 * @mixin  Eloquent
 */
class Tour extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'tours';


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
            'text' => UiConstants::EDITOR
        ];
    }
}
