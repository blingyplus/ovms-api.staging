<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePetsRequest extends FormRequest
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
                'uuid' => ['required'],
                'name' => ['required'],
                'owner_id' => ['required'],
                'category_id' => ['required'],
                'microchip_id' => ['nullable'],
                'status' => ['required'],
                'mark' => ['nullable'],
                'color' => ['required'],
                'gender' =>  ['required'],
                'breed' =>  ['required'],
                'dob' => ['required'],
                'created_by' => ['required'],

            ];
        } else {
            return [
                'uuid' => ['sometimes', 'required'],
                'name' => ['sometimes', 'required'],
                'owner_id' => ['sometimes', 'required'],
                'category_id' => ['sometimes', 'required'],
                'microchip_id' => ['sometimes', 'nullable'],
                'status' => ['sometimes', 'required'],
                'mark' => ['sometimes', 'nullable'],
                'color' => ['sometimes', 'required'],
                'gender' =>  ['sometimes', 'required'],
                'breed' =>  ['sometimes', 'required'],
                'dob' => ['sometimes', 'required'],
                'created_by' => ['sometimes', 'required'],

            ];
        }
    }
}
