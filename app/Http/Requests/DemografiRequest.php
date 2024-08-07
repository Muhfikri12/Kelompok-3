<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemografiRequest extends FormRequest
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

     public function rules()
     {
         return [
            'tahun' => 'required|min:4|max:4',
             'keterangan' => 'required',
             'kategori_id' => 'required',
             'total' => 'integer|required',
             "satuan" => 'required'
         ];
     }

     public function attributes()
     {
         $attributes = [
             // 'name'      => __('Tugas'),
             'kategori_id'      => __('Kategori'),
         ];

         return $attributes;
     }
}
