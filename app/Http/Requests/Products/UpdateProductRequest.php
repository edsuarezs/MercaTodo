<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'code' => ['required','numeric', Rule::unique('products', 'code')->ignore($this->route('code'))],
            'name' => ['required', 'string', 'min:2', 'max:80'],
            'price' => ['required', 'numeric'],
            'description' => ['required', 'string', 'min:2'],
            'url_image' => ['required', 'string' ],
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'the code is required',
            'code.numeric' => 'the code is incorrect',
            'code.size' => 'the code size is incorrect',
            'name.required'=> 'the name is required',
            'name.min'=> 'the name is too short',
            'name.max'=> 'the name is too large',
            'price.required' => 'the price is required',
            'price.numeric' => 'the price is not valid',
            'description.required'=> 'the description is required',
            'description.min'=> 'the description is too short',
            'url_image.required'=> 'the image is required',

        ];
    }
}
