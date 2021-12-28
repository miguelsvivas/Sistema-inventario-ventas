<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'description' => 'nullable|string|max:250',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Este campo es requrido',
            'name.string' => 'El nombre debe ser un string',
            'name.max' => 'El nombre debe tener maximo 20 caracteres',
            'description.string' => 'El valor no es correcto',
            'description.max' => 'Maximo 250 caracteres'
        ];
    }
}
