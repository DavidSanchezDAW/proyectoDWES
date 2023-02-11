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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            
        ];
    }
    public function messages(){
        return [
            'name.required' => "El nombre es obligatorio",
            'email.required' => "El email es obligatorio",
            'email.email' => "El email no es valido",
            'email.unique' => "El email ya esta registrado",
            'password.required' => "La contraseña es obligatoria",
            'password.min' => "La contraseña debe tener al menos 8 caracteres",
            'password_confirmation.required' => "La confirmación de la contraseña es obligatoria",
            'password_confirmation.same' => "Las contraseñas no coinciden",
        ];
    }
}
