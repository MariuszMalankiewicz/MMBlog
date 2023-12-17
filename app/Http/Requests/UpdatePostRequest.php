<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title'  => 'required|min:2',
            'body'  => 'required|min:10',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tytuł jest wymagany',
            'body.required' => 'Treść jest wymagana',
            'title.min' => 'Tytuł musi zawierać co najmniej 2 znaki',
            'body.min' => 'Treść musi zawierać co najmniej 10 znaków'
        ];
    }
}
