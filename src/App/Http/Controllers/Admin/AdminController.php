<?php

namespace Stupidly\Sassy\App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index()
    {
        return Inertia::render(base_path(__DIR__.'../../../../resources/js/Pages/Admin/Index'));
    }
}
