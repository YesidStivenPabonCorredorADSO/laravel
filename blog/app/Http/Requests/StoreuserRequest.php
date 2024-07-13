<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreuserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    

    public function rules(): array
    {
        // add($this->all())
        return [    
            'name'=>"required",
            'email'=>'requered'
            'email'=>"required|email|confirmed",
            'password'=>'requeried'
            'password'=>"required|password|confirmed",
        ];
    }
    public function messages(): array
    {
    return [
        'name.required' => 'El nombre es requerido',
        'email.required' => 'El correo es requerido',
        'password.required' => 'La contraseña es requerido',
    ];
    }
    public function attributes(): array
    {
    return [
        'name' => 'nombre',
        'email'=>'correo',
        'password'=>'contraseña',
    ];
    }
}
