<?php

namespace App\Http\Requests;

class ServiceGroupUpdateRequest extends ServiceGroupStoreRequest
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
