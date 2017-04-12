<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Librosform extends FormRequest
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
            "author"        =>      "required|between:5,60",
            "name"          =>      "required|between:5,60",
            "description"   =>      "required|between:5,255",
            "price"         =>      "required|between:1,901"
        ];
    }

    public function messages()
    {
        return [
            'author.between' => 'El :attribute debe ser entre :min - :max.',
            'author.required' => 'El :attribute es requerido!',
            'name.between' => 'El :attribute debe ser entre :min - :max.',
            'name.required' => 'El :attribute es requerido!',
            'description.between' => 'The :attribute debe ser entre :min - :max.',
            'description.required' => 'The :attribute es requerido!',
            'price.between' => 'The :attribute debe ser entre :min - :max.',
            'price.required' => 'The :attribute es requerido!',
        ];
    }
}
