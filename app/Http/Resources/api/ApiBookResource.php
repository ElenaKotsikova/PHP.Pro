<?php

namespace App\Http\Resources\api;

use App\Models\Book;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Book
 */

class ApiBookResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'author' => $this->author->surname,
            'images' => $this->images->map(fn (Image $image)=>$image->url),
            'reviews' => ApiReviewResource::collection($this->reviews),
        ];
    }
}
