<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampainSubmitValidation extends FormRequest
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
            'leader-firstname' => 'required|string|max:30',
            'leader-lastname' => 'required|string|max:30',
            'leader-phone' => 'required|phone:IR',
            'description' => 'nullable|string',
            'campain-name' => 'required|string|max:30',
            'campain-purpose' => 'required|string|max:30',
            'start-date' => 'nullable|date_format:Y/m/d|required_with:finish-date',
            'finish-date' => 'nullable|date_format:Y/m/d|required_with:start-date|after:start-date',
            'geometry-location' => 'nullable|string|max:70',
            'campain-poster' => 'nullable|mimes:png,jpeg,pdf|file',
        ];
    }
}
