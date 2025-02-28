<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeRequest extends FormRequest
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
            'name' => 'required|max:150'
        ];
    }
    public function message()
    {
        return [
            'name.required' => "Il nome della tipologia è obbligatorio",
            'name.max' => "Il nome della tipologia deve essere lungo al massimo :max caratteri",
        ];
    }
}
