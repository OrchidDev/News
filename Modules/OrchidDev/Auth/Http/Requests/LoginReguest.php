<?php

namespace OrchidDev\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginReguest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|min:3|max:225|exists:users,email',
            'password' => 'required|string|min:8|max:225',
        ];
    }
}
