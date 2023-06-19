<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePetsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();
        return $user != null && $user -> tokenCan('create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
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
        
    }
}
