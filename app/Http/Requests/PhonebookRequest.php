<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhonebookRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'phone' => 'required|max:10|numeric',
            'email' => 'required|email|unique:phonebooks'
        ];
    }
}
