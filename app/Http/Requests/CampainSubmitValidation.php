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
            'leader-firstname' => 'required|string|max:40',
            'leader-lastname' => 'required|string|max:40',
            'leader-phone' => 'required|phone:IR',
            'description' => 'string',
            'name' => 'required|string|max:40',
            'start-date' => 'date_format:Y/m/d|required_with:finish-date',
            'finish-date' => 'date_format:Y/m/d|required_with:start-date|after:start-date',
            'geometry-location' => 'string|max:70',
            'campain-poster' => 'mimetypes:image/png,image/jpeg,application/pdf',
            

        ];
    }
}
