<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Post;

class SearchController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()->latest()->paginate(15);

        return view('posts.index', compact('posts'));
    }
}
