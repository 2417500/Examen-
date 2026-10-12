@extends('layouts.app')

@section('content')
<nav style="display: flex; justify-content: space-between; padding: 20px 40px; border-bottom: 1px solid var(--border-line); background-color: var(--bg-surface);">
    <div class="brand-font" style="font-size: 1.8rem; color: var(--dusty-rose);">EduEquip</div>
    <div style="display: flex; gap: 30px; align-items: center;">
        <a href="#">Inicio</a>
        <a href="#novedades">Novedades</a>
        <a href="#reglas">Reglas de Préstamo</a>
        <a href="#contacto">Contacto</a>
        <a href="{{ route('login') }}" style="border: 2px solid var(--charcoal-blue); padding: 8px 20px; border-radius: 8px;">Iniciar Sesión</a>
    </div>
</nav>

<!-- Hero -->
<main style="display: flex; padding: 60px 40px; gap: 40px; height: 70vh; align-items: center;">
    <div style="flex: 1;">
        <h1 style="font-size: 4.5rem; color: var(--charcoal-blue);">EduEquip</h1>
        <p style="font-family: 'Slabo 27px', serif; font-size: 1.5rem; margin-top: 20px;">Gestiona, solicita y controla laptops, proyectores y equipos escolares.</p>
    </div>
    <div style="flex: 1; border: 2px solid var(--border-line); border-radius: 16px; height: 100%; background-color: var(--pale-oak);"></div>
</main>

<!-- Novedades -->
<section id="novedades" style="padding: 60px 40px; background-color: var(--bg-surface);">
    <h2 style="font-size: 2.5rem; margin-bottom: 30px;">Novedades y Equipos</h2>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <div style="border: 1px solid var(--border-line); border-radius: 12px; padding: 20px; background: var(--bg-main);">
            <div style="height: 150px; background-color: var(--khaki-beige); border-radius: 8px; margin-bottom: 15px;"></div>
            <h3>Laptops DELL</h3>
            <p style="font-family: 'Lora', serif; font-size: 0.9rem;">Disponibles para estudiantes de desarrollo.</p>
        </div>
    </div>
</section>

<!-- Contacto -->
<footer id="contacto" style="padding: 40px; border-top: 1px solid var(--border-line); display: flex; justify-content: space-between;">
    <div>Redes Sociales</div>
    <div>Ubicación y Horarios de atención</div>
</footer>
@endsection