<?php

namespace App\Http\Requests;

class ServiceUpdateRequest extends ServiceStoreRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules() : array
    {
        return parent::rules();
    }
}
