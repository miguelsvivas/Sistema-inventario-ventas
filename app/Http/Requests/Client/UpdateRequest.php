<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'string|required|max:255',
            'identificacion'=>'string|required|unique:clients,identificacion,'.$this->route('client')->id.'|min:8|max:11',
            'address'=>'nullable|string|max:255',
            'phone'=>'string|min:7|max:12',
            'email'=>'string|max:255|email:rfc,dns',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 255 caracteres.',

            'identificacion.string'=>'El valor no es correcto.',
            'identificacion.required'=>'Este campo es requerido.',
            'identificacion.unique'=>'Esta identificacion ya se encuentra registrado.',
            'identificacion.min'=>'Se requiere de 8 caracteres.',
            'identificacion.max'=>'Solo se permite 11 caracteres.',

            'address.string'=>'El valor no es correcto.',
            'address.max'=>'Solo se permite 255 caracteres.',
            
            'phone.string'=>'El valor no es correcto.',
            'phone.min'=>'Se requiere de 9 caracteres.',
            'phone.max'=>'Solo se permite 9 caracteres.',

            'email.string'=>'El valor no es correcto.',

            'email.max'=>'Solo se permite 255 caracteres.',
            'email.email'=>'No es un correo electrónico.',
        ];
    }
}
