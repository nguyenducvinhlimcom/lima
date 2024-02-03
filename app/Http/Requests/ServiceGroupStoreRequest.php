<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Str;

class ServiceGroupStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'max:180'],
            'slug' => ['nullable', 'string'],
            'avatar_file_name' => ['nullable'],
            'name_page' => ['required', 'max:255'],
            'note' => ['nullable'],
            'description' => ['nullable'],
            'order' => ['required', 'integer', 'between:0,255'],
            'menu_status' => ['nullable'],
            'title_seo' => ['nullable', 'max:255'],
            'keywords_seo' => ['nullable', 'max:255'],
            'note_seo' => ['nullable']
        ];
    }

    public function validated($key = null, $default = null): array
    {
        $data = parent::validated($key, $default);

        $data['slug'] = Str::slug($data['slug'] ?? $data['name']);
        $data['menu_status'] = isset($this->menu_status) ? 1 : 0;

        return $data;
    }
}
