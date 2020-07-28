<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class IndexUserRequest extends FormRequest
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
            'filter.email' => 'bail|nullable|email|max:80',
        ];
    }
    public function messages()
    {
        return [
            'filter.name.min' => 'El nombre es muy corto',
            'filter.name.max'=> 'El nombre ingresado es muy largo',
            'filter.email.email' => 'El correo ingresado no es valido',
            'filter.email.max'=> 'El email ingresado es muy largo',
        ];
    }
}
