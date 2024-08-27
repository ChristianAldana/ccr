<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id(); // ID auto-incrementable para el curso
            $table->string('nombre'); // Nombre del curso
            $table->text('descripcion'); // Descripción del curso
            $table->string('nivel'); // Nivel en que se cursa el curso, e.g., 4to año, 5to año
            $table->integer('cupo_maximo')->nullable(); // Número máximo de estudiantes que pueden inscribirse
            $table->string('estado')->default('activo'); // Estado del curso
            $table->timestamps(); // Marca de tiempo para la creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
