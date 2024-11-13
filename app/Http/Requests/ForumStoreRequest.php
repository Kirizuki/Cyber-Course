<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForumStoreRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'The title is required',
            'content.required' => 'The content is required',
            'image.mimes' => 'Please upload jpeg, png, or jpg formats.',
        ];
    }
}