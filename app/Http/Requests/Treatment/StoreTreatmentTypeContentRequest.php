<?php

namespace App\Http\Requests\Treatment;

use Illuminate\Foundation\Http\FormRequest;

class StoreTreatmentTypeContentRequest extends FormRequest
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
            'treatment_type_id'=>'required',
            'text'=>'required',
            'block_name'=>'required'
        ];
    }
}
