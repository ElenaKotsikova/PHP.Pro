<?php

namespace App\Http\Requests\web\Book;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
class StoreBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'page_number' => 'integer',
            'annotation' => ['string'],
            'publisher_id' => ['required','integer'],
            'author_id' => ['required','integer'],
        ];
    }
}
