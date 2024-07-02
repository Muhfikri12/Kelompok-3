<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            "event_article" => 'required',
            "headline_article" => 'required',
            "event_time" => 'required',
            "event_date" => 'required',
            "event_place" => 'required',
            "image_content" => 'required|image|mimes:jpg,jpeg,png,gif|max:8192',
            "detail_content" => 'required',
        ];
    }

    public function attributes()
    {
        $attributes = [
            'event_article'      => __('Nama Acara'),
            'headline_article'      => __('Headline Acara'),
            'event_time'      => __('Waktu Pelaksanaan'),
            'event_date'      => __('Tanggal Pelaksanaan'),
            'event_place'      => __('Tempat Pelaksanaan'),
            'image_content'      => __('Gambar'),
            'detail_content'      => __('Detail Acara'),

        ];

        return $attributes;
    }
}
