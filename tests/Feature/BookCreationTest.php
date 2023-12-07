<?php

namespace Tests\Feature;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class BookCreationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    protected function setUp():void{
        parent::setUp();

        User::factory()
              -> createOne([
                  'password'=>Hash::make('password')
              ])
        ;

    }
    public function testCreateBook(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
