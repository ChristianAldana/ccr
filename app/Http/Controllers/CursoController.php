<?php
namespace App\Http\Controllers;
use App\Models\Curso;


use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CursoController extends Controller
{
   // Método para mostrar la lista de cursos
   public function index()
   {
       $cursos = Curso::orderBy('nombre', 'asc')->paginate(6);
       return view('4tocomputacion', compact('cursos'));
   }
   
   // Método para almacenar un nuevo curso en la base de datos
   public function store(Request $request)
   {
       $request->validate([
           'nombre' => 'required',
           'descripcion' => 'required',
           'nivel' => 'required',
           'cupo_maximo' => 'nullable|integer',
           'estado' => 'required'
       ]);

       $curso = new Curso();
       $curso->nombre = $request->post('nombre');
       $curso->descripcion = $request->post('descripcion');
       $curso->nivel = $request->post('nivel');
       $curso->cupo_maximo = $request->post('cupo_maximo');
       $curso->estado = $request->post('estado');
       $curso->save();

       // Mensaje de confirmación (puedes usar Alert o cualquier otra notificación)
       Alert::toast('Curso creado exitosamente.', 'success');
       return redirect()->route('4tocomputacion.index');
   }

   // Método para mostrar un curso específico
   public function show($id)
   {
       $curso = Curso::find($id);
       return view('4tocomputacion.show', compact('curso'));
   }

   // Método para mostrar el formulario de edición de un curso
   public function edit($id)
   {
       $curso = Curso::find($id);
       return view('4tocomputacion.edit', compact('curso'));
   }

   // Método para actualizar un curso en la base de datos
   public function update(Request $request, $id)
   {
       $request->validate([
           'nombre' => 'required',
           'descripcion' => 'required',
           'nivel' => 'required',
           'cupo_maximo' => 'nullable|integer',
           'estado' => 'required'
       ]);

       $curso = Curso::find($id);
       $curso->nombre = $request->post('nombre');
       $curso->descripcion = $request->post('descripcion');
       $curso->nivel = $request->post('nivel');
       $curso->cupo_maximo = $request->post('cupo_maximo');
       $curso->estado = $request->post('estado');
       $curso->save();

       // Mensaje de confirmación (puedes usar Alert o cualquier otra notificación)
       Alert::toast('Curso actualizado exitosamente.', 'info');
       return redirect()->route('4tocomputacion.index');
   }

   // Método para eliminar un curso
   public function destroy($id)
   {
       $curso = Curso::find($id);
       $curso->delete();

       // Mensaje de confirmación (puedes usar Alert o cualquier otra notificación)
       Alert::toast('Curso eliminado exitosamente.', 'error');
       return redirect()->route('4tocomputacion.index');
   }
}