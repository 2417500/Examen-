@extends('layouts.app')

@section('content')
<div style="display: flex; height: 100vh; background-color: var(--bg-surface);">
    <div style="flex: 1; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 40px; text-align: center;">
        <h1 class="brand-font" style="font-size: 3rem; color: var(--dusty-rose);">Bienvenid@s</h1>
        <h2 class="brand-font" style="font-size: 5rem; color: var(--charcoal-blue); margin-bottom: 20px;">EduEquip</h2>
        <p style="font-family: 'Slabo 27px', serif; font-size: 1.5rem; color: var(--olive-wood);">"Facilitando las herramientas para tu éxito."</p>
    </div>

    <div style="flex: 1; display: flex; justify-content: center; align-items: center; padding: 40px;">
        <div style="background-color: var(--bg-main); padding: 40px; border-radius: 16px; border: 1px solid var(--border-line); width: 100%; max-width: 400px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <h3 class="brand-font" style="text-align: center; font-size: 1.8rem; margin-bottom: 30px; text-transform: uppercase;">Inicio de Sesión</h3>
            
            <form method="POST" action="{{ route('login') }}" style="display: flex; flex-direction: column; gap: 20px;">
                @csrf
                <div>
                    <input type="email" name="email" placeholder="Correo Electrónico" required style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid var(--border-line); background-color: var(--bg-surface); color: var(--text-main); font-family: 'Jost', sans-serif;">
                    @error('email') <span style="color: var(--dusty-rose); font-size: 0.8rem;">{{ $message }}</span> @enderror
                </div>

                <div>
                    <input type="password" name="password" placeholder="Contraseña" required style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid var(--border-line); background-color: var(--bg-surface); color: var(--text-main); font-family: 'Jost', sans-serif;">
                </div>

                <button type="submit" class="btn-primary" style="margin-top: 10px;">Ingresar</button>

                <div style="text-align: center; margin-top: 10px;">
                    <a href="{{ route('register') }}" style="color: var(--olive-wood); text-decoration: none; font-size: 0.9rem;">¿No tienes cuenta? Regístrate</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection