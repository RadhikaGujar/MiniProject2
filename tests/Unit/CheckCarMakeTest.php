<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CheckCarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMake()
    {
        $carmake = Car::inRandomOrder()->first();
        $this->assertContains($carmake->Make, ["Honda", "Ford", "Toyota"]);

    }
}
