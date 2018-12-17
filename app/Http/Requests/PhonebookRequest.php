<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class PhonebookRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        return [
            'name' => 'required|max:255',
            'phone' => 'required|max:15',
            'email' => 'required|email|unique:phonebooks,email,'.$request->id
        ];
    }
}
