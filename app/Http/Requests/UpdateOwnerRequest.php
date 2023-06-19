<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOwnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();
        return $user != null && $user -> tokenCan('update');    }

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
                'email' => ['nullable', 'email'],
                'digital_address' => ['nullable'],
                'phone' => ['required'],
                'purpose' => ['required'],
                'created_by' => ['required'],
            ];
        } else {
            return [
                'name' => ['sometimes', 'required'],
                'email' => ['sometimes', 'nullable', 'email'],
                'digital_address' => ['sometimes', 'nullable'],
                'phone' => ['sometimes', 'required'],
                'purpose' => ['sometimes', 'required'],
                'created_by' => ['sometimes', 'required'],
            ];
        }
    }
}
