<?php

namespace App\Http\Requests;

class FeedbackUpdateRequest extends FeedbackStoreRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return parent::rules();
    }
}
