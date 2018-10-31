<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user= new User();
        $user->name = 'Radhika Gujar';
        $user->email = 'rg583@njit.edu';
        $user->password = '1391994';
        $this->assertTrue($user->save());
        //$this->assertTrue(true);
    }
}
