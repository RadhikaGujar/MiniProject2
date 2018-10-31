<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCar()
    {
        $cardelete= new car();
        $cardelete->make = 'Toyota';
        $cardelete->model = 'New Model';
        $cardelete->year = '2017';
        $cardelete->save();
        $this->assertTrue($cardelete->delete());
    }
}
