<?php

namespace App\Http\Requests\Author;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'surname'=>['required'],
            'name' => ['required'],
            'patronymic'=>['required'],
        ];
    }
}
