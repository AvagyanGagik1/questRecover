<?php

namespace App\Http\Requests\Team;

use App\Models\Helpers\UiConstants;
use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'team_type_id'=>'required',
            'position_id'=>'required',
            'name'=>'required',
            'image'=>'required|image',
        ];
    }
}
