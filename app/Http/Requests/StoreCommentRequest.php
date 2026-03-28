<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class StoreCommentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'post_id' => 'required|integer|exists:posts,id',
            'user_id' => 'nullable|integer|exists:users,id',
            'author_name' => 'required|string|max:255',
            'author_email' => 'required|string|max:255',
            'body' => 'required|string',
            'is_approved' => 'required|boolean',
        ];
    }
}
