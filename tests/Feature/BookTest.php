<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    protected function setUp():void{

    }
    public function testCreateB(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
