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
    <div class="col-12 col-md-4 col-lg-3">
        @include('flashcards.partials.leftbar')
    </div>
    <div class="col-12 col-md-6 col-lg-5 offset-md-1 offset-lg-2">
        <div class="card">
            <div class="card-body text-center">
                <h3 class="h3 my-4 text-green-custom">Flashcards</h3>
                <p class="text-green-custom  font-weight-bold">
                    Curso: 
                    <span class="text-dark">Historia de peru</span>
                </p>
                <p class="text-green-custom  font-weight-light">
                    Tema: 
                    <span class="text-dark">Descubrimiento de america</span>
                </p>
                <p class="my-2">Duración total</p>
                <p class="h4 text-dark">00h : 05m : 25 s</p>
                <h3 class="h3 my-4 text-green-custom">Fin del flashcards</h3>
                <div class="row my-4">
                    <div class="col-md-4">
                        <div class="text-white rounded-lg card bg-primary shadow-none">
                            <div class="text-center card-body">
                                <p>Facil</p>
                                <p class="h3 font-weight-bold">10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-white rounded-lg card bg-warning shadow-none">
                            <div class="text-center card-body">
                                <p>Facil</p>
                                <p class="h3 font-weight-bold">10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-white rounded-lg card bg-danger shadow-none">
                            <div class="text-center card-body">
                                <p>Facil</p>
                                <p class="h3 font-weight-bold">10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5"><button class="px-5 btn btn-outline-green-custom">Ir al home</button></div>
                    <div class="col-6 mt-5"><button class="px-5 btn btn-green-custom">Ver cards</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection