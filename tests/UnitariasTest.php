<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UnitariasTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInicio()
    {
        $this->visit('/')
             ->see('Bienvenidos a Umatest');
    }

    public function testAcerca()
    {
         $this->visit('/')
                ->click('Ayuda')
                ->seePageIs('http://localhost/testing/public/ayuda_v');
    }
}
