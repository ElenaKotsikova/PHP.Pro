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

        $contents = (string) $this->view('home.index');


        //$response = $this->get('/');

       // $response->assertStatus(200);
    }
}
