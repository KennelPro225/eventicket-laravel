<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "email" => "required|email",
            "password" => "required|min:6",
        ];
    }

    public function messages(): array
    {
        return [
            "email.required" => "le champ Email est requis",
            "email.email" => "Ceci n'est pas un email",
            "password.required" => "Le champ Mot de passe est requis",
            "password.min" => "Le mot de passe saisi ne contient pas au-moins 6 caractères",
        ];
    }
}
