<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginRequest extends \App\Http\Requests\Auth\LoginRequest
{
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();
        if (! Auth::guard('web_admin')->attempt($this->only('email', 'password'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
        RateLimiter::clear($this->throttleKey());
    }
}
