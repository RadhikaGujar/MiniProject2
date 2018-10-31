<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testinsertcar()
    {
        $carinsert= new Car();
        $carinsert->make = 'Honda';
        $carinsert->model = 'Black';
        $carinsert->year = '1994';
        $this->assertTrue($carinsert->save());

       // $this->assertTrue(true);
    }
}
