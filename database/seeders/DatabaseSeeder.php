<?php

namespace Database\Seeders;

use App\Models\User; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Apaga usuários antigos 
        User::truncate();

        // Cria um usuário ADMIN padrão
        User::create([
            'name' => 'Admin Teste',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), 
            'role' => 'admin',
        ]);

        // Cria um usuário COMUM padrão
        User::create([
            'name' => 'User Teste',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}