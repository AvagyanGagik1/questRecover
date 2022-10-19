<?php

namespace App\Http\Requests\Home;

use App\Http\Requests\Helpers\YoutubeUrl;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateHomeVideoRequest extends FormRequest
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
            'header' => 'required',
            'video_link' => ['required',new YoutubeUrl],
            'title' => 'required',
            'text' => 'required',
        ];
    }
}
