<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['nullable'],
            'url' => ['nullable'],
            'order' => ['required', 'integer', 'between:0,255'],
            'avatar_file_name' => ['required']
        ];
    }
}
