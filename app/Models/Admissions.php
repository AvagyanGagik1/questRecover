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
 * App\Models\Admissions
 *
 * @property int $id
 * @property string $header
 * @property string $image
 * @property string $title
 * @property string $text
 * @property string $form_title
 * @property string $confidential_description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Admissions newModelQuery()
 * @method static Builder|Admissions newQuery()
 * @method static Builder|Admissions query()
 * @method static Builder|Admissions whereConfidentialDescription($value)
 * @method static Builder|Admissions whereCreatedAt($value)
 * @method static Builder|Admissions whereFormTitle($value)
 * @method static Builder|Admissions whereHeader($value)
 * @method static Builder|Admissions whereId($value)
 * @method static Builder|Admissions whereImage($value)
 * @method static Builder|Admissions whereText($value)
 * @method static Builder|Admissions whereTitle($value)
 * @method static Builder|Admissions whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Admissions extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'admissions';


    protected $fillable = ['header', 'image', 'title', 'text','form_title','confidential_description'];

    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'header'=>UiConstants::INPUT,
            'image'=>UiConstants::FILE,
            'title'=>UiConstants::INPUT,
            'text'=>UiConstants::EDITOR,
            'form_title'=>UiConstants::INPUT,
            'confidential_description'=>UiConstants::INPUT,
        ];
    }
}
