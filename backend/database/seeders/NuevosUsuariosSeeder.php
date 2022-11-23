<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Database\Seeder;

class NuevosUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = array(
            // presidencia
                // [
                //     'apellido' => 'Pedevilla',
                //     'nombre' => 'Andrea Ayelen',
                //     'dni' => '34297950',
                //     'cuil' => '27342979500',
                //     'area_id' => 9,
                //     'tipo_user_id' => 2
                // ],
                // [
                //     'apellido' => 'Medrano ',
                //     'nombre' => 'Oscar Fernando',
                //     'dni' => '35223075',
                //     'cuil' => '20352230759',
                //     'area_id' => 15,
                //     'tipo_user_id' => 1
                // ],
                [
                    'apellido' => 'Vallejos ',
                    'nombre' => 'Pablo Reinalo Mariano',
                    'dni' => '26396263',
                    'cuil' => '20263962630',
                    'area_id' => 20,
                    'tipo_user_id' => 1
                ],
            );
            foreach ($usuarios as $usuario) {
                $persona = Persona::create([
                    'apellido' => $usuario['apellido'],
                    'nombre' => $usuario['nombre'],
                    'dni' => $usuario['dni'],
                ]);
                $user = User::create([
                    'persona_id' => $persona->id,
                    'area_id' => $usuario['area_id'],
                    'tipo_user_id' => $usuario['tipo_user_id'],
                    'cuil' => $usuario['cuil'],
                    'password' => bcrypt($usuario['cuil']),
                ]);
            }
    }
}
