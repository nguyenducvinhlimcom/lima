<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GlobalVariableSharingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('admin/*')) {
            $menu = config('menu');

            view()->share('menu', $menu);
        }

        return $next($request);
    }
}
