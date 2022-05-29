<?php

namespace App\Models;

use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UiInterface\UiAttributes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\PrivacyPolicy
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|PrivacyPolicy newModelQuery()
 * @method static Builder|PrivacyPolicy newQuery()
 * @method static Builder|PrivacyPolicy query()
 * @method static Builder|PrivacyPolicy whereCreatedAt($value)
 * @method static Builder|PrivacyPolicy whereId($value)
 * @method static Builder|PrivacyPolicy whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PrivacyPolicy extends Model implements UiAttributes
{
    use HasFactory;
    public function getUiAttributes(): array
    {
        // TODO: Implement getUiAttributes() method.
    }
}
