<?php

namespace Stupidly\Sassy\App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function show(\Stupidly\Sassy\App\Models\Page $page) {
        $page->load(['sections']);
        $page->sections->each(function($section) {
             if($section->posts > 0)
                $section->section_posts = Post::query()->paginate($section->posts);
        });

        return Inertia::render('Page/Show', [
            'page' => $page
        ]);
    }
}
