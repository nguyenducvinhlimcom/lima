<?php

namespace App\Http\Requests;

class BannerUpdateRequest extends BannerStoreRequest
{
    public function rules(): array
    {
        return parent::rules();
    }
}
