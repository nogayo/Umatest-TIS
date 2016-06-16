<?php
use Illuminate\Database\Seeder;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\role::class)->create([
     		'nombre_rol' => 'administrador'
     		]);
     	factory(App\role::class)->create([
     		'nombre_rol' => 'docente'
     		]);
     	factory(App\role::class)->create([
     		'nombre_rol' => 'estudiante'
     		]);	
    }
}