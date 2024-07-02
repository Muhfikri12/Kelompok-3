<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            "event_news" => 'required',
            "event_cat" => 'required',
            "headline_news" => 'required',
            "detail_news" => 'required',
            "image_content" => 'required|image|mimes:jpg,jpeg,png,gif|max:8192',
        ];
    }

    public function attributes()
    {
        $attributes = [
            'event_news'      => __('Nama Berita'),
            'event_cat'      => __('Kategori'),
            'headline_news'      => __('Headline Berita'),
            'detail_news'      => __('Detail Berita'),
            'image_content'      => __('Gambar'),

        ];

        return $attributes;
    }
}
