<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Benefits
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $email
 * @property string $birthday
 * @property string $insurance_provider
 * @property string $member_id
 * @property string $type_of_insurance
 * @property string $insurance_phone_number
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Benefits newModelQuery()
 * @method static Builder|Benefits newQuery()
 * @method static Builder|Benefits query()
 * @method static Builder|Benefits whereBirthday($value)
 * @method static Builder|Benefits whereCreatedAt($value)
 * @method static Builder|Benefits whereEmail($value)
 * @method static Builder|Benefits whereFirstName($value)
 * @method static Builder|Benefits whereId($value)
 * @method static Builder|Benefits whereInsurancePhoneNumber($value)
 * @method static Builder|Benefits whereInsuranceProvider($value)
 * @method static Builder|Benefits whereLastName($value)
 * @method static Builder|Benefits whereMemberId($value)
 * @method static Builder|Benefits wherePhoneNumber($value)
 * @method static Builder|Benefits whereTypeOfInsurance($value)
 * @method static Builder|Benefits whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Benefits extends Model
{
    use HasFactory;

    const TABLE_NAME = 'benefits';

    protected $table = self::TABLE_NAME;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'birthday',
        'insurance_provider',
        'member_id',
        'type_of_insurance',
        'insurance_phone_number',
    ];
}
