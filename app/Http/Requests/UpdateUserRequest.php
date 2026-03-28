<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class UpdateUserRequest extends FormRequest
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
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|max:255|unique:,email',
            'email_verified_at' => 'nullable|date',
            'password' => 'sometimes|required|string|max:255',
            'remember_token' => 'nullable|string|max:255',
        ];
    }
}
