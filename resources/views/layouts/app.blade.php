<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduEquip - Gestión de Equipos</title>

    <!-- Fuentes de Google para tu diseño -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Jost:wght@400;500;700&family=Lora:ital@0;1&family=Slabo+27px&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Carga de Tailwind y tus estilos CSS/JS personalizados -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @auth
        <!-- DISEÑO PARA USUARIOS LOGUEADOS (Inventario con Menú Lateral) -->
        <div class="app-layout">
            <aside class="sidebar">
                <div style="padding-bottom: 30px;">
                    <h2 class="brand-font" style="font-size: 2.5rem; color: var(--dusty-rose); margin: 0;">EduEquip</h2>
                </div>
                
                <a href="{{ route('dashboard') }}">📦 Inventario</a>
                <a href="{{ route('loans.index') }}">🤝 Préstamos</a>
                <a href="{{ route('incidents.index') }}">⚠️ Incidencias</a>
                
                <div style="flex-grow: 1;"></div>
                
                <!-- Botón de Cerrar Sesión -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: var(--dusty-rose); font-family: 'Lora', serif; font-size: 1.1rem; cursor: pointer; text-align: left; padding: 12px; width: 100%; transition: 0.2s;">
                        🚪 Cerrar Sesión
                    </button>
                </form>
            </aside>

            <div class="main-content">
                <header class="topbar">
                    <div style="margin-right: auto; font-family: 'Jost', sans-serif; font-size: 1.1rem; color: var(--text-main);">
                        ¡Hola, <strong>{{ Auth::user()->name }}</strong>! (Rol: {{ ucfirst(Auth::user()->role) }})
                    </div>
                    
                    <button id="theme-toggle" class="btn-primary">🌓 Modo Oscuro</button>
                </header>

                <main style="padding: 30px;">
                    @yield('content')
                    {{ $slot ?? '' }}
                </main>
            </div>
        </div>
    @else
        <!-- DISEÑO PARA INVITADOS (Pantalla de Inicio de Sesión y Registro) -->
        <main>
            @yield('content')
            {{ $slot ?? '' }}
        </main>
    @endauth
</body>
</html>