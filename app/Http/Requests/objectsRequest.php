<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class objectsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'object_name' => 'required|string|min:3|max:50',
            'object_tag' => 'required|string|min:3|max:15',
            'quantity' => 'required|numeric|min:1',
            'container_type' => 'required|string|min:3|max:25',
            'container_room' => 'required|string|min:3|max:25',
        ];
    }
}
