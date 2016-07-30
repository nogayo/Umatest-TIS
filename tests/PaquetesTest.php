<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PaquetesTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
   /**
   public function testIngresar2()
    {
        $this->visit('http://localhost/umatest-tis/public/auth/login')
            ->type('me@me.com')

            ->press('Ingresar')
            ->see("El campo contraseña es obligatorio.");

    }
   
  public function testIngresar3()
    {
        $this->visit('http://localhost/umatest-tis/public/')
            
            ->press('Registrarse')
              ->seePageIs('http://localhost/umatest-tis/public/auth/register');

    }
    */

/*

   public function testNewUserRegistration()
    {
        $this->visit('http://localhost/umatest-tis/public/auth/login')
            
            ->type('santi@gmail.com', 'email')
            ->type(123456, 'password')
     
            ->press('Ingresar')
            ->seePageIs('http://localhost/umatest-tis/public/home');
    }

    */
   
    public function testBasicExample()
    {
        $this->visit('/')
           ->see('Bienvenidos a Umatest');



    }

}
