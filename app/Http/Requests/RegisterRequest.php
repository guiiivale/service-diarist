<?php

namespace App\Http\Requests;


class RegisterRequest extends BaseFormRequest
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
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
            'document' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|array',
            'address.street' => 'required|string',
            'address.number' => 'required|string',
            'address.complement' => 'nullable|string',
            'address.neighborhood' => 'required|string',
            'address.city' => 'required|string',
            'address.state' => 'required|string',
            'address.zip' => 'required|string',
            'address.reference' => 'nullable|string',
            'address.latitude' => 'nullable|string',
            'address.longitude' => 'nullable|string',
            'address.notes' => 'nullable|string',
            'address.type' => 'required|integer',
            'type' => 'required|integer',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um email válido.',
            'email.unique' => 'O email informado já está em uso.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.confirmed' => 'As senhas não conferem.',
            'document.required' => 'O campo documento é obrigatório.',
            'phone.required' => 'O campo telefone é obrigatório.',
            'address.required' => 'O campo endereço é obrigatório.',
            'address.street.required' => 'O campo rua é obrigatório.',
            'address.number.required' => 'O campo número é obrigatório.',
            'address.neighborhood.required' => 'O campo bairro é obrigatório.',
            'address.city.required' => 'O campo cidade é obrigatório.',
            'address.state.required' => 'O campo estado é obrigatório.',
            'address.zip.required' => 'O campo CEP é obrigatório.',
            'address.type.required' => 'O campo tipo de endereço é obrigatório.',
            'type.required' => 'O campo tipo de usuário é obrigatório.',
        ];
    }
}
