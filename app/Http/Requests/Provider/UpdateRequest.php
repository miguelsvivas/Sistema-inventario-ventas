<?php

namespace App\Http\Requests\Provider;

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
            'name' => 'required|string|max:20',
            'email' => 'required|string|max:50',
            'address' => 'nullable|string|max:250',
            'phone' =>' required|string|max:15',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Este campo es requrido',
            'name.string' => 'El nombre debe ser un string',
            'name.max' => 'El nombre debe tener maximo 20 caracteres',
            'email.required' => 'Este campo es requerido',
            'email.max' => 'Maximo 50 caracteres',
            'phone.required' => 'El telefono es requerido'
        ];
    }
}
