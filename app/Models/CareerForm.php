<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\CareerForm
 *
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string $phone_number
 * @property string $located_in
 * @property int $desired_position_id
 * @property string $resume
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|CareerForm newModelQuery()
 * @method static Builder|CareerForm newQuery()
 * @method static Builder|CareerForm query()
 * @method static Builder|CareerForm whereCreatedAt($value)
 * @method static Builder|CareerForm whereDesiredPositionId($value)
 * @method static Builder|CareerForm whereEmail($value)
 * @method static Builder|CareerForm whereFullName($value)
 * @method static Builder|CareerForm whereId($value)
 * @method static Builder|CareerForm whereLocatedIn($value)
 * @method static Builder|CareerForm wherePhoneNumber($value)
 * @method static Builder|CareerForm whereResume($value)
 * @method static Builder|CareerForm whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CareerForm extends Model
{
    use HasFactory;

    protected $table = 'career_form';
}
