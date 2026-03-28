<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class UpdateCommentRequest extends FormRequest
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
            'post_id' => 'sometimes|required|integer|exists:posts,id',
            'user_id' => 'nullable|integer|exists:users,id',
            'author_name' => 'sometimes|required|string|max:255',
            'author_email' => 'sometimes|required|string|max:255',
            'body' => 'sometimes|required|string',
            'is_approved' => 'sometimes|required|boolean',
        ];
    }
}
