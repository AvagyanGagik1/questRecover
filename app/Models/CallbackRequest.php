<?php

namespace App\Models;

use App\Http\Helpers\UI\Form\CreateUi;
use App\Http\Helpers\UiInterface\UiAttributes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\CallbackRequest
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|CallbackRequest newModelQuery()
 * @method static Builder|CallbackRequest newQuery()
 * @method static Builder|CallbackRequest query()
 * @method static Builder|CallbackRequest whereCreatedAt($value)
 * @method static Builder|CallbackRequest whereId($value)
 * @method static Builder|CallbackRequest whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CallbackRequest extends Model implements UiAttributes
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'comment'];

    public function getUiAttributes(): array
    {
        // TODO: Implement getUiAttributes() method.
    }
}
