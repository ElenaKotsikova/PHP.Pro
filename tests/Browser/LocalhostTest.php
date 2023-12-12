<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LocalhostTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testlocalhost(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->screenshot('localhost')
                    ->assertSee('BOOK STORE');
        });
    }
}
