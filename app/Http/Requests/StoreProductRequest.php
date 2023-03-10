<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:70',
            'description' =>'required|min:4|max:255',
            'active' => 'required',
            'slug' => 'required|string',
            'type' => 'required',
            'stock' => 'required',
            // 'verified' => $this->verified,
            'featured' => 'required',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'game_id' => 'required|exists:games,id',
        ];
    }
}
