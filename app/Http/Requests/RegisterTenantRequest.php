<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterTenantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:13',
            'service_provider' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => ['required', 'confirmed', Password::defaults()],
            'company' => 'required|string|max:255',
            'domain' => 'required|string|max:255|unique:domains',
        ];
    }

    // validate inputs before merging into the domain name
    public function prepareForValidation()
    {
        $this->merge([
            'domain' =>  $this->domain . '.' . config('tenancy.central_domains')[0],
        ]);
    }
}