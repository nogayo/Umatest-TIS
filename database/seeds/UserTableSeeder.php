<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\User::class)->create([
     		'name' => 'admin',
     		'apellido' => 'admin',
     		'direccion' => 'c:/sucre #1111 ',
     		'telefono' => '60000000',
     		'genero' => 'm',
     		'email' => 'admin@umss.edu',
     		'password' => Hash::make('administrador')
     		]);


         factory(App\User::class)->create([
     		'name' => 'patricia',
     		'apellido' => 'rodriguez',
     		'direccion' => 'c:/lanza #39 ',
     		'telefono' => '70000000',
     		'genero' => 'f',
     		'email' => 'akirebilbao@gmail.com',
     		'password' => Hash::make('patricia')
     		]);

         factory(App\User::class)->create([
     		'name' => 'victor',
     		'apellido' => 'rojas',
     		'direccion' => 'c:/heroinas #46 ',
     		'telefono' => '79775947',
     		'genero' => 'm',
     		'email' => 'vinchuca@gmail.com',
     		'password' => Hash::make('vinchuca')
     		]);	


        DB::table('role_user')->insert(
        ['user_id' => 1, 'role_id' => 1]
        ); 
        DB::table('role_user')->insert(
        ['user_id' => 2, 'role_id' => 2]
        );

        DB::table('role_user')->insert(
        ['user_id' => 3, 'role_id' => 3]
        );  

        DB::table('categorias')->insert(
        ['id' => 1, 'nombre' => 'Ingenieria de Sistemas']
        ); 

        DB::table('categorias')->insert(
        ['id' => 2, 'nombre' => 'Ingenieria Informatica']
        ); 

        DB::table('categorias')->insert(
        ['id' => 3, 'nombre' => 'Ingenieria Industrial']
        ); 

        DB::table('categorias')->insert(
        ['id' => 4, 'nombre' => 'Ingenieria Civil']
        ); 

        // DATOS PARA LA TABLA "TIPO DE PREGUNTAS"
        DB::table('tipo_preguntas')->insert(
                ['id'=> 1, 'tipo'=> 'simple']
        );
        DB::table('tipo_preguntas')->insert(
                ['id'=> 2, 'tipo'=> 'desarrollo']
        );
        DB::table('tipo_preguntas')->insert(
                ['id'=> 3, 'tipo'=> 'multiple']
        );

        DB::table('tipo_preguntas')->insert(
                ['id'=> 4, 'tipo'=> 'F/V']
        );



    }
}
