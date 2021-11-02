@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('register.career.store') }}">
        @csrf
        <div class="text-center">
            <h1 class="h4 font-weight-bold text-green-custom">Seleccionar Universidad</h1>
            <small class="text-muted text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam vitae modi cumque laudantium, autem libero quo nobis explicabo architecto. Eveniet, sapiente. Beatae vero nihil accusantium porro perspiciatis id non doloremque.</small>
        </div>
        <div class="form-group my-4">
            @error('career_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="register-box-university">
            <ul class="list-group list-group-flush ">
                @foreach ($areas as $area)
                    <li class="list-group-item text-green-custom font-weight-bold">
                        <i class="fa fa-university"></i> {{$area->name}}
                    </li>
                    @foreach ($area->careers as $career)
                        <li class="list-group-item border-0">
                            <input required type="radio" name="career_id" value="{{$area->id}}">
                            {{$career->name}}
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
        <div class="form-group my-4">
            <button class="btn btn-green-custom btn-block">Continuar</button>
        </div>
    </form>    
@endsection