@extends('layouts.app')

@section('title')
<i class="fa fa-arrow-right"></i>
Preguntas
@endsection

@section('content')
<div class="row my-4">
    <div class="col-12">
        <p class="text-green-custom">Razonamiento Verbal</p>
        <p class="h5 font-weight-bold">Pregunta N° 20</p>
    </div>
    <div class="col-12 col-md-5 col-lg-4 left-bar-questions">
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
                @for ($x = 0; $x < 5; $x++)
                    <div class="row my-2">
                        <div class="col-2 bg-green-custom rounded">
                            <span class="icon-box-questions text-center">
                                <i class="fa fa-flask"></i>
                                <br>
                                A 
                                <br>
                                B
                            </span>
                        </div>
                        <div class="col-10">
                            <div class="row">
                                @for ($i = 1; $i < 17; $i++)
                                    <div class="col-3 my-1 text-center">
                                        <div class="p-1 py-3 card bg-danger">
                                            {{$i}}
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="col-12 col-md-7 col-lg-8 ">
        <div class="card">
            <div class="card-header">
                ¿Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, temporibus??
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item border-0"><input type="radio"> respuesta 1</li>
                    <li class="list-group-item border-0"><input type="radio"> respuesta 2</li>
                    <li class="list-group-item border-0"><input type="radio"> respuesta 3</li>
                    <li class="list-group-item border-0"><input type="radio"> respuesta 4</li>
                </ul>

                <div class="card sahdow-none mt-5">
                    <div class="card-header bg-green-custom text-white">Puedes conocer mas</div>
                    <div class="card-body bg-light">
                        <ul>
                            <li>lorem 1</li>
                            <li>lorem 2</li>
                            <li>lorem 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection