<?php

namespace App\Http\Requests\Book;

use App\Enums\BookStatus;
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
            'publisher_id' => ['required'],
            'author_id' => ['required'],
        ];
    }
}
