@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('register.university.store') }}">
        @csrf
        <div class="text-center">
            <h1 class="h4 font-weight-bold text-green-custom">Seleccionar Universidad</h1>
            <small class="text-muted text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam vitae modi cumque laudantium, autem libero quo nobis explicabo architecto. Eveniet, sapiente. Beatae vero nihil accusantium porro perspiciatis id non doloremque.</small>
        </div>
        <div class="form-group my-4">
            <input type="search" id="searchUniversity" class="form-control" placeholder="Buscar universidad">
            @error('university_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="register-box-university">
            <ul class="list-group list-group-flush ">
                @foreach ($universities as $university)
                    <li class="list-group-item border-0">
                        <input required type="radio" name="university_id" value="{{$university->id}}">
                        {{$university->name}}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="form-group my-4">
            <button class="btn btn-green-custom btn-block">Continuar</button>
        </div>
    </form>    
@endsection

@section('scripts')
    <script>
        /* Search Bar */
        document.querySelector('#searchUniversity').addEventListener('keyup', function(e) {
            // UI Element
            let namesLI = document.getElementsByClassName('list-group-item')
            // Get Search Query
            let searchQuery = searchUniversity.value.toLowerCase()
            // Search Compare & Display
            for (let index = 0; index < namesLI.length; index++) {
                const name = namesLI[index].textContent.toLowerCase()
                if (name.includes(searchQuery)) {
                        namesLI[index].style.display = 'block'
                } else {
                        namesLI[index].style.display = 'none'
                }
            }
        })
    </script>
@endsection