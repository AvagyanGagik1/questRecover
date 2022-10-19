<?php

namespace App\Models;

use App\Http\Helpers\UiInterface\UiAttributes;
use App\Models\Helpers\UiConstants;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\AboutDescription
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|AboutDescription newModelQuery()
 * @method static Builder|AboutDescription newQuery()
 * @method static Builder|AboutDescription query()
 * @method static Builder|AboutDescription whereCreatedAt($value)
 * @method static Builder|AboutDescription whereDescription($value)
 * @method static Builder|AboutDescription whereIcon($value)
 * @method static Builder|AboutDescription whereId($value)
 * @method static Builder|AboutDescription whereTeamBlockDescription($value)
 * @method static Builder|AboutDescription whereTitle($value)
 * @method static Builder|AboutDescription whereUpdatedAt($value)
 * @mixin Eloquent
 */
class AboutDescription extends Model implements UiAttributes
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'image',
        'title',
        'description',
    ];

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'image'=>UiConstants::FILE,
            'title'=>UiConstants::INPUT,
            'description'=>UiConstants::EDITOR,
        ];
    }
}
