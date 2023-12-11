<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthorListTest extends TestCase
{
    public function testIndexAuthors(): void
    {
        $response = $this->get(route('author.index'));
        $response->assertStatus(200);
    }
}
