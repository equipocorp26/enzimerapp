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
        <div class="card text-white bg-dark">
            <div class="card-body px-4">
                <div class="card">
                    <div class="card-body text-center">
                        <p class="text-green-custom h5">Flashcards</p>
                        <p class="text-muted">Tiempo transcurrido</p>
                        <p class="h4 text-dark">00h : 05m : 25 s</p>
                    </div>
                </div>
                <hr class="bg-white">    
                <div class="row">
                    <div class="text-center text-white col-12">
                        <p>Cantidad de cards</p>
                    </div>
                    @for ($i = 1; $i < 21; $i++)
                        <div class="col-3 my-3 text-center">
                            <div class="py-2 card bg-danger">
                                {{$i}}
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
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