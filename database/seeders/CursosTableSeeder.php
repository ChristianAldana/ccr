<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    public function run()
    {
        DB::table('cursos')->insert([
            [
                'nombre' => 'TIC',
                'descripcion' => 'Tecnologías de la Información y Comunicación.',
                'nivel' => '4to año',
                'cupo_maximo' => 30,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Estadística',
                'descripcion' => 'Estudio de métodos para recolectar, analizar e interpretar datos.',
                'nivel' => '4to año',
                'cupo_maximo' => 25,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Física Fundamental',
                'descripcion' => 'Principios básicos de la física.',
                'nivel' => '4to año',
                'cupo_maximo' => 20,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Educación Física',
                'descripcion' => 'Actividades físicas y deportivas para el desarrollo corporal.',
                'nivel' => '4to año',
                'cupo_maximo' => 30,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Inglés',
                'descripcion' => 'Curso de lengua inglesa.',
                'nivel' => '4to año',
                'cupo_maximo' => 25,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Matemática',
                'descripcion' => 'Estudio de números, estructuras y formas.',
                'nivel' => '4to año',
                'cupo_maximo' => 30,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Lógica Matemática',
                'descripcion' => 'Estudio de los fundamentos de la lógica en matemáticas.',
                'nivel' => '4to año',
                'cupo_maximo' => 20,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Comunicación y Literatura',
                'descripcion' => 'Estudio de la comunicación y obras literarias.',
                'nivel' => '4to año',
                'cupo_maximo' => 25,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Ciencias Sociales',
                'descripcion' => 'Estudio de la sociedad y las relaciones humanas.',
                'nivel' => '4to año',
                'cupo_maximo' => 30,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Moral',
                'descripcion' => 'Estudio de los principios éticos.',
                'nivel' => '4to año',
                'cupo_maximo' => 20,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Contabilidad General',
                'descripcion' => 'Principios básicos de contabilidad.',
                'nivel' => '4to año',
                'cupo_maximo' => 25,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Programación',
                'descripcion' => 'Introducción a la programación de software.',
                'nivel' => '4to año',
                'cupo_maximo' => 30,
                'estado' => 'activo',
            ],
        ]);
    }
}
