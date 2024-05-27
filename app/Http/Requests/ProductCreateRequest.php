<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "code" => "required",
            "name_spanish" => "required|string:255",
            "name_english" => "required|string:255",
            "description_english" => "Sports shoes fro woman",
            "barcode" => "max:13",
            "category_id" => "required|integer:2",
        ];
    }
}
