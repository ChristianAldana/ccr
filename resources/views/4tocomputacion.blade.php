<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4to Computación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Gestión de Cursos - 4to Computación</h1>
        
        <!-- Mensajes de éxito o error -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario para agregar un curso -->
        <div class="card mb-4">
            <div class="card-header">
                Agregar Curso
            </div>
            <div class="card-body">
                <form action="{{ route('4tocomputacion.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Curso</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="nivel" class="form-label">Nivel</label>
                        <input type="text" class="form-control" id="nivel" name="nivel" required>
                    </div>
                    <div class="mb-3">
                        <label for="cupo_maximo" class="form-label">Cupo Máximo</label>
                        <input type="number" class="form-control" id="cupo_maximo" name="cupo_maximo">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado" name="estado">
                            <option value="activo" selected>Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Curso</button>
                </form>
            </div>
        </div>

        <!-- Tabla para mostrar los cursos -->
        <div class="card">
            <div class="card-header">
                Lista de Cursos
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Nivel</th>
                            <th>Cupo Máximo</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cursos as $curso)
                            <tr>
                                <td>{{ $curso->id }}</td>
                                <td>{{ $curso->nombre }}</td>
                                <td>{{ $curso->descripcion }}</td>
                                <td>{{ $curso->nivel }}</td>
                                <td>{{ $curso->cupo_maximo }}</td>
                                <td>{{ $curso->estado }}</td>
                                <td>
                                    <!-- Botón para editar -->
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $curso->id }}">Editar</button>

                                    <!-- Botón para eliminar -->
                                    <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal para editar curso -->
                            <div class="modal fade" id="editModal{{ $curso->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Editar Curso</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="nombre" class="form-label">Nombre del Curso</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $curso->nombre }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="descripcion" class="form-label">Descripción</label>
                                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $curso->descripcion }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nivel" class="form-label">Nivel</label>
                                                    <input type="text" class="form-control" id="nivel" name="nivel" value="{{ $curso->nivel }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="cupo_maximo" class="form-label">Cupo Máximo</label>
                                                    <input type="number" class="form-control" id="cupo_maximo" name="cupo_maximo" value="{{ $curso->cupo_maximo }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="estado" class="form-label">Estado</label>
                                                    <select class="form-select" id="estado" name="estado">
                                                        <option value="activo" {{ $curso->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                                                        <option value="inactivo" {{ $curso->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Actualizar Curso</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>