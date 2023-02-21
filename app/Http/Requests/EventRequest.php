<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'name' => 'required|max:15',
            'location' => 'required',
            'description' => 'required',
            'date' => 'required|date|before:275760/03/23',
            'time' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.max' => 'El nombre no puede tener más de 15 caracteres',
            'location.required' => 'La localidad es obligatoria',
            'description.required' => 'La descripción es obligatoria',
            'date.required' => 'La fecha es obligatoria',
            'date.date' => 'La fecha no es válida',
            'date.before' => 'La fecha no es válida',
            'time.required' => 'La hora es obligatoria',
        ];
    }
}
