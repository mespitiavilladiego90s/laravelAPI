<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;


class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        $usuarios = [
            ['nombre' => 'Juan Pérez', 'email' => 'juan@example.com', 'password' => 'contraseña123'],
            ['nombre' => 'María López', 'email' => 'maria@example.com', 'password' => 'contraseña123'],
            ['nombre' => 'Carlos García', 'email' => 'carlos@example.com', 'password' => 'contraseña123'],
            ['nombre' => 'Ana Torres', 'email' => 'ana@example.com', 'password' => 'contraseña123'],
            ['nombre' => 'Pedro Ramírez', 'email' => 'pedro@example.com', 'password' => 'contraseña123'],
        ];

        foreach ($usuarios as $usuario) {
            Usuarios::create([
                'nombre'   => $usuario['nombre'],
                'email'    => $usuario['email'],
                'password' => Hash::make($usuario['password']), 
            ]);
        }
    }
}