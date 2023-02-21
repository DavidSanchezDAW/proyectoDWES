<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'password' => 'required|min:8',
            'birthday' => 'required|date|before:today',
        ];  
    }
    public function messages(){
        return [
            'name.required' => "El nombre es obligatorio",
            'password.required' => "La contraseña es obligatoria",
            'password.min' => "La contraseña debe tener al menos 8 caracteres",
            'birthday.required' => "La fecha de nacimiento es obligatoria",
            'birthday.date' => "La fecha de nacimiento no es valida",
            'birthday.before' => "Fecha de nacimiento no valida",
        ];
    }
}
