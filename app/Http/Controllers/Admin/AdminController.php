<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    public function dashboardView()
    {
        return view('admin.tags');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
