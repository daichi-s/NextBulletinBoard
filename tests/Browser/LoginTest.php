<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Laravel\Dusk\Chrome;

class LoginTest extends DuskTestCase
{
    // use DatabaseMigrations;

    /**
     * 基本的なブラウザテスト例
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = User::first();

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertPathIs('/board');
        });
    }
}
