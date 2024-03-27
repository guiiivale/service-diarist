<?php

namespace App\Http\Requests;


class StoreAddressRequest extends BaseFormRequest
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
            'street' => 'required|string',
            'number' => 'required|string',
            'complement' => 'nullable|string',
            'neighborhood' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|string',
            'type' => 'required|integer',
            'reference' => 'nullable|string',
            'latitude' => 'nullable|string',
            'longitude' => 'nullable|string',
            'notes' => 'nullable|string',
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
            'street.required' => 'Street is required',
            'number.required' => 'Number is required',
            'neighborhood.required' => 'Neighborhood is required',
            'city.required' => 'City is required',
            'state.required' => 'State is required',
            'zip.required' => 'Zip is required',
            'type.required' => 'Type is required',
        ];
    }
}
