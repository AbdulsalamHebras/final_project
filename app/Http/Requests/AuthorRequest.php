<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            "name" => ["required", "min:5", "max:40", "string"],
            "description" => ["nullable", "max:255"],
            "DOB" => ["required", "date", 'before_or_equal:Today'],
            "DOD" => ["nullable", "date", 'after:DOB'],
            "nationality" => ["string", "required"],
            "phone_number" => ["required", "numeric", "unique:authors,phone_number"],
            "email" => ["required", "email"],
            "job" => ["nullable", "string"],
            "image" => ["nullable", "mimes:png,jpg", 'max:5120']
        ];
    }
}
