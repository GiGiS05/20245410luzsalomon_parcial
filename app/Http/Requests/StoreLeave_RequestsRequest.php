<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeave_RequestsRequest extends FormRequest
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
            'date_solicited' => ['date'],
            'motive' => ['required', 'string', 'max:500'],
            'student_id' => ['required', 'exists:students,id'],
            'status' => ['in:pending,approved,cancelled'],
        ];
    }
}
