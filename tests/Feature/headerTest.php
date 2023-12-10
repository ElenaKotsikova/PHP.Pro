<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class headerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_viw_header():void
    {
        $contents = $this->view('header');
        $contents ->assertSee('Главная','Вход');

    }
}
