@extends('template.main')
@section('title'){{'Abrace | Admin'}}@endsection
@section('content')
    <style type="text/css">
        body {
            background-color: whitesmoke }
    </style>

    <?php $message=Session::get('message')?>


    @include('shared.navbarA')

    <div class="container-fluid ">
        <div class="jumbotron mt-5 bg-inverse text-white rounded-0">
            <div align="center">
                <div class="col-xs-12">
                    <h1 class="sean top-30 text-lg-center top-60 " style="color: whitesmoke">Contenido Plataforma</h1>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    @if(Session::has('message'))
        <div class="alert alert-info" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
    <div class="container top-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Nosotros</th>
                            <th>Empresa (Izquierda) </th>
                            <th>Empresa (Derecha) </th>
                            <th>Servicios</th>
                            <th class="text-left w270">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $p)
                            <tr>
                                <td> {{ $p->id }}        </td>
                                <td> {!! $p->nosotros !!}</td>
                                <td> {!! $p->empresa_uno !!}</td>
                                <td> {!! $p->empresa_dos !!}</td>
                                <td> {!! $p->servicios!!}</td>

                                <td>
                                    {!! link_to_route('contenido.edit', $title = 'Editar', $parameters = $p->id, $attributes = ['class'=>'btn btn-outline-info']); !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <section>
        @include('shared.footerAdmin')
    </section>

@stop