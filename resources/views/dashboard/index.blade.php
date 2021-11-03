@extends('layouts.app')

@section('title')
<i class="fa fa-arrow-right"></i> Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-6">
        <div class="row">
            <div class="col-12 my-3">
                <div class="card shadow-none">
                    <div class="card-header">
                        <h4 class="h6 text-blue-app font-weight-bold">Cards de la semana</h4>
                        <button class="ml-auto btn text-capitalize btn-blue-custom">generar card <i
                                class="fa fa-plus ml-2"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="card shadow-none mb-3 widget-content box-red-custom">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-danger"><i class="fa fa-university"></i>
                                                    Lorem, ipsum.</div>
                                                <div class="widget-subheading text-justify">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Labore</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper">
                                            <div class="progress-sub-label">
                                                <div class="sub-label-right font-weight-bold text-dark">-- En dos días
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card shadow-none mb-3 widget-content box-orange-custom">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-warning"><i
                                                        class="fa fa-university"></i> Lorem, ipsum.</div>
                                                <div class="widget-subheading text-justify">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Labore</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper">
                                            <div class="progress-sub-label">
                                                <div class="sub-label-right font-weight-bold text-dark">-- En dos días
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card shadow-none mb-3 widget-content box-blue-custom">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading text-info"><i class="fa fa-university"></i>
                                                    Lorem, ipsum.</div>
                                                <div class="widget-subheading text-justify">Lorem ipsum dolor sit amet
                                                    consectetur adipisicing elit. Labore</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper">
                                            <div class="progress-sub-label">
                                                <div class="sub-label-right font-weight-bold text-dark">-- En dos días
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 my-3">
                <div class="card shadow-none">
                    <div class="card-header">
                        <h4 class="h6 text-blue-app  font-weight-bold">Jueves 18 <i class="fa fa-chevron-left mx-2"></i>
                            <i class="mx-2 fa fa-chevron-right"></i> Enero
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @for ($i = 1; $i < 7 ; $i++) 
                                <div class="col-md-2 my-4 text-center">
                                    <div class="box-grey-custom">
                                        <span class="d-block" style="padding-top: 40%;">
                                            DIA
                                            <br>
                                            {{$i}}
                                        </span>
                                    </div>
                                </div>
                            @endfor
                            @for ($i = 1; $i < 7 ; $i++) 
                                <div class="col-12 my-2">
                                    <div class="box-blue-dark-custom py-2 px-3 rounded">
                                        <i class="fa fa-pen text-blue-dark-custom mr-3 float-left mt-3"></i>
                                        <p class="d-inline-block py-0 my-0">
                                            <span class="font-weight-bold text-blue-dark-custom">Lorem ipsum dolor sit
                                                amet.</span>
                                            <br>
                                            <span>Lorem ipsum dolor sit amet.</span>
                                        </p>
                                        <i class="fa fa-arrow-right text-blue-dark-custom float-right mt-3"></i>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 my-3">
        <div class="card shadow-none">
            <div class="card-header">
                <h4 class="h6 text-blue-app font-weight-bold">Simulacros recientes</h4>
                <button class="ml-auto btn text-capitalize btn-blue-custom">generar simulacro <i class="fa fa-plus ml-2"></i></button>
            </div>
            <div class="card-body">
                <div class="row px-3">
                    @for ($i = 1; $i < 7 ; $i++) 
                        <div class="col-12 my-2">
                            <div class="row border p-3 rounded">
                                <div class="col-8 ">
                                    <p class="d-inline-block py-0 my-0">
                                        <span class="font-weight-bold text-blue-dark-custom">Lorem ipsum dolor sit
                                            amet.</span>
                                        <br>
                                        <span>12 / 01 / 21 - 0{{$i}} Horas</span>
                                    </p>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="text-muted mr-5">Puntaje</span>
                                    <br>
                                    <span class="text-blue-dark-custom mr-5 font-weight-bold">1000</span>
                                    <i class="fa fa-eye text-blue-dark-custom float-right" style="margin-top: -10px"></i>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection