<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{

    protected static $inputFields = [
        'to_time_opening',
        'from_time_opening',
        'is_ecommerce_enable',
        'submit_form',
        '_token'
    ];

    public function authorize()
    {
        return true;
    }

    public function companyInfo() :array
    {
        return $this->except(self::$inputFields);
    }
}
