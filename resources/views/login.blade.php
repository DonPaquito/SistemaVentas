@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
    <div class="box">
        <div class="form">
            <h2>Iniciar Sesión</h2>
            <img src="{{ asset('img/imglogin.jpg') }}" alt="Logo de la Empresa" />
            
            <form method="POST" action="{{ url('/login') }}">
                @csrf

                <div class="inputBox">
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    <span>Correo electrónico</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input type="password" id="password" name="password" required>
                    <span>Contraseña</span>
                    <i></i>
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="remember" id="remember">
                    <span>Recordar contraseña</span>
                </div>

                <input type="submit" value="Iniciar sesión">
            </form>

            <div class="links">
                <a href="{{ route('register') }}">¿No tienes una cuenta? Regístrate</a>
            </div>
        </div>
    </div>
@endsection

