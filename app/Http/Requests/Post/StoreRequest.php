<?php

namespace App\Http\Requests\Post;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Category;
use Illuminate\Controllers\Dashboard\PostController;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    { 
        return [
            'title' => 'required|min:2|max:500',
            'slug' => 'required|min:2|max:500|unique:posts',
            'descripcion' => 'required|min:2|max:500',
            'content' => 'required|min:2|max:500',
            'category_id' => 'required|integer|exists:categories,id',
            'posted' => 'required'
        ];
    }
}
