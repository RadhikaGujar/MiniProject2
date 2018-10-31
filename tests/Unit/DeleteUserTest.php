<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $userdelete= new User();
        $userdelete->name = 'ABCDE';
        $userdelete->email = 'abcd@gmail.com';
        $userdelete->password = '1234567';
        $userdelete->save();
        $this->assertTrue($userdelete->delete());

    }
}
