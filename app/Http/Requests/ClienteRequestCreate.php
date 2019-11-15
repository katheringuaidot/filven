<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'name' =>'required|min:2',
            'ci' => 'required|min:7',
            'adress' =>'required|min:5',
            'phone' => 'required|min:11'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El Nombre es requerido',
            'ci.required' => 'La cedula es requerido',
            'adress.required' => 'La cedula es requerido',
            'phone.required' => 'La cedula es requerido'
        ];
    }
}
