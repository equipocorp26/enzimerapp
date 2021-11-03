@extends('layouts.app')

@section('title')
<i class="fa fa-arrow-right"></i>
Tests
@endsection

@section('actions')
<div class="d-inline-block mx-2">
    <p class="text-uppercase">cursos: <span class="text-green-custom">21</span></p>
</div>
<div class="d-inline-block mx-2">
    <p class="text-uppercase">temas: <span class="text-green-custom">21</span></p>
</div>
<div class="d-inline-block mx-2">
    <input class="form-control d-inline-block" style="max-width: 60px"> <span class="d-inline-block"> / 200</span>
</div>
<button class="mx-2 text-uppercase btn btn-green-custom">
    generar test
</button>
@endsection

@section('content')
<div class="row my-4">
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card shadow-none text-white bg-secondary">
            <div class="card-body">
                <p class="h5 text-white mb-4">Cursos</p>
                <ul class="list-group mt-0">
                    @for ($i = 0; $i <= 10; $i++) <li class="bg-secondary list-group-item border-0"><i
                            class="fa fa-file-alt mr-2"></i> lorem impsu {{$i}}</li>
                        @endfor
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-9">
        <div class="card shadow-none">
            <div class="card-body">
                <p class="h5 mb-4">Temas</p>
                <div class="table-responsive">
                    <table class="table-sm table">
                        <thead>
                            <tr>
                                <th class="border-0"><input type="radio"></th>
                                <th class="border-0">Nombre del tema</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i <= 13; $i++) <tr class="border-bottom">
                                <td><input name="topic_id" type="radio"></td>
                                <td>Lorem, ipsum dolor. {{$i}}</td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection