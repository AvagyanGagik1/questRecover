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
 * App\Models\Contact
 *
 * @property int $id
 * @property string $phone
 * @property string $address
 * @property string $email
 * @property string $image
 * @property string $header
 * @property string $text
 * @property string|null $location
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Contact newModelQuery()
 * @method static Builder|Contact newQuery()
 * @method static Builder|Contact query()
 * @method static Builder|Contact whereAddress($value)
 * @method static Builder|Contact whereCreatedAt($value)
 * @method static Builder|Contact whereEmail($value)
 * @method static Builder|Contact whereId($value)
 * @method static Builder|Contact whereLocation($value)
 * @method static Builder|Contact wherePhone($value)
 * @method static Builder|Contact whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Contact extends Model implements UiAttributes
{
    use HasFactory, GetModel;

    const TABLE_NAME = 'contacts';


    protected $fillable = ['phone', 'address', 'email', 'header', 'location', 'text', 'image'];


    /**
     * @return array
     */
    public function getUiAttributes(): array
    {
        return [
            'phone' => UiConstants::INPUT,
            'address' => UiConstants::INPUT,
            'email' => UiConstants::INPUT,
            'header' => UiConstants::INPUT,
            'location' => UiConstants::INPUT,
            'text' => UiConstants::INPUT,
            'image' => UiConstants::FILE,
        ];
    }
}
