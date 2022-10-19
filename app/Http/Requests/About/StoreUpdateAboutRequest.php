<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAboutRequest extends FormRequest
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
            'header'=>'required',
            'image'=>'image',
            'title'=>'required',
            'text'=>'required',
        ];
    }
}
