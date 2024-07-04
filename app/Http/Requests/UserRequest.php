<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $id = $this->user->id ?? 0;

        return [
            "name" => "required|string|max:100",
            'email' => 'required|email|unique:users,email,'.$id.',id',
            'password' => 'required|confirmed|min:5',
        ];
    }

    public function attributes()
    {
        $attributes = [
            'name'      => __('Nama'),
            'password'      => __('Sandi'),
        ];

        return $attributes;
    }
}
