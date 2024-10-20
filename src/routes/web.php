<?php

use Illuminate\Support\Facades\Route;
use Stupidly\Sassy\App\Http\Controllers\Admin\PageController;

Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
