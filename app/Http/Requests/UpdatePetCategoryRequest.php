<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePetCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();
        return $user != null && $user -> tokenCan('update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method();
        if ($method == 'PUT') {
            return [
                'name' => ['required'],
                'description' => ['required'],
                'image' => ['nullable'],
            ];
        } else {
            return [
                'name' => ['sometimes', 'required'],
                'description' => ['sometimes', 'required'],
                'image' => ['sometimes', 'nullable'],
            ];
        }
    }
}
