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
            'author_id' => ['required'],
            'status' => new Enum(BookStatus::class),
            'images.*' => ['image'],
        ];
    }
}
