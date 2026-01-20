<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $isUpdate = $this->isMethod('PUT') || $this->isMethod('PATCH');

        return [
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => ($isUpdate ? 'nullable' : 'required') . '|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:100',
            'active' => 'boolean',
        ];
    }
}
