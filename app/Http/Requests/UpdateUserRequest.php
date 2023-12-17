<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [    
            'name' => 'required|min:3',
            'email' => 'required|email|min:8',
            'password' => 'required|confirmed|min:6'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nazwa jest wymagana',
            'name.min' => 'Nazwa musi zawierać min 3 znaki',
            'email.required' => 'Email jest wymagany',
            'email.min' => 'Email musi zawierać min 8 znaków',
            'password.required' => 'Hasło jest wymagane',
            'password.min' => 'Hasło musi zawierać min 6 znaków',
            'password.confirmed' => 'Hasła nie są takie same',
        ];
    }
}
