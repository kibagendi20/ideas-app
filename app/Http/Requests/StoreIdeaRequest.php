<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIdeaRequest extends FormRequest
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
            'description' => ['required', 'string', 'min:10'],
        ];
    }

    public function messages(): array
    {
        return [
            'description.required' => 'Description is required',
            'description.min' => 'Description must be at least 10 characters',
            'description.string' => 'Description must be string',
        ];
    }
}
