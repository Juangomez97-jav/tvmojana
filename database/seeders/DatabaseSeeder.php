<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //Crear un usuario administrador
         \App\Models\User::factory(3)->create([
            'name' => 'Administrador del sistema',
            'rol' => 'admin'
        ]);

        //Crear 10 usuarios de empleados 
        \App\Models\User::factory(5)->create();
    }
    
}
