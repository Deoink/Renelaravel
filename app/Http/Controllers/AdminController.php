<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index()
    {
        Gate::authorize('view-admin');

        return view('admin.index');
    }
}
