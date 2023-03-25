<?php

namespace OrchidDev\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterReguest extends FormRequest
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
            'name' => 'required|string|min:3|max:225',
            'email' => 'required|email|min:3|max:225|unique:users,email',
            'password' => 'required|string|min:8|max:225',
            'privacy' => 'required',
        ];
    }
}
