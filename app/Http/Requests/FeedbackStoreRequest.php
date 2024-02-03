<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'max:100'],
            'job' => ['nullable', 'max:50'],
            'content' => ['nullable'],
            'order' => ['required', 'integer', 'between:0,255'],
            'avatar_file_name' => ['nullable']
        ];
    }
}
