<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class IndexProductRequest extends FormRequest
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
            'filter' => 'filled|array',
            'filter.name' => 'bail|nullable|min:3|max:90',
            'filter.category' => 'bail|nullable|string|max:80',
        ];
    }
}
