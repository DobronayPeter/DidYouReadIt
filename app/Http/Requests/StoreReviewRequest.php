<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "id" => "unique:reviews,id",
            "user_id" => "required|exists:user,id",
            "book_id" => "required|exists:books,id",
            "rating" => "required|numeric",
            "description" => "nullable|string|max:500",
            "progress" => "required|string|in:wishlist,in-progress,completed,trashed",
            "shared" => "required|boolean"
        ];
    }
}
