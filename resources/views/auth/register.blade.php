@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <div class="text-center">
                <h1 class="h4 font-weight-bold text-green-custom">Nuevo usuario</h1>
                <small class="text-muted text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam vitae modi cumque laudantium, autem libero quo nobis explicabo architecto. Eveniet, sapiente. Beatae vero nihil accusantium porro perspiciatis id non doloremque.</small>
        </div>
        <div class="form-group my-4">
                <input type="text" name="name" required class="form-control" placeholder="Nombres">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
        </div>
        <div class="form-group my-4">
                <input type="text" name="last_name" required class="form-control" placeholder="Apellidos">
                @error('last_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
        </div>
        <div class="form-group my-4">
                <input type="email" name="email" required class="form-control" placeholder="Correo electronico">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
        </div>
        <div class="form-group my-4">
                <input type="text" name="phone" required class="form-control" placeholder="Celular">
                @error('phone')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
        </div>
        <div class="form-group my-4">
                <input id="password" type="password" name="password" required class="form-control" placeholder="Contraseña">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
        </div>
        <div class="form-group my-4">
                <input id="password_confirmation" type="password" name="password_confirmation" required class="form-control" placeholder="Repetir Contraseña">
                @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
        </div>
        <div class="form-group my-4">
                <button class="btn btn-green-custom btn-block">Continuar</button>
        </div>
        <div class="form-group mt-4 text-center">
                <small class="text-muted d-block">¿ya tienes una cuenta?</small>
                <small><a href="{{ route('login') }}" class="text-green-custom font-weight-bold">Iniciar sesión</a></small>
        </div>
    </form>    
@endsection
