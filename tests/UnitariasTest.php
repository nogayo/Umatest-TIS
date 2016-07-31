<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UnitariasTest extends TestCase
{
    // con esta linea hago que no se guarde en la base de datos
    // , luego de ejecutarse la prueba se borrara
    use DatabaseTransactions;
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
              ->click('ayuda')
              ->seePageIs('/ayuda_v');
    }
    
}
