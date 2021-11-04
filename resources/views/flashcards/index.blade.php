@extends('layouts.app')

@section('title')
<i class="fa fa-arrow-right"></i>
Flashcards
@endsection

@section('actions')
<button class="mx-2 text-uppercase btn btn-green-custom">
    generar tarea
</button>
@endsection

@section('content')
<div class="row my-4">
    <div class="col-12">
        <p class="h5 text-green-custom font-weight-bold">Curso: <span class="text-dark">Historia de perú</span></p>
        <hr>
    </div>
    @for ($i = 0; $i < 9; $i++)
        <div class="col-12 col-md-6 col-lg-4 my-2">
            <div class="card text-center sahdow-none">
                <div class="card-body">
                    <i class="fa fa-book-open text-green-custom fa-5x my-3"></i>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ab, odit repellendus obcaecati reprehenderit numquam?</p>
                </div>
            </div>
        </div>
    @endfor
</div>
@endsection