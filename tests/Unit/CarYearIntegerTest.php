<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarYearIntegerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearInteger()
    {
        $car = car::inRandomOrder()->first();
        $caryear = (int)$car->Year;
        $this->assertInternalType("int", $caryear);

    }
}
