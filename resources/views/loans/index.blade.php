@extends('layouts.app')

@section('content')
<div>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 class="brand-font" style="font-size: 2rem; color: var(--charcoal-blue);">Gestión de Préstamos</h2>
        <button class="btn-primary">+ Registrar Préstamo</button>
    </div>

    <div style="background-color: var(--bg-surface); padding: 20px; border-radius: 12px; border: 1px solid var(--border-line); box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
        <table class="modern-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Equipo Solicitado</th>
                    <th>Solicitante</th>
                    <th>Fecha de Salida</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6" style="text-align: center; color: var(--khaki-beige);">No hay préstamos activos en este momento.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection