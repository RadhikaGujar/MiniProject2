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
        $userdelete->name = 'abcd';
        $userdelete->email = 'abcd@xyz.com';
        $userdelete->password = '123456';
        $userdelete->save();
        $this->assertTrue($userdelete->delete());

    }
}
