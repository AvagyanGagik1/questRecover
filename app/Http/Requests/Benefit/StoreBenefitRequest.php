<?php

namespace App\Http\Requests\Benefit;

use Illuminate\Foundation\Http\FormRequest;

class StoreBenefitRequest extends FormRequest
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
    public function rules()
    {
        return [
            'first_name'=>'required',
            'last_name'=>'required',
            'phone_number'=>'required',
            'email'=>'required|email',
            'birthday'=>'required',
            'insurance_provider'=>'required',
            'member_id'=>'required',
            'type_of_insurance'=>'nullable',
            'insurance_phone_number'=>'nullable',
        ];
    }
}
