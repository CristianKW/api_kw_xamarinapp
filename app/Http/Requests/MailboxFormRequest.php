<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailboxFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'company_name' => ['required', 'string'],
            'reason' => ['required', 'string'],
            'date_of_incident' => ['required', 'string', 'date'],
            'message' => ['required', 'string'],
        ];
    }
}
