<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditionsRequestUpdate extends FormRequest
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
            'name' => 'required',
            'year' => 'required',
            'id_author' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El Nombre es requerido',
            'year.required' => 'El Año es requerido',
            'id_author.required' => 'El Autor es requerido'
        ];
    }
}
