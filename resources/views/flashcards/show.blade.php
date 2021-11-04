@extends('layouts.app')

@section('title')
<i class="fa fa-arrow-right"></i>
Flashcards
@endsection

@section('actions')
<button class="mx-2 text-uppercase btn btn-danger">
    finalizar tarea
</button>
@endsection

@section('content')
<div class="row my-4">
    <div class="col-12">
        <p class="h5 text-green-custom font-weight-bold">
            Curso: 
            <span class="text-dark">Historia de perú</span> 
            <i class="fa fa-chevron-right"></i>
            Tema: </span>
            <span class="text-muted font-weight-light">Descubrimiento de america</span>
        </p>
        <hr>
    </div>
    <div class="col-12 col-md-4 col-lg-3">
        @include('flashcards.partials.leftbar')
    </div>
    <div class="col-12 col-md-6 col-lg-5 offset-md-1 offset-lg-2">
        <div class="card">
            <div class="card-body text-center">
                <h3 class="h3 my-4">Card 10</h3>
                <p class="my-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus maxime cumque esse debitis doloribus et ex amet hic consectetur autem.</p>
                <img src="https://via.placeholder.com/300" alt="image card">
                <div class="row my-4">
                    <div class="col-md-4">
                        <button class="btn-block btn btn-primary">Fácil</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn-block btn btn-warning">Regular</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn-block btn btn-danger">Dificil</button>
                    </div>
                </div>
                <p class="mt-5">
                    <span class="text-green-custom">Respuesta: </span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis asperiores molestias ex corrupti nihil accusamus officiis distinctio commodi voluptatem. Omnis.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection