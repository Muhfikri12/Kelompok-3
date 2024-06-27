<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerangkatDesaRequest extends FormRequest
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
            "name" => 'required',
            "gender" => 'required',
            "phone" => 'max:14',
            "nip" => 'required|max:8',
            "position_id" => 'required',
            "photo" => 'image|mimes:jpg,jpeg,png,gif|max:4096',
            "status" => 'required',
        ];
    }

    public function attributes()
    {
        $attributes = [
            'name'      => __('Nama'),
            'gender'      => __('Jenis Kelamin'),
            'position_id'      => __('Jabatan'),
            'status'      => __('Status Kepagawaian'),


        ];

        return $attributes;
    }
}
