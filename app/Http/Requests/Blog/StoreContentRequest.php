<?php

namespace App\Http\Requests\Blog;

use App\Models\Helpers\UiConstants;
use Illuminate\Foundation\Http\FormRequest;

class StoreContentRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            'parent_id' => 'nullable',
            'article_id' => 'required',
        ];
    }
}
