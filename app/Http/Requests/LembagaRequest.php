<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LembagaRequest extends FormRequest
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
            "name" => 'required|string',
            "leader" => 'required|string',
            "type" => 'required',
            "address" => 'required',
            "email" => 'required|email',
            "phone" => 'required',
            "date" => 'required',
        ];
    }

    public function attributes()
    {
        $attributes = [
            'name'      => __('Nama'),
            'leader'      => __('Nama Ketua'),
            'parent_id'      => __('Pimpinan'),
            'address'      => __('Alamat'),
            'phone'      => __('Telepon'),
            'date'      => __('Tanggal'),

        ];

        return $attributes;
    }
}
