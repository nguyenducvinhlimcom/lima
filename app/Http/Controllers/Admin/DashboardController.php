<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

final class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('admin.dashboard');
    }
}
