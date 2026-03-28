<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request): RedirectResponse
    {
        Comment::create($request->validated());

        return redirect()->back()
            ->with('success', 'Comment created successfully.');
    }
}
