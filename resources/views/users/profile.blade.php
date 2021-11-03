@extends('layouts.app')

@section('title')
<i class="fa fa-arrow-right"></i>
Perfil
@endsection

@section('content')
<div class="row my-4">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-body">
                <form method="POST" action="{{ route('users.profile.update') }}" class="form-row my-2">
                    @csrf
                    <div class="mt-3 col-12">
                        <p>Información de usuario</p>
                    </div>
                    <div class="my-2 col-md-4">
                        <input value="{{$user->name}}" name="name" placeholder="Nombres" type="text"
                            class="form-control">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="my-2 col-md-4">
                        <input value="{{$user->last_name}}" name="last_name" placeholder="Apellidos" type="text"
                            class="form-control">
                        @error('last_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-3 col-12">
                        <p>Información de contacto</p>
                    </div>
                    <div class="my-2 col-md-4">
                        <input value="{{$user->email}}" name="email" placeholder="Correo" type="email"
                            class="form-control">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="my-2 col-md-4">
                        <input value="{{$user->phone}}" name="phone" placeholder="Celular" type="phone"
                            class="form-control">
                        @error('phone')
                         <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="my-2 col-md-4 text-center">
                        <button class="btn btn-green-custom">Guardar cambios</button>
                    </div>
                </form>
                <form action="{{ route('users.password.update') }}" method="POST" class="form-row my-2">
                    @csrf
                    <div class="mt-3 col-12">
                        <p class="text-green-custom">¿Nueva contraseña?</p>
                    </div>
                    <div class="my-2 col-md-4">
                        <input name="password" placeholder="Contraseña" type="password" class="form-control">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="my-2 col-md-4">
                        <input name="password_confirmation" placeholder="Repetir contraseña" type="password" class="form-control">
                        @error('password_confirmation')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="my-2 col-md-4 text-center">
                        <button class="btn btn-green-custom">Actualizar contraseña</button>
                    </div>
                </form>
                <form action="" class="form-row my-2">
                    <div class="mt-3 col-12">
                        <p>Información de carrera</p>
                    </div>
                    <div class="my-2 col-md-4">
                        <input value="{{$user->university->name}}" readonly placeholder="Universidad"
                            class="form-control">
                    </div>
                    <div class="my-2 col-md-4">
                        <input value="{{$user->career->name}}" readonly placeholder="Carrera" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection