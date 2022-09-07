<?php

namespace App\Http\Requests\Billing\Users;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class GetUsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
     public function rules(): array
    {
        return [
            'page'=>'required',
            'perpage'=>'required'
        ];
    }
    public function messages()
    {
        return [
            "page.required" => "Страница не указана",
            "perpage.required" => "Количество записей на странице не указано",
        ];
    }
}
