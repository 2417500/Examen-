@extends('layouts.app')

@section('content')
<div style="display: flex; height: 100vh; background-color: var(--bg-surface);">
    <div style="flex: 1; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 40px; text-align: center;">
        <h1 class="brand-font" style="font-size: 3rem; color: var(--dusty-rose);">Bienvenid@s a</h1>
        <h2 class="brand-font" style="font-size: 5rem; color: var(--charcoal-blue); margin-bottom: 20px;">EduEquip</h2>
        <p style="font-family: 'Slabo 27px', serif; font-size: 1.5rem; color: var(--olive-wood);">"Únete y gestiona tus equipos fácilmente."</p>
    </div>

    <div style="flex: 1; display: flex; justify-content: center; align-items: center; padding: 40px;">
        <div style="background-color: var(--bg-main); padding: 40px; border-radius: 16px; border: 1px solid var(--border-line); width: 100%; max-width: 400px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <h3 class="brand-font" style="text-align: center; font-size: 1.8rem; margin-bottom: 30px; text-transform: uppercase;">Registro</h3>
            
            <form method="POST" action="{{ route('register') }}" style="display: flex; flex-direction: column; gap: 15px;">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="Nombre Completo" required style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid var(--border-line); background-color: var(--bg-surface); color: var(--text-main);">
                </div>

                <div>
                    <input type="email" name="email" placeholder="Correo Electrónico" required style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid var(--border-line); background-color: var(--bg-surface); color: var(--text-main);">
                </div>

                <div>
                    <input type="password" name="password" placeholder="Contraseña" required style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid var(--border-line); background-color: var(--bg-surface); color: var(--text-main);">
                </div>

                <div>
                    <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid var(--border-line); background-color: var(--bg-surface); color: var(--text-main);">
                </div>

                <button type="submit" class="btn-primary" style="margin-top: 10px;">Registrarse</button>

                <div style="text-align: center; margin-top: 10px;">
                    <a href="{{ route('login') }}" style="color: var(--olive-wood); text-decoration: none; font-size: 0.9rem;">¿Ya tienes cuenta? Inicia sesión</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection