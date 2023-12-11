<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Hash;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use App\Models\Review;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test_view_login(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('user.login');
        });
    }

    public  function test_broser_login(){

        $user = User::factory()->createOne([
            'email' => 'taylor@laravel.com',
        ]);

       /* $this->browse(function (Browser $browser) use ($user){
            $browser->visit('/user/login')
                ->type('email',$user->email)
                ->type('password','password')
                ->press('Login')
                ->assertPathIs('/');

        });*/

    }
}
