<?php

namespace App\Services\Book\api;

use App\Http\Requests\api\Book\ApiStoreBookRequest;
use App\Http\Requests\api\Book\ApiStoreReviewRequest;
use App\Models\Book;
use App\Models\Review;
use App\Enums\api\ApiBookStatus;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;


class ApiBookService
{
    private Book $book;

    public function getPublishedBooks(): Collection
    {
        return Book::query()
            ->where(['status' => ApiBookStatus::Published])
            ->get();
    }
    public function store(ApiStoreBookRequest $request): Book
    {
        $files = $request->file('images', []);

        $book = new Book([
            'title' => $request->input('title'),
            'page_number' => $request->input('page_number'),
            'annotation' => $request->input('annotation'),
            'author_id' => $request->integer('author_id'),
        ]);

        $book->save();

        foreach ($files as $file) {
            $path = $file->storePublicly();

            $book->images()->create([
                'url' => Storage::url($path),
            ]);
        }

        return $book;
    }

    public function update(): Book
    {
        $data = [];

        if (request()->method() === 'PUT') {
            $data = [
                'title' => request()->input('title'),
                'page_number' => request()->integer('page_number'),
                'annotation' => request()->input('annotation'),
                'author_id' => request()->integer('author_id'),
            ];
        } else {
            if (request()->has('title')) {
                $data['title'] = request()->input('title');
            }
            if (request()->has('page_number')) {
                $data['page_number'] = request()->integer('page_number');
            }
            if (request()->has('annotation')) {
                $data['annotation'] = request()->input('annotation');
            }
            if (request()->has('author_id')) {
                $data['author_id'] = request()->integer('author_id');
            }
        }

        $this->book->update($data);

        return $this->book;
    }

    public function createReview(ApiStoreReviewRequest $request): Review
    {
        /** @var Review $review */
        return auth()->user()->reviews()->create([
            'text' => $request->input('text'),
            'rate' => $request->integer('rate'),
            'book_id' => $this->book->id,
        ]);
    }

    public function setBook(Book $book): self
    {
        $this->book = $book;

        return $this;
    }

}
