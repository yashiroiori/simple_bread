<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users,email',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ingrese el nombre del usuario',
            'email.required' => 'Ingrese el correo electrónico',
            'email.unique' => 'El correo electrónico ingresado ya ha sido registrado',
        ];
    }
}
