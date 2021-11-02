@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($planes as $plan)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <p class="h5 text-center text-green-custom ">{{$plan->name}}</p>
                        </div>
                        <div class="card-body">
                            <p class="h3 text-center text-green-custom font-weight-bold">{{$plan->amount}} <small class="h6">USD / Año</small></p>
                            <ul class="list-group">
                                <li class="list-group-item border-0 text-green-custom"><i class="fa fa-wifi"></i> lorem impsu 1</li>
                                <li class="list-group-item border-0 text-green-custom"><i class="fa fa-wifi"></i> lorem impsu 2</li>
                                <li class="list-group-item border-0 text-green-custom"><i class="fa fa-wifi"></i> lorem impsu 3</li>
                                <li class="list-group-item border-0 text-green-custom"><i class="fa fa-wifi"></i> lorem impsu 4</li>
                                <li class="list-group-item border-0 text-green-custom"><i class="fa fa-wifi"></i> lorem impsu 5</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-green-custom btn-block">Seleccionar plan</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection