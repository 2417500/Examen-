<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - EduEquip</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Jost:ital,wght@0,100..900;1,100..900&family=Lora:ital,wght@0,400..700;1,400..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="app-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2 class="brand-font" style="font-size: 2rem; margin-bottom: 40px; color: var(--dusty-rose);">EduEquip</h2>
           <nav style="flex: 1;">
    <a href="{{ route('dashboard') }}" style="display: flex; align-items: center; padding: 12px; margin-bottom: 8px; border-radius: 8px; color: var(--text-main); text-decoration: none; font-family: 'Lora', serif;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 10px;"><path d="M3 3h18v18H3z"></path></svg>
        Inventario
    </a>
    <a href="{{ route('loans.index') }}" style="display: flex; align-items: center; padding: 12px; margin-bottom: 8px; border-radius: 8px; color: var(--text-main); text-decoration: none; font-family: 'Lora', serif;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 10px;"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
        Mis Préstamos
    </a>
    <a href="{{ route('incidents.index') }}" style="display: flex; align-items: center; padding: 12px; margin-bottom: 8px; border-radius: 8px; color: var(--text-main); text-decoration: none; font-family: 'Lora', serif;">
        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 10px;"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0zM12 9v4M12 17h.01"></path></svg>
        Incidencias
    </a>
</nav>
            <button id="theme-toggle" style="background: none; border: 1px solid var(--border-line); border-radius: 8px; padding: 10px; cursor: pointer; color: var(--text-main); display: flex; align-items: center; justify-content: center;">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                Modo Claro / Oscuro
            </button>
        </aside>

        <div class="main-content">
            <header class="topbar">
                <span style="margin-right: 20px; font-family: 'Ubuntu', sans-serif;">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="background: none; border: 1px solid var(--dusty-rose); padding: 8px 16px; border-radius: 8px; cursor: pointer; color: var(--text-main);">
                        Cerrar sesión
                    </button>
                </form>
            </header>
            <main style="padding: 40px;">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>