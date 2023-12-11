<?php

namespace Tests\Feature;
namespace Tests\Browser;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_visit_login(): void
    {
        $this->get('/user/login')->assertOk();
    }

}
