<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\OfertaLaboral;


class UsuariosYOfertasLaborales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user1 = User::create([
            'name' => 'Pedro Caceres',
            'email' => 'pedro@hotmail.com',
            'tipo_documento' => 'C.C',
            'numero_documento' => '1075989875',
            'password' => Hash::make('123456')
        ]);

        $user2 = User::create([
            'name' => 'Armando Cardenas',
            'email' => 'armando@hotmail.com',
            'tipo_documento' => 'C.C',
            'numero_documento' => '1075989875',
            'password' => Hash::make('123456')
        ]);

        $user3 = User::create([
            'name' => 'Daniel Perez',
            'email' => 'daniel@hotmail.com',
            'tipo_documento' => 'C.C',
            'numero_documento' => '1075989875',
            'password' => Hash::make('123456')
        ]);

        OfertaLaboral::create([
            'nombre_oferta' => 'Oferta 1',
            'user_id' => $user1->id,
            'estado' => 'Activo'
        ]);

        OfertaLaboral::create([
            'nombre_oferta' => 'Oferta 2',
            'user_id' => $user1->id,
            'estado' => 'Activo'
        ]);

        OfertaLaboral::create([
            'nombre_oferta' => 'Oferta 3',
            'user_id' => $user2->id,
            'estado' => 'Activo'
        ]);

        OfertaLaboral::create([
            'nombre_oferta' => 'Oferta 4',
            'user_id' => $user2->id,
            'estado' => 'Activo'
        ]);

        OfertaLaboral::create([
            'nombre_oferta' => 'Oferta 5',
            'user_id' => $user2->id,
            'estado' => 'Activo'
        ]);

        OfertaLaboral::create([
            'nombre_oferta' => 'Oferta 6',
            'user_id' => $user2->id,
            'estado' => 'Activo'
        ]);

        OfertaLaboral::create([
            'nombre_oferta' => 'Oferta 7',
            'user_id' => $user3->id,
            'estado' => 'Activo'
        ]);
    }
}
