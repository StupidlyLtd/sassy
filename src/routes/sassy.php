<?php

use Illuminate\Support\Facades\Route;
use Stupidly\Sassy\App\Http\Controllers\Admin\PageController;
use Stupidly\Sassy\App\Http\Middleware\IsAdmin;
use Stupidly\Sassy\App\Http\Controllers\Admin\AdminController;

Route::prefix('admin')->name(value: 'admin.')->middleware(IsAdmin::class)->group(function() {

    Route::get('/', [AdminController::class, 'index'])->name('index');

});

Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
