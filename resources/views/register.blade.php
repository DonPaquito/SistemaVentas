@extends('layouts.app')

@section('title', 'Registrarse')

@section('content')
    <div class="box">
        <div class="form">
            <h2>Registrarse</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="inputBox">
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    <span>Nombre</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    <span>Correo electrónico</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input type="password" id="password" name="password" required>
                    <span>Contraseña</span>
                    <i></i>
                </div>

                <div class="inputBox">
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                    <span>Confirmar contraseña</span>
                    <i></i>
                </div>

                <input type="submit" value="Registrarse">

            </form>

            <div class="links">
                <a href="{{ route('login') }}">¿Ya tienes una cuenta? Inicia sesión</a>
            </div>
        </div>
    </div>
@endsection
