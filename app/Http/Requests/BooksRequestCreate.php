<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksRequestCreate extends FormRequest
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
            'id_author' => 'required',
            'quantity' => 'required',
            //'edition_id' => 'required',
            'precie' => 'required',
            'year' => 'required',            
        ];
    }

    public function messages()
    {
        return [
            'cod.required' => 'El Codigo es requerido y no debe estar duplicado',
            'cod.required.unique' => 'El Codigo es requerido',
            'name.required' => 'El Nombre es requerido',
            'id_author.required' => 'El Autor es requerido',
            'quantity.required' => 'La Cantidad es requerida',
            //'edition_id.required' => 'La Editorial es requerida',
            'precie.required' => 'El Precio es Requerido',
            'year.required' => 'La Edicion es requerido',
        ];
    }
}