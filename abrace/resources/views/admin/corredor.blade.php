
@extends('template.main')
@section('title'){{'Abrace | Admin'}}@endsection
@section('content')
    <style type="text/css">
        body {
            background-color: whitesmoke }
    </style>

    @include('shared.navbarA')

    <div class="container-fluid ">
        <div class="jumbotron mt-5 bg-inverse text-white rounded-0">
            <div align="center">
                <div class="col-xs-12">
                    <h1 class="sean top-30 text-lg-center top-60 " style="color: whitesmoke">Corredores</h1>
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
            <div class="col-md-12 text-right">
                <div class="col-md-12 text-right">
                    <a href="{!! URL::to('/admin/corredor/create') !!}" class="btn btn-outline-success">Crear</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container top-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Horario</th>
                            <th>Fono</th>
                            <th>Foto de perfil</th>
                            <th class="text-left w270">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($corredores as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->nombre }}</td>
                            <td>{{ $p->apellido }}</td>
                            <td>{{ $p->horario }}</td>
                            <td>{{ $p->fono }}</td>
                            <td> <img style="border: 1px solid #ddd;
                                        border-radius: 1px;
                                        padding: 1px;
                                        width: 50px;"
                                      class="animated fadeIn text-align " src="/imgCorredor/{{$p->img}}">
                            </td>

                            <td>
                                {!! link_to_route('corredor.edit', $title = 'Editar', $parameters = $p->id, $attributes = ['class'=>'btn btn-outline-info']); !!}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    @if(!emptyArray($corredores))
                    <div class="alert alert-info" role="alert">
                        <strong>No hay </strong> registros que mostrar
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <section>
        @include('shared.footerAdmin')
    </section>



@stop
