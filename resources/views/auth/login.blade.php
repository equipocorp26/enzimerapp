@extends('layouts.auth')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="text-center">
            <h1 class="h4 font-weight-bold text-green-custom">Iniciar Sesión</h1>
            <small class="text-muted">La herramienta perfecta para mejorar tus estudios pre-universitarios</small>
        </div>
        <div class="form-group my-4">
            <input type="email" required name="email" class="form-control" placeholder="Correo electronico">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group my-4">
            <input type="password" required name="password" class="form-control" placeholder="Contraseña">
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group my-4">
            <input type="checkbox" name="remember">
            <small class="text-muted">Recordar Cuenta</small>
            <small class="float-right"><a href="{{ route('password.request') }}" class="font-weight-bold text-green-custom">Olvide mi contraseña</a></small>
        </div>
        <div class="form-group my-4">
            <button class="btn btn-green-custom btn-block">Iniciar sesión</button>
        </div>
        <div class="form-group mt-4 text-center">
            <small class="text-muted d-block">¿No tienes una cuenta?</small>
            <small><a href="{{ route('register') }}" class="text-green-custom font-weight-bold">Crear aquí</a></small>
        </div>
    </form>    
@endsection