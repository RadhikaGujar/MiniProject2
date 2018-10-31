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
        $userdelete->name = 'Radhika';
        $userdelete->email = 'radhikagujar13@gmail.com';
        $userdelete->password = 'radhika13';
        $userdelete->save();
        $this->assertTrue($userdelete->delete());

    }
}
