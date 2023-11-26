<?php

namespace App\Http\Requests\api\Book;

use App\Enums\api\ApiBookStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ApiStoreBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'page_number' => 'integer',
            'annotation' => ['string'],
            'author_id' => ['required'],
            'status' => new Enum(ApiBookStatus::class),
            'images.*' => ['image'],
        ];
    }
}
