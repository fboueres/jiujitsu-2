<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentResponsibleRequest extends FormRequest
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
            'email' => 'nullable|email',
            'gender' => 'required|in:M,F',
            'birth_date' => 'required|date',
            'cpf' => 'required|regex:^\d{3}\.\d{3}\.\d{3}-\d{2}$',
            'phone_number' => 'required|regex:^\(\d{2}\) \d \d{4}-\d{4}$',
        ];
    }
}
