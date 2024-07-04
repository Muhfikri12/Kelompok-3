<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StructureOrgRequest extends FormRequest
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
            'parent_id' => 'required',
            'staff_id' => 'required',
        ];
    }

    public function attributes()
    {
        $attributes = [
            'name'      => __('Nama'),
            'staff_id'      => __('Petugas'),
            'parent_id'      => __('Pimpinan'),

        ];

        return $attributes;
    }

}
