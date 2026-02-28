<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
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
            'full_name' => ['required', 'string', 'max:255'],
            'badge' => ['required', 'string', 'max:8', 'unique:students,badge'],
            'institutional_email' => ['required', 'email', 'unique:students,institutional_email'],
            'available_permits' => ['integer'],
            'state' => ['in:active,inactive'],
        ];
    }
}
