<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
 
  // Especificar la tabla asociada a este modelo
  protected $table = 'cursos';

  // Indicar la clave primaria de la tabla
  protected $primaryKey = 'id';

  // Indicar si la clave primaria es auto-incremental (es true por defecto)
  public $incrementing = true;

  // Indicar si las marcas de tiempo (created_at, updated_at) están habilitadas
  public $timestamps = true;

  // Especificar los campos que pueden ser llenados masivamente
  protected $fillable = [
      'nombre',
      'descripcion',
      'nivel',
      'cupo_maximo',
      'estado'
  ];
}