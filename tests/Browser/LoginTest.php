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
    public function setUp(){
        parent::SetUP();
    }
    public function test_view_login(): void
    {
        $user = User::first();

        $this->browse(function ($browser) use ($user) {
            $browser->visit('user/login')
                ->type('email', $user->email)
                ->type('password', 'password')
                ->screenshot('login')
                ->press('Login')
                ->assertPathIs('/');
        });
    }

   /* public  function test_broser_login(){

        $user = User::first();

        $this->browse(function (Browser $browser) use ($user){
            $browser
                ->loginAs($user)
                ->visitRoute('books.index')
                ->screenshot("books")
            ;
        });

    }*/
}
