<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'max:180'],
            'avatar_file_name' => ['nullable'],
            'note' => ['nullable'],
            'order' => ['required', 'integer', 'between:0,255'],
            'service_group_id' => ['nullable', 'required']
        ];
    }
}
