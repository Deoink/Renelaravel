<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StarProductRquest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
        ];
    }
}