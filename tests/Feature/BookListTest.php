<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookListTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testIndexBooks(): void
    {


        //$view = $this->view('home.index');

        $response = $this->get('/books');

        $response->assertStatus(200);
    }
}
