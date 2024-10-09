<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoryRequest extends FormRequest
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
            'name' => 'required|min:5|max:20|string|unique:stories,name',
            'summary' => 'nullable|max:255',
            'writing_date' => 'required|date|before_or_equal:Today',
            'image' => 'required|mimes:png,jpg|max:5120',
            'category_id' => 'numeric|required',
            'language' => 'required|string',
            'parts' => 'numeric|required',
            'deposit_number' => 'numeric|required',
            'edition_number' => 'numeric|required',
            'deposit_date' => 'date|required',
            'pages' => 'required|numeric',
            'copies' => 'required|numeric',
            'price' => 'required|numeric'
        ];
    }
}
