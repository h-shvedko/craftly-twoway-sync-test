<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class UpdatePostRequest extends FormRequest
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
            'user_id' => 'sometimes|required|integer|exists:users,id',
            'category_id' => 'sometimes|required|integer|exists:categories,id',
            'title' => 'sometimes|required|string|max:255',
            'slug' => 'sometimes|required|string|max:255|unique:,slug',
            'excerpt' => 'nullable|string',
            'body' => 'sometimes|required|string',
            'featured_image' => 'nullable|string|max:255',
            'status' => 'sometimes|required|string|max:255',
            'published_at' => 'nullable|date',
        ];
    }
}
