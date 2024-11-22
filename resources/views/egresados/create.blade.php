@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Nuevo Egresado</h1>

    <form action="{{ route('egresados.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="identificacion" class="form-label">Identificación</label>
            <input type="text" name="identificacion" class="form-control" id="identificacion" required>
        </div>
        <div class="mb-3">
            <label for="nombre_completo" class="form-label">Nombre Completo</label>
            <input type="text" name="nombre_completo" class="form-control" id="nombre_completo" required>
        </div>
        <div class="mb-3">
            <label for="numero_telefono" class="form-label">Número de Teléfono</label>
            <input type="text" name="numero_telefono" class="form-control" id="numero_telefono" required>
        </div>
        <div class="mb-3">
            <label for="correo_electronico" class="form-label">Correo Electrónico</label>
            <input type="email" name="correo_electronico" class="form-control" id="correo_electronico" required>
        </div>
        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" required>
        </div>
        <div class="mb-3">
            <label for="programa" class="form-label">Programa</label>
            <input type="text" name="programa" class="form-control" id="programa" required>
        </div>
        <div class="mb-3">
            <label for="nombre_empresa" class="form-label">Nombre de la Empresa</label>
            <input type="text" name="nombre_empresa" class="form-control" id="nombre_empresa" required>
        </div>
        <div class="mb-3">
            <label for="puesto_desempenado" class="form-label">Puesto Desempeñado</label>
            <input type="text" name="puesto_desempenado" class="form-control" id="puesto_desempenado" required>
        </div>
        <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
            <input type="date" name="fecha_inicio" class="form-control" id="fecha_inicio" required>
        </div>
        <div class="mb-3">
            <label for="fecha_termino" class="form-label">Fecha de Término</label>
            <input type="date" name="fecha_termino" class="form-control" id="fecha_termino">
        </div>
        <div class="mb-3">
            <label for="funciones_principales" class="form-label">Funciones Principales</label>
            <textarea name="funciones_principales" class="form-control" id="funciones_principales" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection