<?php

namespace App\Http\Requests\Workers;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'surname'=>'required|string',
            'name'=>'required|string',
            'age'=>'nullable|integer',
            'email'=>'nullable|email',
            'description'=>'nullable|string',
            'is_married'=>'nullable|string',
        ];
    }
}
