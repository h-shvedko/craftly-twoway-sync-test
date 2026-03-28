<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category): View
    {
        return view('categories.show', compact('category'));
    }
}
