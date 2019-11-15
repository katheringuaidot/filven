<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksRequestUpdate extends FormRequest
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
            'cod' => 'required',
            'name' => 'required',
            'year' => 'required',
            'quantity' => 'required',
            'precie' => 'required',
            'id_author' => 'required',
            'id_edition' => 'required',
        ];
    }
    public function messages()
    {
        return 
        [
            'cod.required' => 'El ISBN es requerido',
            'name.required' => 'El Nombre es requerido',
            'year.required' => 'El Año es requerido',
            'quantity.required' => 'La Cantidad es requerida',
            'precie.required' => 'El Precio es requerido',
            'id_author.required' => 'El Autor es requerido',
            'id_edition.required' => 'La Edicion es Requerida',
        ];
    }
}


