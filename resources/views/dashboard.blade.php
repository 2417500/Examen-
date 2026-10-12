@extends('layouts.app')

@section('content')
<div>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 class="brand-font" style="font-size: 2rem; color: var(--charcoal-blue);">Inventario de Equipos</h2>
        <button class="btn-primary">+ Nuevo Equipo</button>
    </div>
    
    <div style="background-color: var(--bg-surface); padding: 20px; border-radius: 12px; border: 1px solid var(--border-line); box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
        <table class="modern-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre / Modelo</th>
                    <th>No. de Serie</th>
                    <th>Categoría</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí después irán tus datos de la base de datos -->
                <tr>
                    <td colspan="6" style="text-align: center; color: var(--khaki-beige);">Aún no hay equipos registrados en el inventario.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection