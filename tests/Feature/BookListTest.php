<?php

namespace Tests\Feature;

use App\Facades\BookFacade;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class BookListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testIndexBooks(): void
    {
        $response = $this->get(route('home.index'));
        $response->assertStatus(200);
    }



}
