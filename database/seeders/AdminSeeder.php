<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('administrador'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Daniel',
            'email' => 'daanco04@gmail.com',
            'password' => Hash::make('administrador'),
            'role' => 'admin',
        ]);
    }
}
