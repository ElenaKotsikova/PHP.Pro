<?php

namespace Tests\Feature;


use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
class CreateAuthorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create(): void
    {
        $response = $this->get(route('author.create'));

        $response->assertStatus(200);
    }



}
