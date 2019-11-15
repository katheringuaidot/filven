<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellsRequest extends FormRequest
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
            'ci' => 'required',
            'name' => 'required',
            'adress' => 'required',
            'phone' => 'required',
            'id_book' => 'required',
            'newquantity' => 'required',
            'iva' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'id_book.required' => 'El libro es requerido',
            'ci.required' => 'La Cedula de identidad es requerido',
            'name.required' => 'El Nombre es requerido',
            'adress.required' => 'La Direccion es requerida',
            'phone.required' => 'El Telefono es requerido',
            'newquantity.required' => 'La Cantidad es requerida',
            'iva.required' => 'El Iva es requerido',

        ];
    }
}
