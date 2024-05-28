<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Insertar usuarios administradores, tantos como se dese
        // solamente estos usuarios al logearse se consideraran como
        // admin, y tendrán privilegios
        DB::table('users')->insert([
            'Nombre' => 'Admin',
            'Email' => 'admin@gmail.com',
            'Contraseña' => Hash::make('administrador'),
            'rol' => 'admin',
        ]);

        DB::table('users')->insert([
            'Nombre' => 'Daniel',
            'Email' => 'daanco04@gmail.com',
            'Contraseña' => Hash::make('administrador'),
            'rol' => 'admin',
        ]);
    }
}
