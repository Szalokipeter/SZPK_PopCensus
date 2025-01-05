<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeopleRequest extends FormRequest
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
            'id' => 'required|integer|min:1|unique:populationGroups,id',
            'culture' => 'required|string|min:1',
            'religion' => 'required|string|min:1',
            'profession' => 'required|string|min:1',
            'population' => 'required|integer|min:1',
        ];
    }
}
