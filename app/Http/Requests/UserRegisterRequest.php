<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            "user_nom" => "required|min:2|string",
            "user_prenom" => "required|min:2|string",
            "email" => "required|email|unique:users",
            "password" => "required|min:6",
        ];
    }

    public function messages(): array
    {
        return [
            "user_nom.required" => "Le champs nom est obligatoire",
            "user_nom.min" => "Le champs Nom doit contenir au-moins deux caractères",
            "user_prenom.required" => "Le champs Prenom est obligatoire",
            "user_prenom.min" => "Le champs Prenom doit contenir au-moins deux caractères",
            "email.required" => "Le champs Email est obligatoire",
            "email.unique" => "L'email fourni existe déjà",
            "password.required"=>"Le champ Mot de passe est obligatoire",
            "password.min"=>"Le mot de passe doit compter au-moins 6 caractères"
        ];
    }
}
